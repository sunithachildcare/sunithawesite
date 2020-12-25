<?php
ob_start();//start output buffer
session_start();//strat session
session_regenerate_id(); 
ini_set("SMTP","74.208.26.138");  //Need to remove on production serevr
ini_set("smtp_port","25"); //Need to remove on production serevr
ini_set("sendmail_path","/usr/sbin/sendmail -t -i"); //Need to remove on production serevr
ini_set('display_errors','0');
ini_set('register_globals','off');
ini_set('session.bug_compat_42','off');
ini_set('session.bug_compat_warn','off');
ini_set("post_max_size", "20M");  //form post  size set in php.ini file
ini_set("upload_max_filesize", "20M"); //file upload size set in php.ini file  and set the confi value $max_size
ini_set('session.gc_maxlifetime',3600); //1 hour session time
ini_set('session.gc_probability',0);
ini_set('max_execution_time',3000);
ini_set('max_input_time',300);
//ini_set('default_charset', 'UTF-8');
$homepage_title=":: Welcome to Royals ::";
//$dbserver="db416658128.db.1and1.com";//host name old
//$dbserver="mysqlv106";//host name old registror
$dbserver="sunithachildcarecom.ipagemysql.com ";//host name new
//$dbuser="dbo416658128";//db user name old
$dbuser="sunitha";//db user name new
//$dbpassword="Qazxsw321";//db password old
$dbpassword="sachit123";//db password new
//$dbname="db416658128";//data base name old
$dbname="sunithachildcare";//data base name new


/* $link = mysql_connect('sunithachildcarecom.ipagemysql.com', 'sunitha', '*password*'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
echo 'Connected successfully'; 
mysql_select_db(sunithachildcare);  */
 
$tag = $_SERVER['REQUEST_URI'];


//$conn= mysql_pconnect($dbserver,$dbuser,$dbpassword) or die(mysql_error());
$conn= mysql_connect('sunithachildcarecom.ipagemysql.com', 'sunitha', 'sachit123') or die(mysql_error()); 
mysql_select_db(sunithachildcare); 

//mysql_select_db($dbname,$conn) or die("error in selecting Database");

$created_date1 =date("Y-n-j");//Cureent date
$created_date2 =date("Y-m-d H:i:s");//Cureent date
$created_date =date("Y-n-j : H:i:s",time());//Cureent date with timestamp
$currdate=date("m-d-Y");//current date for checking with db date
$currdatetime=date("m-d-Y H:i:s");//current date for checking with db date
$record_page=10;//No of records for page
$timingdate=date("m/d/Y");//current date for checking with timing entered date
$currdatetime_login=date("Y-m-d H:i:s");//current date for inserting into db

$max_size="30 MB"; // max file upload size
$max_video_size="20 MB"; //// max video upload size
$path="../images/";
$path1="images/";
$path2="images1/";
$path3="../images1/";
$path4="../images1/";
$path_ads="admin/images/";
$video_path="../videos/";
$video_path1="videos/";

$path_admin="../uploads/";
$path_image="../uploads/images/";
$path_report="../uploads/programmes_cms/";
$path_report1="uploads/programmes_cms/";
$img_fileypes=array("jpg","gif","png","PNG","PNS","jpeg","JPG","JPEG","GIF","MPG","WMV","wmv");     
$path_sanctionorder_admin="Downloads/SanctionOrders/";
$path_sanctionorder="admin/Downloads/SanctionOrders/";
$arr_video_allowed=array("mp4","avi","mov","wmv","swf","flv", "3gp");

$path_qpr_admin="Downloads/QPR/";
$path_qpr="admin/Downloads/QPR/";

$arr_img_allowed=array("pdf","PDF");
$arr_resume_allowed=array("doc","DOC");
$arr_resume_allowed1=array("jpg","gif","png","PNG","PNS","jpeg","JPG","JPEG","GIF","MPG","WMV","wmv");

$currency="";

$AutoSave_Time="500000"; // time in millisecs

// server URl 

$self=explode('/',$_SERVER['PHP_SELF']);
$server_path="http://".$_SERVER['SERVER_NAME']."/".$self[1]."/";

// server URl Birap
//$server_path="http://".$_SERVER['SERVER_NAME']."/";



$sitename="Dtwdesi";
$fromaddress="info@dtwdesi.com";
$admin_mailid="info@dtwdesi.com";




$lockcount=3; // username locking count varaible
$server_name=$_SERVER['SERVER_NAME'];

//Newly Added
$errorpath="Errorlog/";
$errorpath_admin="../Errorlog/";
$sitevisitreportmaxhrs="168";

 
 //pdfconversion paths
 $pdfpath="../wkhtmltopdf/";
 $pdfserverpath="http://124.7.174.227/birap_dev";


 //sec issues
  $regex_url = "/[<|>|\"|;|']/i";
 if(preg_match($regex_url,$_SERVER['REQUEST_URI']))
 {
  		header("Location:logout.php");	
		exit;

 } 
 // This code is for Http referrer tampering Start 
 /*
if($_SERVER['HTTP_REFERER']!='')
{

	
	$regex = "/<\/?\w+((\s+\w+(\s*=\s*(?:\".*?\"|'.*?'|[^'\">\s]+))?)+\s*|\s*)\/?>/i";
	if(preg_match($regex,$_SERVER['HTTP_REFERER']))
	{
	header("Location:logout.php");
	exit;
	}
}*/
// End

$ref='';
$ref = getenv("HTTP_REFERER"); 

if($ref!='')
{
$regex_url_ref = "/[<|>|\"|;|)|(|']/i";
	if(preg_match($regex_url_ref,$ref))
	{
		
		header("Location:logout.php");
		exit;
	}	
}
?>