server {
        listen 80;
        listen [::]:80;

        root /var/www/ivoreumkens.nl/html/public;
        index index.php index.html index.htm index.nginx-debian.html;

        server_name ivoreumkens.nl www.ivoreumkens.nl;

        location / {
                try_files $uri $uri/ /index.php?$query_string;
        }
}
