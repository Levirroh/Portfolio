<?php
include "db_connect.php";
session_start();
if (!isset($_SESSION['id_usuario'])){
    header("Location: login.php");
    exit;
}

?>