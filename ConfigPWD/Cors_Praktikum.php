<?php

// ======================
// HOST APP
// ======================
$url_hostapp = "http://localhost/pwdTugas/responsi/";



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
define('DB_HOST', 'localhost');
define('DB_USER', 'admin');
define('DB_PASS', 'password');
define('DB_NAME', 'pwdrescpba_Latihan-Website-Pure-PHP');



// ======================
// URL STATIC FILE
// ======================
define('static_file', $url_hostapp . 'ResourcesPWD/');




// ======================
// DEFAULT CONTROLLER
// ======================
define('Controller', 'HomeController');



// ======================
// DEFAULT METHOD
// ======================
define('Method', 'index');
