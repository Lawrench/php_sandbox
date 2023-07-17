# Use the official PHP 8.2 base image
FROM php:8.2-cli

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the PHP files to the container's working directory
COPY . /var/www/html

# Expose port 80 (optional if you want to access the application from the host machine)
EXPOSE 80

# Start PHP built-in web server when the container is run
CMD ["php", "-S", "0.0.0.0:80"]
