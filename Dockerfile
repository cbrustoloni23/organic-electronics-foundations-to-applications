# Use Red Hat's Universal Base Image (UBI) for PHP—no Docker Hub rate limits!
FROM registry.access.redhat.com/ubi8/php-8.2

USER root

# If you need extra PHP extensions (e.g., gd, redis), add lines like:
# RUN yum -y install php-gd php-pecl-redis php-pecl-xdebug

# Use the UBI/PHP default app directory
COPY . /opt/app-root/src

# Set appropriate permissions for OpenShift security model
RUN chmod -R a+w /opt/app-root/src

EXPOSE 8080

USER 1001