<?php
echo 'i am here';
$con = mysqli_connect("localhost","faisal","adibpo008","store") or die(mysqli_error($con));
echo 'i am new one';
session_start();
echo 'i am here 1';
?>