<?php

// ======================
// HOST APP
// ======================
$url_hostapp = "http://localhost/pwdTugas/konsulKesehatan/";



// ======================
// URL
// ======================

define('BASEURL', $url_hostapp . 'public/');





// ======================
// DATABASE
// ======================

/*
	HOST, USER, PASS, NAME
	Disesuaikan dengan database kalian masing masing

	contoh :
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', 'root12345');
	define('DB_NAME', 'mydatabase');

*/
define('DB_HOST', '');
define('DB_USER', '');
define('DB_PASS', '');
define('DB_NAME', '');



// ======================
// URL STATIC FILE
// ======================
define('static', $url_hostapp . 'ResourcesPWD/');




// ======================
// DEFAULT CONTROLLER
// ======================
define('Controller', 'HomeController');



// ======================
// DEFAULT METHOD
// ======================
define('Method', 'index');
