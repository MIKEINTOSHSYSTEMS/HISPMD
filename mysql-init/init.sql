-- Create the database if it does not already exist First Attempt
CREATE DATABASE IF NOT EXISTS hispmd_matomo;
-- Grant all privileges to hisp_md and merqhispmddev
GRANT ALL PRIVILEGES ON *.* TO 'hisp_md'@'%' WITH GRANT OPTION;

GRANT ALL PRIVILEGES ON *.* TO 'merqhispmddev'@'%' WITH GRANT OPTION;

FLUSH PRIVILEGES;

-- Create the database if it does not already exist Second Attempt
CREATE DATABASE IF NOT EXISTS hispmd_matomo;