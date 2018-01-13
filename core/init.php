<?php
$db = mysqli_connect('127.0.0.1','root','','myecommerce');
if(mysqli_connect_errno()){
    echo 'Database connection failled with following errors:'. mysqli_connect_error();
    die();

}
?>