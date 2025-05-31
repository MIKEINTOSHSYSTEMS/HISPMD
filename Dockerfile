################################################################################
# Base image for PHP application
################################################################################

# Use an official PHP-FPM runtime as a parent image
FROM php:7.4-fpm AS php_app

LABEL maintainer="MIKEINTOSH SYSTEMS <mikeintoshsys@gmail.com>"
LABEL image.name="mikeintosh-hispmd-app"
LABEL image.tag="latest"

# Set the working directory in the container for PHP application
WORKDIR /var/www/html

# Install basic dependencies first
RUN apt-get update && apt-get install -y \
    apt-transport-https \
    lsb-release \
    ca-certificates \
    gnupg2 \
    && rm -rf /var/lib/apt/lists/*

# Add Nginx repository
RUN echo "deb http://nginx.org/packages/debian/ $(lsb_release -cs) nginx" > /etc/apt/sources.list.d/nginx.list \
    && curl -fsSL https://nginx.org/keys/nginx_signing.key | apt-key add -

# Install system dependencies in separate steps
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libzip-dev \
    libicu-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    libsqlite3-dev \
    libcurl4-openssl-dev \
    libssl-dev \
    libldap2-dev \
    libgmp-dev \
    libsodium-dev \
    zip \
    unzip \
    git \
    curl \
    supervisor \
    --no-install-recommends \
    && rm -rf /var/lib/apt/lists/*

# Install Nginx separately
RUN apt-get update && apt-get install -y nginx --no-install-recommends \
    && rm -rf /var/lib/apt/lists/*

# Configure and install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
    gd \
    mysqli \
    pdo_mysql \
    pdo_pgsql \
    pgsql \
    pdo_sqlite \
    ldap \
    intl \
    soap \
    zip \
    curl \
    mbstring \
    opcache \
    bcmath \
    gmp \
    sodium \
    xml \
    gettext

# Enable PHP extensions
RUN docker-php-ext-enable \
    opcache \
    bcmath \
    gmp \
    sodium \
    xml \
    gettext

# Copy application files
COPY . /var/www/html/
COPY config/nginx.conf /etc/nginx/conf.d/default.conf
COPY config/php.ini /usr/local/etc/php/php.ini

# Set permissions
RUN chmod 644 /etc/nginx/conf.d/default.conf \
    && chown -R www-data:www-data /var/www/html/app/templates_c

# Expose the port PHP-FPM listens on
EXPOSE 9000

# Expose the port Nginx listens on
EXPOSE 80

################################################################################
# Setup for the chatbot application
################################################################################

# Use an official Python runtime as a parent image
FROM python:3.9-slim AS python_app

# Set the working directory for the chatbot
WORKDIR /ai/chat

RUN apt-get update && apt-get install -y \
    build-essential \
    curl \
    software-properties-common \
    git \
    && rm -rf /var/lib/apt/lists/*

# Copy requirements.txt and install Python dependencies
# Adjust this line to copy from the correct location
COPY requirements.txt .
#RUN pip3 install -r requirements.txt && pip3 install sshtunnel
RUN pip3 install -r requirements.txt

# Copy the rest of the chatbot application
COPY . .

# Expose the port Streamlit listens on
EXPOSE 8501

# Healthcheck to ensure the app is running
HEALTHCHECK --interval=30s --timeout=10s --retries=3 \
    CMD curl -f http://localhost:8501/_stcore/health || exit 1

################################################################################
# Setup for Supervisor
################################################################################

# Use the final PHP application stage as base
FROM php_app AS final_stage

# Copy supervisord configuration
COPY config/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Install Python and Streamlit in the final stage
#RUN apt-get update && apt-get install -y python3 python3-pip && pip3 install streamlit sshtunnel
RUN apt-get update && apt-get install -y python3 python3-pip && pip3 install -r requirements.txt

# Copy the chatbot application files
COPY ai/chat /ai/chat

# Set permissions for supervisord.conf (if exists)
RUN if [ -f /etc/supervisor/conf.d/supervisord.conf ]; then \
    chown root:root /etc/supervisor/conf.d/supervisord.conf && \
    chmod 644 /etc/supervisor/conf.d/supervisord.conf; \
    else \
    echo "supervisord.conf not found"; \
    fi

# Set the working directory back to PHP application's directory
WORKDIR /var/www/html

# Start both PHP-FPM and Nginx using supervisord
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/supervisord.conf"]
