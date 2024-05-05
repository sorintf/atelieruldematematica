<?php
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', 1);

session_start();
error_reporting(E_ALL);
// error_reporting(E_ERROR);
// ini_set('max_execution_time', 21600); // 6 hours
ini_set('max_execution_time', 600); // 10 minutes

date_default_timezone_set('Europe/Bucharest');
setlocale(LC_ALL, 'ro_RO.utf8');
#strftime("%e %b %Y", strtotime("2019-12-05")); // how to use in php to local format

define("DB_HOST", "localhost"); // usualy works with localhost
define("DB_NAME", "twoandfr_aieps_full"); // easily created in phpmyadmin
define("DB_USER", "twoandfr_aieps_mainusr"); // easily created in phpmyadmin, don't forget to add the user to the database with desired permissions
define("DB_PASS", "Y_E{q-5zs9i3"); // as complex as possible
define("DB_SECRET", "Am3mzXFFt"); // use this with AES_ENCRYPT/AES_DECRYPT on varbin collumns

define("COOKIE_RUNTIME", 1209600);
// define("COOKIE_DOMAIN", ".yourdomain.com"); // set up your domain
define("COOKIE_DOMAIN", ""); // set up your domain
define("COOKIE_SECRET_KEY", "IdNpXTMHLKUOSDSkhjda9831JKLHA89731");

// if you use MailJet API 
define("MJ_APIKEY_PUBLIC", "e4ff6ce5696f0af969ec687f2faec7bb");
define("MJ_APIKEY_PRIVATE", "6c70928056b736e2b2e2a75f93288b20");
define("MJ_MANAGE_CONTACT", 10374502);
define("MJ_URL", "http://localhost/aieps/www/aiepsplatforma/send_emails.php");

define("BASE_URL", "http://localhost/aieps/www/aiepsplatforma"); // probabily better to do it some other way
define("PLATFORM_NAME", "AIEPS platforma"); // probabily better to do it some other way
define("USER_REGISTRATION", "auto");
define("USER_AUTO_LOGIN", true);



define("FORMAT_DATE", "Y-m-d");
define("FORMAT_DATE_RO_L", "d-m-Y H:i:s");
define("FORMAT_DATE_RO_S", "d-m-Y");

define("MESSAGE_DATABASE_ERROR", "Eroare conectare la baza de date"); // generic message for db connection

if (isset($_GET['action'])) {
	$action = $_GET['action'];
}else{
	$action = "";
}
if ($action=='logout') {
	$action = 'f_index';
}