<?php

session_start();
require_once '../config/db.php';

if(! isset($_SESSION['id_user'])) {
    header('location: ../index.php');
}

require_once 'include/header.php';
require_once 'include/dashboard.php';
require_once 'include/footer.php';