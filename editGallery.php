<style type="text/css">
table, table td{color:white !important;color: white;
padding: 22px !important;}
td{width:130px;}
.hiddens{display:none;}
</style>
<?php 	include("includes/configuration.php"); 
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
		<table cellpadding="4">
		<tr>
		<th class="hiddens">id</th>
		<th>Gallery Name</th>
		<th>Edit</th>
		<th>Delete</th>
		<th>Edit Galery Name</th>
		</tr>
		<?php if(mysql_num_rows($query)==0){echo 'No galleries found';}else{ 
		while($det = mysql_fetch_array($query)){
		?>
		<tr>
			<td class="hiddens galId"><?php echo $det['id']; ?></td>
			<td class="hidden"><?php echo $det['galName']; ?></td>
			<td style="text-align:center;"><a href="galleryUp.php?galId=<?php echo $det['id']; ?>" style="background:url(images/button.png) -48px -50px;padding: 16px;">Edit</a></td>
			<td style="text-align:center;"><a href="#" class="delGal" style="background:url(images/button.png) -48px -50px;padding: 16px;" >Delete</a></td>
			<td class="editGalName<?php echo $det['id']; ?>">Edit Gallery Name</td>
			<td class="upGalName<?php echo $det['id']; ?>" style="display:none;">Update</td>
		</tr>
		<?php }} ?>
		</table>
		
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
		$('.delGal').click(function(){
			var r = confirm("Are you sure you want to remove this Gallery permanently?");	
			if(r == true)
			{		
				var galId = $(this).closest('td').siblings('.hiddens').text();
				//alert(galName);
				//id = parseInt(ImgId);
				window.location = 'deleteGalImgs.php?galId='+galId;
			}
		});
		<?php 					
					$res = mysql_query("select *  from  img_gal_name");
					$res_res = mysql_num_rows($res);
					while($res1 = mysql_fetch_array($res))
					{	
				?>				
				$('.editGalName<?php echo $res1['id']; ?>').click(function(){
					var galName = $(this).siblings('.hidden').text();
					$galId = $(this).siblings('.galId').text();
					$(this).siblings('.hidden').html('<input type="text" name="galNme" value="'+galName+'">');
					$(this).siblings('.upGalName<?php echo $res1['id']; ?>').show();
					$(this).hide();
				});	
				
				$('.upGalName<?php echo $res1['id']; ?>').click(function(){
					$upGal = $(this).siblings('td.hidden').children('input[name="galNme"]').val();
					$galId = $(this).siblings('.galId').text();
					$.ajax({
					  type: "POST",
					  dataType: 'json',
					  url: "http://sunithachildcare.com/updateGalName.php",
					  data: { id  :$galId,name :$upGal},
					  success: function(msg){
					  console.log(msg);
							$response = msg					
					  },complete: function(){		
						$.each($response, function(index, value){
							var details = value.split("@");
							$id = details[0];
							$GalName = details[1];
							window.location.reload();
							/*$('upGalName<?php echo $res1['id']; ?>').siblings('.hiddens').html($GalName);
							$('upGalName<?php echo $res1['id']; ?>').siblings('.editGalName<?php echo $res1['id']; ?>').show();
							$('upGalName<?php echo $res1['id']; ?>').hide(); */	
							});							
						}
					});					
				}); 
				<?php } ?>
	});
</script>
</body>
</html>
