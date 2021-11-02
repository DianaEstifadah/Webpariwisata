<?php
$title = "Wisata Kota Kediri | Home Admin";
session_start();
require 'function.php';
if (!isset($_SESSION["login"])) {
    header("location: ../login.php");
    exit;
}
$jumArt = count(data("SELECT * FROM artikel"));
include 'templateAdmin/header.php';
include 'templateAdmin/sidebar.php';
include 'templateAdmin/navigation.php';
include 'templateAdmin/footer2.php';
include 'templateAdmin/footer.php';
