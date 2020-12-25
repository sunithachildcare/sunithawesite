<style type="text/css">
#addImg{width: 135px;
background: url('images/button.png') -34px -58px;
margin-top: 40px;
padding: 9px 21px;
cursor:pointer;}
table, table td{color:white !important;
padding: 15px !important;}
.hiddens{display:none;}
#imagesForm{margin-left:300px;}
.input_holder{margin-top:35px;}
</style>
<?php
include("includes/configuration.php");
 include('header.php'); 
if($_SESSION['name']!="" ){
?>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0" style="margin:0px auto;">

  <tr><td style="float:right;"></td></tr>
  
  <tr>
  <td>
  <div class="line"></div>
		<div class="innr_subhdg"></div>
		<?php 
/* 			//Check if there are any files ready for upload
			if(isset($_FILES['uploaded_files']))
			{
				//For each file get the $key so you can check them by their key value
				foreach($_FILES['uploaded_files']['name'] as $key => $value)
				{
				
					//If the file was uploaded successful and there is no error
					if(is_uploaded_file($_FILES['uploaded_files']['tmp_name'][$key]) &&	$_FILES['uploaded_files']['error'][$key] == 0)
					{
						
						//Create an unique name for the file using the current timestamp, an random number and the filename			
						$filename = $_FILES['uploaded_files']['name'][$key];
						$filename = time().rand(0,999).$filename;
						 $upload_dir = 'uploads/'.$_POST['album'];
								if(!is_dir($upload_dir)){
									mkdir($upload_dir, 0777);
									chmod($upload_dir, 0777);
									mkdir($upload_dir.'/thumb', 0777);
									chmod($upload_dir.'/thumb', 0777);
								}
							$gal = 	mysql_query("select * from img_gal_name where galName = '".$_POST['album']."'");
							if(mysql_num_rows($gal)!=0){
							
								while($gals = mysql_fetch_array($gal))
									{
										$galId = $gals['id'];
									}
							}else{
							
								mysql_query("insert into img_gal_name(id,galName) values(NULL,'".$_POST['album']."')");
								$gal1 = 	mysql_query("select * from img_gal_name where galName = '".$_POST['album']."'");
								if(mysql_num_rows($gal1)!=0){
									while($gals1 = mysql_fetch_array($gal1))
									{
										$galId = $gals1['id'];
									}
								}
							}
						//Check if the file was moved
						if(move_uploaded_file($_FILES['uploaded_files']['tmp_name'][$key], 'uploads/'.$_POST['album'].'/'. $filename))
						{
							
								$src = 'uploads/'.$_POST['album'].'/'. $filename;
								$dest = 'uploads/'.$_POST['album'].'/thumb/'. $filename;
								$desired_width = 150;
								//$dest1 = 'img/gallery/'.$_POST['album'].'/thumb220/'. $filename;
								//$desired_width1 = 220;
								make_thumb($src, $dest, $desired_width);
								//make_thumb($src, $dest1, $desired_width1);	
								$path = 'Royals/uploads/'.$_POST['album'].'/'.$filename;
								$thumb = 'Royals/uploads/'.$_POST['album'].'/thumb/'.$filename;
								$qu = mysql_query("INSERT INTO  image_gallery(img_cat,galId, th_img, re_img) VALUES('".$_POST['album']."','".$galId."','".$thumb."','".$path."')");
								
						}
					}
				
				}
			
			} */
			//Loop through each file
			if(isset($_FILES['uploaded_files']))
			{	
				//echo count($_FILES['uploaded_files']['name']);
				$upload_dir = 'uploads/'.$_POST['album'];
				if(!is_dir($upload_dir)){
					mkdir($upload_dir, 0777);
					chmod($upload_dir, 0777);
					mkdir($upload_dir.'/thumb', 0777);
					chmod($upload_dir.'/thumb', 0777);
				}
				$gal = 	mysql_query("select * from img_gal_name where galName = '".$_POST['album']."'");
				if(mysql_num_rows($gal)!=0){
				
					while($gals = mysql_fetch_array($gal))
						{
							$galId = $gals['id'];
						}
				}else{				
					mysql_query("insert into img_gal_name(id,galName) values(NULL,'".$_POST['album']."')");
					$gal1 = 	mysql_query("select * from img_gal_name where galName = '".$_POST['album']."'");
					if(mysql_num_rows($gal1)!=0){
						while($gals1 = mysql_fetch_array($gal1))
						{
							$galId = $gals1['id'];
						}
					}
				}
				
				for($i=0; $i<count($_FILES['uploaded_files']['name']); $i++) {
				  //Get the temp file path
				  $tmpFilePath = $_FILES['uploaded_files']['tmp_name'][$i];					
				  //Make sure we have a filepath
				  if ($tmpFilePath != ""){
					//Setup our new file path
					$filename = $_FILES['uploaded_files']['name'][$i];
						$filename = time().rand(0,999).$filename;
					$newFilePath = "uploads/" .$_POST['album']."/". $filename;
					
					//Upload the file into the temp dir
					if(move_uploaded_file($tmpFilePath, $newFilePath)) {					
							 $src = 'uploads/'.$_POST['album'].'/'. $filename;
								$dest = 'uploads/'.$_POST['album'].'/thumb/'. $filename;
								$desired_width = 150;
								//$dest1 = 'img/gallery/'.$_POST['album'].'/thumb220/'. $filename;
								//$desired_width1 = 220;
								//make_thumb($src, $dest, $desired_width);
								//make_thumb($src, $dest1, $desired_width1);	
								$path = 'uploads/'.$_POST['album'].'/'.$filename;
								$thumb = 'uploads/'.$_POST['album'].'/thumb/'.$filename;
								$qu = mysql_query("INSERT INTO  image_gallery(img_cat,galId, th_img, re_img) VALUES('".$_POST['album']."','".$galId."','".$thumb."','".$path."')");

					}
				  }
				}
				echo count($_FILES['uploaded_files']['name']).' files uploaded successfully';
			}
	function make_thumb($src, $dest, $desired_width) {

	/* /* read the source image *
	$source_image = imagecreatefromjpeg($src);
	$width = imagesx($source_image);
	$height = imagesy($source_image);
	
	/* find the "desired height" of this thumbnail, relative to the desired width  *
	$desired_height = floor($height * ($desired_width / $width));
	
	/* create a new, "virtual" image *
	$virtual_image = imagecreatetruecolor($desired_width, $desired_height);
	
	/* copy source image at a resized size *
	imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);
	
	/* create the physical thumbnail image to its destination *
	imagejpeg($virtual_image, $dest); */
	
// image source and extension
		$imgSrc = $src;
		$imgExt = substr($imgSrc,-3);
		 
		// thumb image size in pixels
		$thumbnail_width = $desired_width;
		$thumbnail_height = $desired_width;
		 
		// getting the image dimensions  
		list($width_orig, $height_orig) = getimagesize($imgSrc);   
		// image type
		if($imgExt == "jpg"||$imgExt == "JPG"){ $myImage = imagecreatefromjpeg($imgSrc); }
		if($imgExt == "gif"||$imgExt == "GIF"){ $myImage = imagecreatefromgif($imgSrc); }
		if($imgExt == "png"||$imgExt == "PNG"){ $myImage = imagecreatefrompng($imgSrc); }
		 
		$ratio_orig = $width_orig/$height_orig;
		 
		if ($thumbnail_width/$thumbnail_height > $ratio_orig) {
		   $new_height = $thumbnail_width/$ratio_orig;
		   $new_width = $thumbnail_width;
		} else {
		   $new_width = $thumbnail_height*$ratio_orig;
		   $new_height = $thumbnail_height;
		}
		 
		$x_mid = $new_width/2;  //horizontal middle
		$y_mid = $new_height/2; //vertical middle
		 
		$process = imagecreatetruecolor(round($new_width), round($new_height)); 
		 
		imagecopyresampled($process, $myImage, 0, 0, 0, 0, $new_width, $new_height, $width_orig, $height_orig);
		$thumb = imagecreatetruecolor($thumbnail_width, $thumbnail_height); 
		imagecopyresampled($thumb, $process, 0, 0, ($x_mid-($thumbnail_width/2)), ($y_mid-($thumbnail_height/2)), $thumbnail_width, $thumbnail_height, $thumbnail_width, $thumbnail_height);
		 
		imagedestroy($process);
		imagedestroy($myImage); 
		 
		if($imgExt == "jpg"||$imgExt == "JPG"){ imagejpeg($thumb, $dest); }
		if($imgExt == "gif"||$imgExt == "GIF"){ imagegif($thumb,$dest); }
		if($imgExt == "png"||$imgExt == "PNG"){ imagepng($thumb, $dest); }
	}
			

			?> 
		<div class="gallerydiv" style="color:white;"> 
		<h2>Welcome Admin!</h2>
			<?php include('includes/left_menu.php'); ?>
			<form action="http://sunithachildcare.com/galleryUp.php" method="POST" enctype="multipart/form-data" id="imagesForm">
				<span style="font-size:15px;font-weight:bold;">Album Name : </span>	
				<?php if($_GET['galId']!='' && isset($_GET['galId'])){
					$qry = mysql_query("select * from img_gal_name where id=".$_GET['galId']);
					while($qryDet = mysql_fetch_array($qry)){
				?>
				<input type="hidden" name="album" id="album" value="<?php echo $qryDet['galName'];?>" /><span><?php echo $qryDet['galName'];?></span>
				<?php }}else{ ?>
				<input type="text" name="album" id="album" />
				<?php } ?>				
				<div class="input_holder">
					<input type="file" name="uploaded_files[]" id="input_clone" multiple />
				</div>
				<input type="submit" id="addImg" value="<?php if($_GET['galId']!='' && isset($_GET['galId'])){ echo "Update gallery"; }else{ echo 'Add Gallery';} ?>" />
			</form>	 
		<?php if($_GET['galId']!='' && isset($_GET['galId'])){  ?>
		<form action="deleteGalImgs.php" method="POST" >
			<table id="images">
				<tr>
					<th class="hiddens">id</th>
					<td>&nbsp;</td>
					<th>Image Thumb</th>
				</tr>
				<?php 
					$img = mysql_query("select * from image_gallery where galId='".$_GET['galId']."'");
					while($img_res = mysql_fetch_array($img)){
				?>
				<tr>
					
					<td class="hiddens"><?php echo $img_res['id']; ?></td>
					<td><input type="checkbox" value="<?php echo $img_res['id']; ?>" name="galFiles[]"></td>
					<td><img src="<?php echo $img_res['re_img']; ?>" alt="img" width="150" height="150"/></td>
				</tr>
				<?php } ?>
			</table>
			<input type="submit" style="background: url(images/button.png) -28px -47px;width: 140px;height: 54px;" value="Delete Selected.!" />
			</form>
			<script type="text/javascript">
/* 			$(function(){
				$('.rvmHdrImg').click(function(){
					var r = confirm("Are you sure you want to remove this Image permanently?");	
					if(r == true)
					{		
						var ImgId = $(this).closest('td').siblings('.hiddens').text();
						id = parseInt(ImgId);
						window.location = 'deleteGalImgs.php?imgId='+id;
					}
				});		
			}); */
			</script> 
	   <?php } ?>
		</div>
  </td>
  </tr>
</table>
<?php include('footer.php'); ?>
<?php } else{  header("Location:logout.php"); }  ?>