FROM registry.access.redhat.com/ubi8/ubi

USER root
RUN dnf -y install php php-cli php-gd php-pdo php-mysqlnd httpd && dnf clean all
RUN echo "ServerName localhost" >> /etc/httpd/conf/httpd.conf
COPY . /var/www/html
RUN chmod -R a+w /var/www/html

EXPOSE 80

CMD ["/usr/sbin/httpd", "-DFOREGROUND"]