<?php
  include_once('Connection.php');
 ?>
 
 
 <?php  
 
 $delete_id = $_GET['del'];
 $query= "delete from stu_record1 where id='$delete_id'";
 if(mysql_query($query))
 {
	 
	 echo"<script> window.open('Edit_delete_data_in_mysql.php?deleted=Data has been deleted...!','_self')</script>";
	 
  }
 
 ?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>