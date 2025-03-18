#!/bin/bash

#chmod +x extract-cert.sh

# Set the path to acme.json
ACME_FILE="acme.json"

# Ensure acme.json exists
if [[ ! -f "$ACME_FILE" ]]; then
  echo "No acme.json file found. Make sure Traefik is running and has generated the certificates."
  exit 1
fi

# Set permissions for acme.json (change to allow access as needed)
# Allow read/write access to everyone (not recommended for production)
#chmod 777 $ACME_FILE

# Alternatively, allow read/write access to a specific user or group (recommended for production)
# chown <user>:<group> $ACME_FILE
# chmod 640 $ACME_FILE

# Extract the certificates from acme.json and create PEM files
jq -r '.Certificates[] | select(.domain.main == "hispmd.moh.gov.et") | .certificate' $ACME_FILE | base64 -d > fullchain.pem
jq -r '.Certificates[] | select(.domain.main == "hispmd.moh.gov.et") | .key' $ACME_FILE | base64 -d > privkey.pem

# Output success message
echo "Certificates saved to /letsencrypt/fullchain.pem and /letsencrypt/privkey.pem"
