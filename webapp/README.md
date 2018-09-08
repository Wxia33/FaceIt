# Desentric Databases
A data market for data collection and data cleaning.

## Installation Guide
1. Follow [this link](https://www.lynda.com/PHP-tutorials/Add-MySQL-bin-directory-PATH/537759/585182-4.html?autoplay=true) to install Apache, MySql and PHP. 
2. Set MySql Database account and password to 'root' and '1234'
3. Open Command Prompt(Windows) or Terminal(Mac/Linux), type:
```
mysql -u root -p
```
4. Enter password 1234.
5. Create Database called emailaddress. 
```
CREATE DATABASE emailaddress;
```
6. Create a table named email. 
```
CREATE TABLE email (
  id int(11) NOT NULL AUTO_INCREMENT,
  email varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
)
```


