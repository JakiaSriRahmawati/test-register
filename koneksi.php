<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_registrasi");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$country = $_POST['country'];
$card = $_POST['card'];
$security = $_POST['security'];
$name_card = $_POST['name_card'];
$buy_it = $_POST['buy_it'];

?>