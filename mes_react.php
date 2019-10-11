<?php
include_once 'includes/db_config.php'; 
$name = mysqli_real_escape_string($con, $_POST['name']);
$message = mysqli_real_escape_string($con,$_POST['message']);
$sql = mysqli_query($con, 'INSERT INTO blogs(name,message)
         VALUES("'.$_POST['name'].'","'.$_POST['message'].'")');
?>
<h1> SUCCESSFULL </h1>
<a href="mes.php">Write further</a>