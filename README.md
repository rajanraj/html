<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("connectdb.php");
$sql=mysql_query("select *from emp_info");
echo"<table border='1'><tr><th>Employe ID</th><th>Employe Name</th><th>Designation</th><th>Reporting Manager</th><th>Phone No</th><th>Email Id</th><th>Company Name</th><th>Address</th></tr>";
while($row=mysql_fetch_array($sql))
{
	echo"<tr>";
	echo"<td><a href='update_emp.php?id=$row[emp_id]'>".$row['emp_id']."</a></td>";
	echo"<td><a href='update_emp.php?id=$row[emp_id]'>".$row['emp_name']."</a></td>";
	echo"<td>".$row['desgn']."</td>";
	echo"<td>".$row['rep_mng']."</td>";
	echo"<td>".$row['ph_no']."</td>";
	echo"<td>".$row['email_id']."</td>";
	echo"<td>".$row['comp_name']."</td>";
	echo"<td>".$row['address']."</td>";
	echo"</tr>";
}
	echo"</table>";


?>	
</body>
</html>
