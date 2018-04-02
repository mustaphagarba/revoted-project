<?php
include('includes/config.php');
$collect='';
if($_POST){
$collect = insert($_POST);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>|| VOTING REGISTRATION SYSTEM||</title>
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
    <p style="text-align:center; color:#FF0000;"><strong><marquee  behavior="scroll">THIS REISTRATION FORM IS FOR ELEGIBLE NIGERIAN WHO ARE ABOVE 18 YEARS OF AGE AS FROM 23RD JUNE 2012 </marquee></strong></p>
</div>
  <th height="41" colspan="2" scope="col"><h1><center>
   </center>
   
   </h1></th>
	</div>
</div>
<div id="footer">
  <table width="651" border="0" align="center">
    <tr>
      <th width="645" height="783" scope="col"><table width="667" height="31" border="0" align="center" bgcolor="#00FF00">
          <tr>
            <th width="607" scope="col"><div align="center"><span class="style4">REGISTRATION FORM </span></div></th>
          </tr>
          <tr>
            <th scope="col"><div "align="center"  style="background:#FF00OO"  >
          <h1    align="center"><strong><?php echo $collect; ?></strong></h1>
          </div>&nbsp;        </th>
          </tr>
        </table>
          <form action="" method="post" enctype="multipart/form-data" id="form1">
            <table width="431" border="0" align="center" cellpadding="3" cellspacing="17">
              <tr>
                <th width="122" scope="col"><div align="justify">FIRSTNAME</div></th>
                <th width="246" scope="col"><div align="justify">
                    <input type="text" name="txtfirstname" />
                </div></th>
              </tr>
              <tr>
                <td><div align="justify">LASTNAME</div></td>
                <td><div align="justify">
                    <input type="text" name="txtlastname" />
                </div></td>
              </tr>
              <tr>
                <td><div align="justify">SEX</div></td>
                <td><div align="justify">
                  <label>
                  <select name="txtsex">
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                  </select>
                  </label>
                </div></td>
              </tr>
              <tr>
                <td><div align="justify">AGE</div></td>
                <td><div align="justify">
                    <input type="text" name="txtage" />
                </div></td>
              </tr>
              <tr>
                <td><div align="justify">ADDRESS</div></td>
                <td><div align="justify">
                    <input type="text" name="txtaddress" />
                </div></td>
              </tr>
              <tr>
                <td><div align="justify">L.G.A</div></td>
                <td><div align="justify">
                    <input type="text" name="txtlga" />
                </div></td>
              </tr>
              <tr>
                <td><div align="justify">STATE</div></td>
                <td><div align="justify">
                    <input type="text" name="txtstate" />
                </div></td>
              </tr>
              <tr>
                <td><div align="justify">COUNTRY <span class="style5">(NON-NIGERIA)</span></div></td>
                <td><div align="justify">
                    <input type="text" name="txtcountry" />
                </div></td>
              </tr>
              <tr>
                <td><div align="justify">PHONE</div></td>
                <td><div align="justify">
                    <input type="text" name="txtphone" />
                </div></td>
              </tr>
              <tr>
                <td><div align="justify">E-MAIL</div></td>
                <td><div align="justify">
                    <input type="text" name="txtemail" />
                </div></td>
              </tr>
              <tr>
                <td><div align="justify">PREFERED ELECTION DISTRICT </div></td>
                <td><div align="justify">
                    <input type="text" name="txtelectiondist" />
                </div></td>
              </tr>
              <tr>
                <td>OCCUPATION</td>
                <td><div align="justify">
                    <input type="text" name="txtoccupation" />
                </div></td>
              </tr>
              <tr>
                <td>USERNAME</td>
                <td><input type="text" name="txtusername" /></td>
              </tr>
              <tr>
                <td>VOTER'S ID </td>
                <td><input type="text" name="txtelectionid" value="<?php  print rand(1, 1000000)._ID; ?> "/></td>
              </tr>
              <tr>
                <td><input type="submit" name="Submit" value="Registered" /></td>
                <td>&nbsp;</td>
              </tr>
            </table>
          </form></th>
    </tr>
  </table>
  <p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>Copyright &copy; 2011 Designed by "Ndueso Walter FOR LEASTPAY SOLUTIONS LTD" FOR 08067361023</a></p>
</div>
</body>
</html>
