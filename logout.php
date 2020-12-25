<?php
include("includes/configuration.php");
?>
<html>
<head>
<script language="javascript" type="text/javascript"> 
function closeWindow() { 
//window.open('','_parent',''); 
//window.close(); 
//window.close(); 
//return false;
var win=window.open("about:blank","_self");
win.close();

} 
</script> 
</head>
<body>
<?php
if($_SERVER["HTTP_REFERER"] == "")
{

echo "<script>alert('Sorry! Access denied to view this page');window.location.href='index.php';</script>";
exit;
}
else 
{
if($_SESSION['user_id']!="")
{
	
}
session_destroy();
$_SESSION['name']='';
$referer=explode('/',$_SERVER["HTTP_REFERER"]);
$url=$_SERVER["HTTP_REFERER"];


if($referer[2]!=$server_name)
{
header("Location:index.php");
exit;
}

header("Location:index.php");
exit;
}
//echo "<script>location.href='index.php'</script>";
?>
</body>
</html>