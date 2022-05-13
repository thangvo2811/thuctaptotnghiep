<?php 
require_once "../config/connect.php";

$m = isset($_GET['masp'])?$_GET['masp']:'';
if ($m !='')
{
    $sql="delete from sanpham where masp= ? ";
    $a =[$m];
    $objStatement= $objPDO->prepare($sql);//return B
    $objStatement->execute($a);//ket qua truy van
    //$n = $objStatement->rowCount();
}
header('location:index.php');