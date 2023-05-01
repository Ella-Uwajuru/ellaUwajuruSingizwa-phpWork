<?php
$connect=new mysqli('localhost','root','','registration_db');
if(!$connect){
    die(mysqli_error($connect));
};
?>
