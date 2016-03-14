<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?php
include("connectdb.php");
$sql="update emp_info set emp_id=$_POST[employeid],emp_name='$_POST[employename]',desgn='$_POST[designation]',rep_mng='$_POST[reportingmanager]',comp_name='$_POST[companyname]',ph_no=$_POST[phone],email_id='$_POST[emailid]',address='$_POST[address]' where emp_id='$_POST[id]'";
if(!mysql_query($sql,$connect))
{
	echo"error:" . mysql_error();
}
else
{
	echo"Employe details added successfully";
}

?>
</body>
</html>