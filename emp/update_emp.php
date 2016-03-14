<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Employe Details</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="updatedatadb.php">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div align="center">
  
  <?php
  include("connectdb.php");
$sql=mysql_query("select * from emp_info where emp_id='$_GET[id]'");
$row=mysql_fetch_array($sql);
  ?>
    <table width="369" height="286" border="0">
      <tr>
        <td width="122">Employeid</td>
        <td width="237"><label for="textfield"></label>
        <input type="text" name="employeid" id="textfield" value=<?php echo $row['emp_id']; ?> ></td>
      </tr>
      <tr>
        <td>EmployeName</td>
        <td><input type="text" name="employename" id="textfield2"  value=<?php echo $row['emp_name']; ?>></td>
      </tr>
      <tr>
        <td>Designation</td>
        <td><input type="text" name="designation" id="textfield3"  value=<?php echo $row['desgn']; ?>></td>
      </tr>
      <tr>
        <td>ReportingManager</td>
        <td><input type="text" name="reportingmanager" id="textfield4"  value=<?php echo $row['rep_mng']; ?>></td>
      </tr>o
      <tr>
        <td>CompanyName</td>
        <td><input type="text" name="companyname" id="textfield5" value=<?php echo $row['comp_name']; ?>></td>
      </tr>
      <tr>
        <td>Phone</td>
        <td><input type="text" name="phone" id="textfield8" value=<?php echo $row['ph_no']; ?>></td>
      </tr>
      <tr>
        <td>EmailId</td>
        <td><input type="text" name="emailid" id="textfield6" value=<?php echo $row['email_id']; ?>></td>
      </tr>
      <tr>
        <td>Address</td>
        <td><input type="text" name="address" id="textfield7" value=<?php echo $row['address']; ?>></td>
        <input type="hidden" name="id" value=<?php echo $_GET['id']; ?> >
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="button" id="button" value="Update" /></td>
      </tr>
    </table>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>