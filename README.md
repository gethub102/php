# PHP

## Confirguring PHP

	From phpinfo(); get php info page
	Then get 'Configuration File (php.ini) Path'
	Open php.ini file then do:
	* display_errors = On. This should be used while development rather than product.
	* error_reporting  =  E_ALL. This is for development
	* html_errors = On
	* output_buffering = Off
	* date.timezone = "America/New_York". default timezone set, otherwise warning will comeout

## Mysql
	
	```
	mysql -u root --password=*****
	```
	or 
	```
	mysql -u root -p 
	```

	```
	SHOW DATABASES;
	CREATE DATABASE db_name;
	USE db_name;
	DROP DATABASE db_name;
	```

	```
	GRANT ALL PRIVILEGES ON db_name.*
	TO 'username'@'localhost'
	IDENTIFIED BY 'password';
	-- create a username with password for this db, access to all the db_name.*; only localhost access
	```

	```
	SHOW GRANTS FOR 'username'@'localhost'
	```

	```
	mysql -u 'username' -p 'db_name' 
	-- to login db_name with username
	```