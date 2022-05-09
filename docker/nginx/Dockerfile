FROM nginx

RUN mkdir /etc/nginx/ssl \
    && chmod 700 /etc/nginx/ssl \
    && openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
        -subj "/CN=laravel-test.com/O=default/C=UK" \
        -keyout /etc/nginx/ssl/default.key \
        -out /etc/nginx/ssl/default.crt
        