# miblog
Construcción de un blog desde cero

Lo primero es instalar en el frontend Apache, PHP y el paquete MySQL para PHP:

```
$ sudo apt install apache2 libapache2-mod-php7.3 php7.3-mysql
```

Y arrancar el servidor web:

```
$ sudo apache2ctl start
```

Lo segundo es instalar MySQL en el backend y crear la base de datos y las tablas. Para ello se entra en MySQL como súper usuario: 
```
create database miblog;
create user miblog_user identified by 'xxxxxx'  
grant all privileges on miblog.* to 'miblog_user'@'%'
flush privileges
```
