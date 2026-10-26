<?php
require_once dirname(__FILE__, 2) . '/validations/sessionvalidate.php';
require_once dirname(__FILE__, 2) . '/config/config.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == '' || $password == '') {
        validateRequird($_POST);
        header("Location:" . BASE_URL . "views/session.php");
        exit;
    }
     header("Location:" . BASE_URL);
}
