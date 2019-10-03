<?php
include('connect.php');

$get_id=$_GET['id'];

mysql_query("delete from files where id='$get_id'")or die(mysql_error());
header('location:files.php');
?>
