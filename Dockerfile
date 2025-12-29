FROM registry.access.redhat.com/ubi8/ubi

USER root
RUN dnf -y install php php-cli php-gd php-pdo php-mysqlnd httpd && dnf clean all
COPY . /opt/app-root/src
RUN chmod -R a+w /opt/app-root/src

EXPOSE 80

CMD ["/usr/sbin/httpd", "-DFOREGROUND"]