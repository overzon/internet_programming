<?php
$host = "localhost";
$user = "root";
$pass = "1234";
$dbname = "mystore";

$conn = mysqli_connect($host,$user,$pass,$dbname);
 if(!$conn)  die(“ไม่สามารถติดต่อฐานข้อมูลได้”);
 ?>
