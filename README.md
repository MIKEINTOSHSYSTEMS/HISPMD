# HISPMD
HIS Performance Monitoring Dashboard

[![Docker Build and Deploy](https://github.com/MIKEINTOSHSYSTEMS/HISPMD/actions/workflows/hispmd-build-and-deploy.yml/badge.svg)](https://github.com/MIKEINTOSHSYSTEMS/HISPMD/actions/workflows/hispmd-build-and-deploy.yml)

## File and Folder Structure

```
HISPMD/
│
├── analytics/
│   └── (analytics data files)
│
├── api/
│   └── (API endpoint files)
│
├── app/
│   └── (core application files)
│
├── config/
│   ├── nginx.conf
│   ├── php.ini
│   └── supervisord.conf
│
├── src/
│   └── (source code files)
│
├── styles/
│   └── (CSS stylesheets)
│
├── test/
│   └── (testing scripts)
│
├── vendor/
│   └── (PHP dependencies)
│
├── mysql-init/
│   └── (MySQL initialization scripts)
│
├── map_files/
│   └── (map data files)
│
├── ai/
│   └── chat/
│       ├── app.py
│       ├── requirements.txt
│       └── (other chatbot files)
│
├── .env
├── docker-compose.yml
├── Dockerfile
└── README.md
```

## Setup Instructions

### 1. Set up environment variables

Create a `.env` file and define necessary variables like database credentials, API keys, etc.

### 2. Build and start the Docker containers

```bash
docker-compose -p hispmd_sys up --build -d
```
#### Development Mode
```bash
docker-compose -f dev-docker-compose.yml -p hispmd_sys up --build -d
```
#### Production Mode
```bash
docker-compose -f prod-docker-compose.yml -p hispmd_sys up --build -d
```

This command builds the necessary Docker images and starts all defined services.

### 3. Access the application

- **Web application:** Open [http://localhost:8080](http://localhost:8080) in your web browser.
- **Chatbot application:** Access [http://localhost:8501](http://localhost:8501).

## Networking

The services are connected through a custom Docker bridge network named `hispmdnet`.

## Volumes

Persistent data and configuration files are managed using Docker volumes:

- hispmd_pgadmindata
- hispmd_vizdata
- hispmd_mongodata
- grafana-storage

## Environment Variables

Environment variables are used extensively for configuration, such as database connection details, API keys, etc.

## Health Checks

Health checks are implemented for critical services like the chatbot application using curl commands in Docker Compose.

## Security Considerations

- Ensure sensitive information in `.env` files and configuration files are protected.
- Regularly update Docker images and dependencies to patch security vulnerabilities.

## Maintenance and Monitoring

- Use Grafana for monitoring metrics and performance of the application and services.
- Regularly clean up unused Docker resources (`docker system prune`).

## Troubleshooting

- Check Docker logs (`docker-compose logs`) for service-specific issues.
- Review application and service configurations for misconfigurations.

## Docker Application Stack Diagram

```plaintext
   +-------------------------------------------------------+
   |                       Docker Host                     |
   +-------------------------------------------------------+
                    |                          |
                    |                          |
   +----------------+-------------------+      |       +-------------------+
   |          +-------------------+    |       |       |   External APIs   |
   |          |   Grafana         |    |       |       +-------------------+
   |          |   Container       |    |       |
   |          +-------------------+    |       |
   |                :                  |       |       +-------------------+
   |                :                  |       |       |   Other Services  |
   |          +-------------------+    |       |       +-------------------+
   |          |   Metabase        |    |       |
   |          |   Container       |    |       |
   |          +-------------------+    |       |
   |                :                  |       |       +-------------------+
   |                :                  |       |       |   Chatbot         |
   |          +-------------------+    |       |       |   Container       |
   |          |   PHP-FPM         |    |       |       +-------------------+
   |          |   Container       |    |       |
   |          +-------------------+    |       |
   |                :                  |       |       +-------------------+
   |                :                  |       |       |   Nginx           |
   |          +-------------------+    |       |       |   Container       |
   |          |   PostgreSQL      |    |       |       +-------------------+
   |          |   Container       |    |       |
   |          +-------------------+    |       |
   |                :                  |       |       +-------------------+
   |                :                  |       |       |   MariaDB         |
   |          +-------------------+    |       |       |   Container       |
   |          |   MongoDB         |    |       |       +-------------------+
   |          |   Container       |    |       |
   |          +-------------------+    |       |
   |                :                  |       |       +-------------------+
   |                :                  |       |       |   phpMyAdmin      |
   |          +-------------------+    |       |       |   Container       |
   |          |   pgAdmin          |   |       |       +-------------------+
   |          |   Container       |    |       |
   |          +-------------------+    |       |
   |                :                  |       |       +-------------------+
   |                :                  |       |       |   Mongo Express   |
   |          +-------------------+    |       |       |   Container       |
   |          |   Chatbot         |    |       |       +-------------------+
   |          |   Container       |    |       |
   |          +-------------------+    |       |
   |                :                  |       |
   +----------------+-------------------+-------+--------------------------+
                    |                          |
                    |                          |
   +----------------+-------------------+      |
   |          +-------------------+    |       |
   |          |   nginx           |    |       |
   |          |   Container       |    |       |
   |          +-------------------+    |       |
   |                :                  |       |
   |                :                  |       |
   |          +-------------------+    |       |
   |          |   phpMyAdmin      |    |       |
   |          |   Container       |    |       |
   |          +-------------------+    |       |
   |                :                  |       |
   |                :                  |       |
   |          +-------------------+    |       |
   |          |   pgAdmin          |   |       |
   |          |   Container       |    |       |
   |          +-------------------+    |       |
   |                :                  |       |
   |                :                  |       |
   |          +-------------------+    |       |
   |          |   Mongo Express   |    |       |
   |          |   Container       |    |       |
   |          +-------------------+    |       |
   |                :                  |       |
   |                :                  |       |
   |          +-------------------+    |       |
   |          |   Other Services  |    |       |
   |          |   Container       |    |       |
   |          +-------------------+    |       |
   |                                   |       |
   +------------------------------------+-------+
```

Instructions along with the file and folder structure and the Docker application stack diagram.
Adjust the details as per your specific project configurations and requirements.

Additional instructions and guides including configuration parameters are going to be incorporated here progressively...

### © 2024 All rights reserved.
