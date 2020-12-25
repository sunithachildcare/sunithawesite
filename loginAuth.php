<?php include("includes/configuration.php");
$uName = $_POST['loginId']; 
$uPswd = base64_encode($_POST['loginPswd']); 
if($uName!=""&&$uPswd!=""){
	$query = mysql_query("select * from admin_login WHERE email='".$_POST['loginId']."' and password='".base64_encode($_POST['loginPswd'])."'");
	if(mysql_num_rows($query)!=0)
	{	
		while($res1 = mysql_fetch_array($query)){
		$_SESSION['email']=$res1['email'];
		$_SESSION['name']=$res1['name'];
		$_SESSION['user_id']=$res1['id'];		
		header("Location:galleryUp.php");}
	}else{
		header("Location:admin.php?er=2");
	}
}else{
	header("Location:admin.php?er=1");
}

?>

