<?php
   include_once('Connection.php');
 ?>
 
 
 <?php  

 
 $edit_record = $_GET['edit'];
 $query = "select * from stu_record1 where id='$edit_record'";
 $run = mysql_query($query);
 while($result = mysql_fetch_array($run))
 {
	// $edit_id=$result['id'];
	$student_name = $result['student_name'];
	$school_name = $result['school_name'];
	$roll_no = $result['roll_no'];
	$status = $result['status'];
 
 }
 
 ?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="edit.php?edit_id='<?php echo $edit_record; ?>'">

<!--Insert Table -->

<table width="500" border="1" cellpadding="15px" align="center">
  <tr>
    <th scope="col" colspan="2" style="background-color:#FF3">Updating Records</th>
   
  </tr>
  <tr>
    <td>Sudent Name</td>
    <td> <input type="text" name="stu_name" value= " <?php echo $student_name; ?> " /></td>
  </tr>
  <tr>
    <td>School Name</td>
    <td><input type="text" name="sc_name" value="<?php echo $school_name; ?>" /></td>
  </tr>
  <tr>
    <td>Roll No.</td>
    <td><input type="text" name="roll" value="<?php echo $roll_no; ?>" /></td>
  </tr>
  <tr>
    <td>Status</td>
    <td><input type="text" name="sts" value="<?php echo $status; ?>" /></td>
  </tr>
 
  <tr>
    <td colspan="2" align="center"><input type="submit" name="update" value="Update Record" style="background-color:#0FC" /></td>
 
  </tr>
  
</table>
</form>

<?php 


if(isset($_POST['update']))
{
	
    $edit_id1=$_GET['edit_id'];	
    $student_name=$_POST['stu_name'];
	$school_name=$_POST['sc_name'];
	$roll_no=$_POST['roll'];
	$status=$_POST['sts'];
	
	$query1 = "update stu_record1 set student_name='$student_name',school_name='$school_name',roll_no='$roll_no',status='$status' where id = $edit_id1";
	
	if(mysql_query($query1))
	{
	      header("Location:Edit_delete_data_in_mysql.php?updated=Data has been updated......!");	
	}
 
	
}




?>

</body>
</html>