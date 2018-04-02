<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="evoting"; // Database name

//anpp
if(isset($_POST['Submit'])) {
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$names =  0;
$result = mysql_query("SELECT gov_count FROM governorship_votes where party ='anpp'");
 while($row = mysql_fetch_row($result)){
   $names =  $row [0];
   $names =  $names + 1;
   
   mysql_query("UPDATE governorship_votes SET gov_count = $names WHERE party ='anpp' ");
  } 
}

//pdp
if(isset($_POST['Submit2'])) {
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$names2 =  0;
//$regnum = $_POST['txtnumber'];
$result = mysql_query("SELECT gov_count FROM governorship_votes where party ='pdp'");
 while($row = mysql_fetch_row($result)){
   // $names = $row[1];
 $names2 =  $row [0];
   $names2 =  $names2 + 1;
   
   mysql_query("UPDATE governorship_votes SET gov_count=$names2 WHERE party ='pdp' ");
  } 
}

//acn
if(isset($_POST['Submit3'])) {
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$names3 =  0;
//$regnum = $_POST['txtnumber'];
$result = mysql_query("SELECT gov_count FROM governorship_votes where party ='acn'");
 while($row = mysql_fetch_row($result)){
   // $names = $row[1];
 $names3 =  $row [0];
   $names3 =  $names3 + 1;
   
   mysql_query("UPDATE governorship_votes SET gov_count=$names3 WHERE party ='acn' ");
  } 
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>|| VOTING REGISTRATION SYSTEM||</title>
<script type="text/javascript">
function confirm_vote(textfield){
if(confirm("ARE U SURE YOU WISH TO VOTE FOR "+textfield+" ?"))
{
return  true;
}
else {return false;
}
	 
}

function printpage(){
if(confirm("Are you sure you want to send this page to the printer?"))
{
window.print();
}
else
{return false}	 
}

</script>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style11 {font-size: 18px; font-weight: bold; }
.style13 {font-size: x-large; font-weight: bold; color: #000000; }
.style2 {	color: #FF00FF;
	font-weight: bold;
}
.style3 {
	font-size: 18px;
	color: #000000;
}
.style4 {font-size: 18px; color: #FFFFFF; }
.style5 {font-size: 12px}
.style8 {color: #990000}
-->
</style>
</head>
<body>
<div id="header">
  <table width="200" align="center">
    <tr>
      <td height="212"><img src="images/header1.jpg" alt="" width="770" height="210" /></td>
    </tr>
  </table>
</div>
<div id="menu">
	<ul>
		<li> <a href="index.php"> |  Home  |</a></li>
		<li>
		  <a href="login.php">|  Voting  |</a></li>
		<li>
		  <a href="result.php">|  Result  |</a></li>
		<li>
		  <a href="login.php" >|  Login  |</a></li>
		<li>
		  <a href="contact.php">|  Contact Us  |</a></li>
	</ul>
</div>
<div id="content">
	<div id="left">
    <p style="text-align:center; color:#FF0000;"><strong><marquee  behavior="scroll">
    THIS VOTING SYSTEM IS FOR ELEGIBLE NIGERIAN WHO ARE ABOVE 18 YEARS OF AGE AS FROM 23RD JUNE 2012 
    </marquee></strong></p>
</div>
  <th height="41" colspan="2" scope="col"><h1><center>
   </center>
   
   </h1></th>
</div>
</div>
<div id="footer">
  <p><a href="logout.php">LOGOUT</a></p>
	<form id="form1" method="post" action="">
	  <table width="671" border="0" align="center">
        <tr>
          <th width="208" bgcolor="#00FF66" scope="col"><span class="style8">CANDIDATE</span></th>
          <th width="197" scope="col"><span class="style8">NAME</span></th>
          <th width="156" bgcolor="#00FF66" scope="col"><span class="style8">PARTY</span></th>
          <th width="92" bgcolor="#993300" scope="col">UPDATED RESULT </th>
        </tr>
        <tr>
          <td height="151"><img src="images/contact4.jpg" alt="" width="154" height="152" /></td>
          <td>PHARM. KUFRE EKPO M. </td>
          <td><input type="submit" name="Submit" value="ANPP" onclick="return confirm_vote('<?php echo "PHARM. KUFRE EKPO M. ";  ?>')"/></td>
          <td><?php echo $names;  ?>&nbsp;</td>
        </tr>
        <tr>
          <td height="246"><img src="images/AUTHOR_PHOTO.jpg" alt="" width="147" height="187" /></td>
          <td>REV. DR JOHN DUKE </td>
          <td><input type="submit" name="Submit2" value="PDP" onclick="return confirm_vote('<?php echo "REV. DR JOHN DUKE ";  ?>')"/></td>
          <td><?php echo $names2;  ?></td>
        </tr>
        <tr>
          <td height="152"><img src="images/contact5.jpg" alt="" width="140" height="153" /></td>
          <td>ALAHJI MUSA SHOLA </td>
          <td><input type="submit" name="Submit3" value="ACN" onclick="return confirm_vote('<?php echo "ALAHJI MUSA SHOLA ";  ?>')"/></td>
          <td><?php echo $names3;  ?></td>
        </tr>
        <tr>
          <td height="105">&nbsp;</td>
          <td>&nbsp;</td>
          <td><a href="gov_result.php">click here to view all parties result </a></td>
          <td>&nbsp;</td>
        </tr>
      </table>
  </form>
	<p>&nbsp;</p>
	<p align="center">Copyright &copy; 2011 Designed by "Ndueso Walter FOR LEASTPAY SOLUTIONS LTD" FOR 08067361023</a></p>
</div>
</body>
</html>
