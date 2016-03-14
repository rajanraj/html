<?php
include("connectdb.php");
$sql=" insert into emp_info(emp_id,emp_name,desgn,rep_mng,comp_name,ph_no,email_id,address) values ('$_POST[employeid]','$_POST[employename]','$_POST[designation]','$_POST[reportingmanager]','$_POST[companyname]','$_POST[phone]','$_POST[emailid]','$_POST[address]')";
if(!mysql_query($sql,$connect))
{
	echo"error:" . mysql_error();
}
else
{
	echo"Employe details added successfully";
}




?>