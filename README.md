#Lista de Clientes com PHP-OO

##Modelo de implantação:
        a) clonar a aplicação na maquina:
                git clone https://github.com/luvett/php_oo.git php_oo
        b) Configurando o servidor:
                i) utilizando Built-in web server:
                        cd ~/public_html
                        php -S 0.0.0.0:8090
                   
                ii) utilizando virtual host:

                        <VirtualHost *:80>
                            ServerName php.oo.localhost
                            DocumentRoot /var/www/html/php_oo
                            SetEnv APPLICATION_ENV "development"
                            <Directory "/var/www/html/php_oo">
                                DirectoryIndex index.php
                                AllowOverride All
                                Order allow,deny
                                Allow from all
                            </Directory>
                        </VirtualHost>

                        127.0.0.1 php_oo.localhost
                        
** obs: E altamente recomendável utilizar o IP 0.0.0.0 para rodar a aplicação, caso contrario modificar a constante APP_HOST_DEV_IP do arquivo config,pho com o ip escolhido **                    
