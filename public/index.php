<?php

if (!session_id()) {
    session_start();
}

require_once '../BootstrapPWD/Packages_Praktikum.php';

$app = new App;
