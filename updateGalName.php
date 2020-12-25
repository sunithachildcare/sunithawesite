<?php 
include("includes/configuration.php");
$upGal = $_POST['name'];
$galId = $_POST['id'];
mysql_query("update img_gal_name set galName='$upGal' Where id=$galId");
mysql_query("update image_gallery set img_cat='$upGal' Where galId=$galId");
$det[] = $galId.'@'.$upGal;	
echo json_encode($det)	;
?>