<?php 

include("includes/configuration.php"); 
	if(isset($_POST['title'])&&isset($_POST['desc']))
	{
		//echo 'hello<br/>';
		//$query= "insert into evnts(Title,Description) values('".$_POST['title']."','".htmlspecialchars($_POST['desc'])."')";
		//print_r($query);
		$test = mysql_query("insert into evnts(Title,Description) values('".$_POST['title']."','".htmlspecialchars($_POST['desc'])."')");
		//var_dump($test);
		if($test) header("Location: events.php?y=1");
	}	
?>
<style type="text/css">
table, table td{color:white !important;color: white;
padding: 22px !important;}
.text{float:left;color:white;font-weight:bold;}
 p{padding:5px !important;margin:5px !important;}
</style>
<?php 
 include('header.php'); 
?>

<table width="800" style="margin:0px auto;" border="0" align="center" cellpadding="0" cellspacing="0">
  
  <tr>
  <td>
  <div class="line"></div>
		<div class="innr_subhdg"><h2>Admin Login</h2></div>
		<div class="gallerydiv" style="height:200px; text-align:center; color:#000;"> 
		<?php

	if($_SESSION['name']!="" ){ ?>
		<?php include('includes/left_menu.php'); 
			$query = mysql_query("select * from img_gal_name");
		?>
			<?php if(isset($_GET['y'])&& $_GET['y']==1){echo "<h3 style='color:white;'>Event Posted successfully</h3>";}; ?>
			<form action="events.php" method="post" id="eventup">
			<p><span class="text">Event Title :</span><input type="text" name="title" id="title" style="width:245px" /></p>
			
			<p><span class="text">Event Description :</span><textarea name="desc" id="desc" style="width: 293px;height: 100px;"></textarea></p>
			<p><input type="submit" style="width: 140px;height: 29px;background: url(images/button.png) -27px -59px;" id="evntsub" /></p>
			</form>
		
	<?php }else{ ?>
	<?php  header("Location:logout.php");  }  ?>
		</div>
  </td>
  </tr>
  
 <tr><td>

<?php include("footer.php");?>
</td></tr>
</table>
<script type="text/javascript">
	$(function(){
		$('#evntsub').click(function(e){
			var $validationMsg ="";
			e.preventDefault();
			$title = $('#title').val();
			if($title==""){$validationMsg = 'Please enter Title ' ;}
			if($validationMsg!=""){
				alert($validationMsg);
				$('#title').focus();
			}else{
				$desc = $('#desc').val();
				if($desc==""){$validationMsg = 'Please enter Description ' ;}
				if($validationMsg!=""){
					alert($validationMsg);
					$('#desc').focus();
				}else{
					if($validationMsg!=""){
						alert($validationMsg);
					}else{
						$('#eventup').submit();
					}
				}
			}
		});
	});
</script>
</body>
</html>
