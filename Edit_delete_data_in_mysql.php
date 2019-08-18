<?php
  include_once('Connection.php');
 ?>


<?php 


if(isset($_POST['submit']))
{

   $stu_name = $_POST['stu_name'];
   $sc_name = $_POST['sc_name'];
   $roll = $_POST['roll'];
   $sts = $_POST['sts'];
   

    if(mysql_query("insert into stu_record1(student_name,school_name,roll_no,status) values('$stu_name','$sc_name','$roll','$sts')"))
    {

        echo('data inserted in database, Thank you!!');	 
	   echo"<script> window.open('Edit_delete_data_in_mysql.php?inserted=Data has been inserted...!','_self')</script>";
    }
	
}



?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>

   #show tr th{ background-color:#3FF;}
   #show tr td #del{color: #F00;}

</style>

</head>

<body>

<form method="post" action="">

<!--Insert Table -->

<table width="500" border="1" cellpadding="15px" align="center">
  <tr>
    <th scope="col" colspan="2" style="background-color:#FF3">Student Registration Form</th>
   
  </tr>
  <tr>
    <td>Sudent Name</td>
    <td> <input type="text" name="stu_name" /></td>
  </tr>
  <tr>
    <td>School Name</td>
    <td><input type="text" name="sc_name" /></td>
  </tr>
  <tr>
    <td>Roll No.</td>
    <td><input type="text" name="roll" /></td>
  </tr>
  <tr>
    <td>Status</td>
    <td><input type="text" name="sts" /></td>
  </tr>
 
  <tr>
    <td colspan="2" align="center"><input type="submit" name="submit" value="Submit Record" style="background-color:#0FC" /></td>
 
  </tr>
</table>

<h3 align="center" style="color:#F00"> <?php echo @$_GET['deleted']; ?></h3>
<h3 align="center" style="color:#093"> <?php echo @$_GET['inserted']; ?></h3>
<h3 align="center" style="color:#093"> <?php echo @$_GET['updated']; ?></h3>

<!--Insert Table close -->

<!--Show data  Table begun -->

<table id="show" width="700" border="2" align="center" cellpadding="15px" style="margin-top:40px">
  <tr>
    <th scope="col">Serial No.</th>
    <th scope="col">Student Name</th>
    <th scope="col">School Name</th>
    <th scope="col">Roll No.</th>
    <th scope="col">Status</th>
    <th scope="col">Delete</th>
    <th scope="col">Edit</th>
  </tr>
  
 <?php 


$query = mysql_query("select * from stu_record1");
while ($result=mysql_fetch_array($query))
{
	$id =$result['id'];
	$st_name =$result['student_name'];
	$sc_name =$result['school_name'];
	$rl_no =$result['roll_no'];
	$sts =$result['status'];
	
?>
  
  <tr align="center">
      <td><?php echo $id; ?></td>
      <td><?php echo $st_name; ?></td>
      <td><?php echo $sc_name; ?></td>
      <td><?php echo $rl_no; ?></td>
      <td><?php echo $sts; ?></td>
      <td><a id="del" href="delete.php?del=<?php echo $id; ?>">Delete</a></td>
      <td><a href="edit.php?edit=<?php echo $id; ?>">Edit</a></td>
  </tr>
  
  <?php }?>
  
</table>

<!--Show data  Table close -->

</form>


</body>
</html>