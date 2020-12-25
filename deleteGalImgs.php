<?php 
require_once("includes/configuration.php");

 if($_GET['imgId']!='' && isset($_GET['imgId'])){
//	echo $_GET['imgId'];
	mysql_query("delete from image_gallery where img_id=".$_GET['imgId']."");
 } 
 if($_GET['galId']!='' && isset($_GET['galId'])){
//	echo $_GET['imgId'];
	mysql_query("delete from image_gallery where galId='".$_GET['galId']."'");
	mysql_query("delete from img_gal_name where id='".$_GET['galId']."'");
	
 }
 //echo $_GET['imgId'];
 if($_REQUEST['galFiles']!='' && isset($_REQUEST['galFiles'])){
 $file = $_REQUEST['galFiles'];
 $num_files=count($file);
	for($i=0;$i<$num_files;$i++)
	{
		mysql_query("delete from image_gallery where id=".$file[$i]."");
	}
 }
 $url = $_SERVER['HTTP_REFERER'];
header("Location:".$url);  

?>