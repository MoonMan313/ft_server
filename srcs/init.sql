CREATE DATABASE my_db;
CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';
GRANT ALL PRIVILEGES ON my_db.* TO 'admin'@'localhost';
FLUSH PRIVILEGES;