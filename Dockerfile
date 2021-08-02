# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: cdionna <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/01/27 16:33:58 by cdionna           #+#    #+#              #
#    Updated: 2021/01/27 17:15:54 by cdionna          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster

RUN apt-get update && apt-get -y upgrade && \
	apt-get install -y nginx \
						mariadb-server \
						php php7.3-fpm php-mbstring \
						wordpress

COPY ./srcs/* /

ADD https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.tar.gz 1234.tar.gz

RUN mv nginx.conf ./etc/nginx/ && \
	mv wp-config.php ./usr/share/wordpress && \
	mkdir ./var/www/cdionna && \
	mv ./usr/share/wordpress ./var/www/cdionna/wordpress && \
	service mysql start && mysql < init.sql && \
	rm -rf init.sql && \
	tar -xzvf 1234.tar.gz && \
	mv phpMyAdmin-5.0.4-all-languages ./var/www/cdionna/phpmyadmin && \
	rm -rf 1234.tar.gz && \
	mv ./config.inc.php ./var/www/cdionna/phpmyadmin/ && \
	mkdir -p ./var/www/cdionna/phpmyadmin/tmp/ && \
	chmod -R 777 ./var/www/cdionna/phpmyadmin/tmp/ && \
	mkdir key &&  \
	openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
			-out /key/localhost.crt \
			-keyout /key/localhost.key \
			-subj '/C=RU/O=School21/ST=TATARSTAN/L=Kazan/CN=localhost/OU=cdionna' && \
	chmod -R 755 /key/*

EXPOSE 80 443

ENTRYPOINT bash service_start.sh
