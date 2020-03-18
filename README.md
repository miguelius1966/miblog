# miblog
Construcción de un blog desde cero 
Lo primero es crear la base de datos y las tablas. Para ello se entra en MySQL como súper usuario: 
```
create database miblog; 
create user miblog_user identified by 'xxxxxx'  
grant all privileges on miblog.* to 'miblog_user'@'%' 
flush privileges 
```
