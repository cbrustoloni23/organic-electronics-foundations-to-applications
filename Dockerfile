FROM registry.access.redhat.com/ubi8/ubi

USER root

# Install PHP and (optionally) Apache or other PHP extensions/modules
RUN dnf -y install php php-cli php-gd php-pdo php-mysqlnd httpd && dnf clean all

# Copy your app code into the default location
COPY . /opt/app-root/src

# Set file permissions (important for OpenShift security context)
RUN chmod -R a+w /opt/app-root/src

EXPOSE 8080

# Use built-in PHP web server for dev/demo
CMD ["php", "-S", "0.0.0.0:8080", "-t", "/opt/app-root/src"]