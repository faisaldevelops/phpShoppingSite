<?php
require 'includes/common.php';
$user_id=$_SESSION['id'];
$item_id=$_GET['id'];
echo $item_id." ".$user_id;
?>
