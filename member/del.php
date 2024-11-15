<?php

if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
    echo "非法使用";
    exit();
}
include "../function.php";
// $dsn="mysql:host=localhost;charset=utf8;dbname=crud";
// $pdo=new PDO($dsn,'root','');

$id=$_GET['id'];
del('member',$id);
// $sql="delete from member where id='$id'";

// $pdo->exec($sql);

header("location:success.php");
?>