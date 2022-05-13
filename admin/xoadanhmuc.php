<?php
require_once '../config/connect.php';
$ma=$_GET['madanhmuc'];
$sqld="delete from danhmuc where madanhmuc='$ma'";
$delete=execute($sqld);
header("location:danhmuc.php");
?>