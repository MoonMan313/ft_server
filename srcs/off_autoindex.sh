#!/bin/bash

sed -i "s/autoindex on;/autoindex off;/g" /etc/nginx/nginx.conf
nginx -s reload
