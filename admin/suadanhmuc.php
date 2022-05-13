<?php
require_once '../config/connect.php';
$tendm=$_GET['tendm'];
$madm=$_GET['madm'];
print_r($tendm);
print_r($madm);
$sql="update danhmuc set tendanhmuc='$tendm' where madanhmuc='$madm'";
$v=execute($sql);
header("location:danhmuc.php");
?>