################################################################################
# Base image for PHP application
################################################################################

# Use an official PHP-FPM runtime as a parent image
FROM php:7.4-fpm AS php_app

# Set the image name and tag as labels
LABEL maintainer="MIKEINTOSH SYSTEMS <mikeintoshsys@gmail.com>"
LABEL image.name="mikeintosh-hispmd-app"
LABEL image.tag="latest"

# Set the working directory in the container
WORKDIR /var/www/html

# Copy all application source code and directories to the container
COPY . /var/www/html/

# Copy custom nginx configurations
COPY config/nginx.conf /etc/nginx/conf.d/default.conf

# Copy custom php.ini configuration
COPY config/php.ini /usr/local/etc/php/php.ini

# Install system dependencies and PHP extensions
RUN apt-get update && \
    apt-get install -y \
    libpng-dev \
    libmagickwand-dev \
    libcurl4-openssl-dev \
    libonig-dev \
    libldap2-dev \
    libicu-dev \
    libzip-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libxml2-dev \
    libpq-dev \
    libsqlite3-dev \
    libgmp-dev \
    libssl-dev \
    libsodium-dev \
    zip \
    unzip \
    git \
    curl \
    && \
    # Install PHP extensions
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    # Commented out imap due to errors
    # docker-php-ext-configure imap --with-kerberos --with-imap-ssl && \
    docker-php-ext-install -j$(nproc) \
    gd \
    mysqli \
    ldap \
    intl \
    pdo_mysql \
    pdo_pgsql \
    pdo_sqlite \
    soap \
    zip \
    curl \
    mbstring \
    opcache \
    bcmath \
    gmp \
    sodium \
    # imap \
    xml \
    gettext \
    && \
    # Enable additional PHP modules as needed
    docker-php-ext-enable \
    opcache \
    bcmath \
    gmp \
    sodium \
    # imap \
    xml \
    gettext \
    && \
    # Set permissions after copying files
    chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && chown www-data:www-data /etc/nginx/conf.d/default.conf \
    && chmod 644 /etc/nginx/conf.d/default.conf \
    && \
    # Clean up unnecessary packages and files
    apt-get autoremove -y \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Set permissions for specific folders
RUN chown -R www-data:www-data /var/www/html/app/templates_c

# Expose the port PHP-FPM listens on
EXPOSE 9000

################################################################################
# Setup for the chatbot application
################################################################################

# Set the working directory for the chatbot
WORKDIR /ai/chat

# Copy requirements.txt and install Python dependencies
COPY ai/chat/requirements.txt .
RUN pip3 install -r requirements.txt && pip3 install sshtunnel

# Copy the rest of the chatbot application
COPY ai/chat /ai/chat

# Expose the port Streamlit listens on
EXPOSE 8501

# Healthcheck for Streamlit (optional: customize as needed)
HEALTHCHECK --interval=30s --timeout=10s CMD curl --fail http://localhost:8501/_stcore/health || exit 1

################################################################################
# Setup for Supervisor
################################################################################

# Copy supervisord configuration
COPY config/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Set permissions for supervisord.conf (if exists)
RUN if [ -f /etc/supervisor/conf.d/supervisord.conf ]; then \
    chown root:root /etc/supervisor/conf.d/supervisord.conf && \
    chmod 644 /etc/supervisor/conf.d/supervisord.conf; \
    else \
    echo "supervisord.conf not found"; \
    fi

# Start both PHP-FPM and Streamlit using supervisord
CMD ["/usr/bin/supervisord"]
