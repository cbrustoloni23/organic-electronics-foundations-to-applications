FROM registry.access.redhat.com/ubi8/ubi

USER root

# Install PHP and needed PHP extensions/modules
RUN dnf -y install \
    php \
    php-cli \
    php-gd \
    php-pdo \
    php-mysqlnd \
    php-json \
    httpd \
    && dnf clean all

# Optional: verify that json_decode exists during the image build
RUN php -m | grep -i json && php -r 'var_dump(function_exists("json_decode"));'

# Copy your app code into the default location
COPY . /opt/app-root/src

# Set file permissions
RUN chmod -R a+w /opt/app-root/src

EXPOSE 8080

# Use built-in PHP web server
CMD ["php", "-S", "0.0.0.0:8080", "-t", "/opt/app-root/src"]