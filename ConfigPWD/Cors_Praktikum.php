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
	Disesuaikan dengan database yang ada

	contoh :
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', 'root12345');
	define('DB_NAME', 'mydatabase');

*/
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'pwdResponsi047');



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





// ======================
// Created by Anang Nur Prasetya
// ======================
