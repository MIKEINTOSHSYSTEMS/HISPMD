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

# Copy application source code to the container
COPY app/ /var/www/html/app/
COPY map_files/ /var/www/html/map_files/
COPY src/ /var/www/html/src/
COPY styles/ /var/www/html/styles/
COPY mysql-init/ /var/www/html/mysql-init/
COPY vendor/ /var/www/html/vendor/

# Copy additional files to the container
COPY _config.yml /var/www/html/
COPY .env /var/www/html/
COPY index.php /var/www/html/
COPY server.html /var/www/html/
COPY test.php /var/www/html/
COPY manifest.json /var/www/html/

# Copy AI chat files to the container
COPY ai/ /var/www/html/ai/

# Copy custom nginx configurations
COPY config/nginx.conf /etc/nginx/conf.d/default.conf

# Copy custom php.ini configuration
COPY config/php.ini /usr/local/etc/php/php.ini

# Install PHP extensions and other dependencies
RUN apt-get update && \
    apt-get install -y libpng-dev && \
    docker-php-ext-install pdo pdo_mysql gd

# Expose the port PHP-FPM listens on
EXPOSE 9000

# Start PHP-FPM when the container runs
CMD ["php-fpm"]

################################################################################
# Base image for AI Chatbot Service
################################################################################

# Use an official Python runtime as a parent image
FROM python:3.9-slim AS ai_chatbot

WORKDIR /ai/chat

RUN apt-get update && apt-get install -y \
    build-essential \
    curl \
    software-properties-common \
    git \
    && rm -rf /var/lib/apt/lists/*

# Copy requirements.txt first to leverage Docker cache
COPY ai/chat/requirements.txt /ai/chat/

# Install dependencies
RUN pip install -r requirements.txt

# Copy the rest of the AI application
COPY ai/chat/ /ai/chat/

# Expose the port Streamlit listens on
EXPOSE 8501

# Healthcheck for the Streamlit service
HEALTHCHECK CMD curl --fail http://localhost:8501/_stcore/health

# Start Streamlit when the container runs
ENTRYPOINT ["streamlit", "run", "app.py", "--server.port=8501", "--server.address=0.0.0.0"]
