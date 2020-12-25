<?php include("includes/configuration.php"); ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: Sunitha's child care ::</title>
<link href="styles/style.css" rel="stylesheet" type="text/css">
<!--Menu Starts-->


    <script type="text/javascript" src="menu/jquery.js"></script>
    <script type="text/javascript" src="menu/menu.js"></script>
    <!--Menu End-->

 <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
<noscript>
			<link rel="stylesheet" type="text/css" href="css/noscript.css" />
</noscript>


</head>

<body id="body">
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">  
  <tr>
  <td>
  <div class="line"></div>
		<div class="innr_subhdg" style="color:white;" ><h2>Admin Login</h2></div>
		<div class="gallerydiv" style="margin:0px auto; padding: 20px 0px; text-align:center; color:white;"> 
		<?php
	
	if($_SESSION['name']!="" ){
		echo 'You have already Logged in. <span style="float:right;"><a href="logout.php">Logout</a></span><br/><a href="galleryUp.php">Go to Gallery uploading page</a>';
	}else{ ?>
	<?php if(isset($_GET['er'])) { if ($_GET['er']=='1'){echo "Fields can not be empty";}if($_GET['er']=='2'){echo "Username or Password are invalid";}} ?>
			
				<form action="loginAuth.php" method="post" name="loginDet">			
				<div style="width:300px; margin:0px auto; background-color:#B4DF5B ; padding:20px;">

<div style="float:left; padding:10px; text-align:left; width:80px;">Email:</div> <div style="padding:10px; text-align:left;"><input name="loginId" type="text" id="loginId"  /></div>
<div style="float:left; padding:10px; text-align:left; width:80px;">Password:</div> <div style="padding:10px; text-align:left;"><input type="password" name="loginPswd" id="loginPswd" /></div>
<div><input type="submit" id="loginSubmit" value="Login" /></div>
</div></form>
	<?php }  ?>
		</div>
  </td>
  </tr>
</table>

</body>
</html>
