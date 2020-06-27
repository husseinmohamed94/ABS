<?php
require 'config.php';

$id = $_GET['id'];

if(isset($_GET['id'])  AND  $_GET ['id'] > 0 ) {
    $del= ' DELETE FROM post WHERE $id=id  ';
    $id = trim(intval(abs($_GET['id'])));
    $posts = mysqli_query($db_connect,$del);
}else{
    header("location:index.php" );
}