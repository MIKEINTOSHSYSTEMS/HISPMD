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
    supervisor \
    python3-pip \
    wget \
    build-essential \
    libtool \
    autoconf \
    libssl-dev \
    --no-install-recommends && \
    # Install libsodium from source
    wget https://download.libsodium.org/libsodium/releases/libsodium-1.0.18.tar.gz && \
    tar -zxvf libsodium-1.0.18.tar.gz && \
    cd libsodium-1.0.18 && \
    ./configure && \
    make && \
    make install && \
    cd .. && \
    rm -rf libsodium-1.0.18.tar.gz libsodium-1.0.18 && \
    # Install PHP extensions
    pecl install imagick && \
    docker-php-ext-enable imagick && \
    docker-php-ext-install pdo pdo_mysql gd mysqli curl mbstring sodium && \
    # Clean up unnecessary packages and files
    apt-get remove -y \
    wget \
    build-essential \
    libtool \
    autoconf \
    libssl-dev && \
    apt-get autoremove -y && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Expose the port PHP-FPM listens on
EXPOSE 9000

# Set the working directory for the chatbot
WORKDIR /ai/chat

# Copy requirements.txt and install Python dependencies
COPY ai/chat/requirements.txt .
RUN pip3 install -r requirements.txt

# Copy the rest of the chatbot application
COPY ai/chat /ai/chat

# Expose the port Streamlit listens on
EXPOSE 8501

# Healthcheck for Streamlit (optional: customize as needed)
HEALTHCHECK --interval=30s --timeout=10s CMD curl --fail http://localhost:8501/_stcore/health || exit 1

# Copy supervisord configuration
COPY config/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Start both PHP-FPM and Streamlit using supervisord
CMD ["/usr/bin/supervisord"]
