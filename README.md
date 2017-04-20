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
