<?php include("includes/configuration.php"); ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: Welcome to Royal Challengers
Michigan ::</title>
	<link href="styles/style.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
	<!--Menu Starts-->
    <script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>  
		
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="fancybox/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="fancybox/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript">
	$(function(){
		$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});
	
	});
	</script>
</head>
<body id="body">
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="logo" >
    
    <?php include("includes/top.php");?>


    
    
    </td>
  </tr>
  <tr>
    <td align="center">
     <?php include("includes/menu.php");?>
   <div id="copyright"><a href="http://apycom.com/"></a></div> 
    </td>
  </tr>
  
  <tr>
  <td>
  <div class="line"></div>
		<div class="innr_subhdg"></div>
		<div class="gallerydiv" style="text-align:center; color:#000; padding: 20px;"> 
			<?php if(isset($_GET['id'])&&$_GET['id']!=""){
				$qry = mysql_query("select * from image_gallery where galId = '".$_GET['id']."'");
				if(mysql_num_rows($qry)==0){echo 'No images found';}else{
				while($det = mysql_fetch_array($qry)){
				?>
				<a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo $det['re_img']; ?>"><img src="<?php echo $det['re_img']; ?>" height="120" width = "120" style="border: #fff solid 4px;" alt="" /></a>
			<?php }}} ?>
		</div>
  </td>
  </tr>
  
 <tr><td>

<?php include("includes/footer.php");?>
</td></tr>
</table>
<script type="text/javascript" src="menu/menu.js"></script>

</body>
</html>
