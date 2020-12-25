<?php include('header.php'); ?> 
<style type="text/css">
dd{color:snow;}
dt{color: aquamarine;font-weight: bold;font-size:16px}
</style>
  <!--==============================content================================-->
    <section id="content"><div class="ic"></div>
        <div class="container_12">	
          <div class="grid_4 bot-1">
            <h2 class="top-6">Contact Us</h2>
            <div class="map">
              <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=2323+Cabo+Way,+Rancho+Cordova,+CA,+United+States&amp;aq=0&amp;oq=2323+cabo+way,Rancho+Cordova,+CA&amp;sll=17.408909,78.465759&amp;sspn=0.376735,0.676346&amp;ie=UTF8&amp;hq=&amp;hnear=2323+Cabo+Way,+Rancho+Cordova,+California+95670,+United+States&amp;ll=38.618605,-121.250157&amp;spn=0.00964,0.021136&amp;t=m&amp;z=14&amp;output=embed"></iframe><br /><small><a target="_blank" href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=2323+Cabo+Way,+Rancho+Cordova,+CA,+United+States&amp;aq=0&amp;oq=2323+cabo+way,Rancho+Cordova,+CA&amp;sll=17.408909,78.465759&amp;sspn=0.376735,0.676346&amp;ie=UTF8&amp;hq=&amp;hnear=2323+Cabo+Way,+Rancho+Cordova,+California+95670,+United+States&amp;ll=38.618605,-121.250157&amp;spn=0.00964,0.021136&amp;t=m&amp;z=14" style="color:#0000FF;text-align:left">View Larger Map</a></small>
            </div>
			<dl>
				<dt>Hours of Operation:</dt>
				<dd>Monday-Friday 7:00 am -6:00 Pm</dd>
				<dd>Openings available for all ages</dd>
				<dd>Full/ Part time (hourly)</dd>
				<dd>Weekend/evening care available upon appointments;</dd>
				<dd></dd>
			</dl>
            <dl>
				<dt>Drop-ins are most welcome.</dt>
			</dl>
            <dl>
                <dt>Address</dt>
				<dd>2323 cabo way <br/>Rancho Cordova, CA 95670.</dd>
                <dd><span>Telephone: </span>+1 916 635 4770</dd>
                <dd><span>E-mail: </span><a href="mailto:Care.sunitha@gmail.com" class="link">Care.sunitha@gmail.com</a></dd>
            </dl> 
          </div>
          <div class="grid_8">
            <div class="block-1 top-5">
            	<div class="block-1-shadow">
					<?php if(isset($_GET['p'])&& $_GET['p']==1){echo "<h3>We'll get in touch with you soon. Thank you</h3>";}; ?>
                	<h2 class="clr-6">Contact Form</h2> 
					<div id="message"></div>
                    <form id="form" method="post" action="contacts.php" >
                      <fieldset>
                        <label><strong>Name:</strong><input type="text" id="Name" name ="Name" value=""><strong class="clear"></strong></label>
                        <label><strong>Email:</strong><input type="text" id="Email" name ="Email"  value=""><strong class="clear"></strong></label>
                        <label><strong>Phone:</strong><input type="text" id="Phone" name ="Phone" maxlength="12"  value=""><strong class="clear"></strong></label>
                        <label><strong>Message:</strong><textarea id="Message" name="Message"></textarea><strong class="clear"></strong></label>
                        <strong class="clear"></strong>
                        <!--<div class="btns pad-2"><a href="#" class="link-2">Clear</a><a href="#" id="send" class="link-2" onClick="document.getElementById('form').submit()">Send</a></div>-->
						<div class="btns pad-2"><a href="#" class="link-2">Clear</a><a href="#" id="send" class="link-2" name="send">Send</a></div>
                      </fieldset>  
					 
                    </form> 
                </div>
            </div>  
          </div>
          <div class="clear"></div>
        </div>
    </section>
	<script type="text/javascript">
	$(function(){
		$('#send').click(function(e){
			e.preventDefault();
			var $validationMsg = "";				
				var $Name =  $('#Name').val();
				if($Name == ""){$validationMsg += "Your Good Name. Please!!";}
			//	else if(!$bName.match(/^[A-Za-z0-9 ._-]{2,255}$/)){$validationMsg += "Please enter a valid Name. ";}
				if($validationMsg != ""){
					$('#Name').focus();
					displayMessage($validationMsg);
				}else{
						var $Email = $('#Email').val();
						if($Email == ""){$validationMsg += "Enter your Email please!! ";}
						else if(!$Email.match(/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[a-zA-Z]{2,4}$/)){$validationMsg += "Please enter a valid email. ";}
						if($validationMsg != ""){
							$('#Email').focus();
							displayMessage($validationMsg);
						}
						else{
							var $Phone = $('#Phone').val();
							if($Phone == ""){$validationMsg += "Enter your phone Number ";}
							//else if(!$tele.match(/^[0-9]{10}$/)){$validationMsg += "Please enter 10 digit Phone Number. <br /> Ex : xxxxxxxxxx ";}
							if($validationMsg != ""){
								$('#Phone').focus();
								displayMessage($validationMsg);
							}else{
								var $Message = $('#Message').val();
								if($Message == ""){$validationMsg += "Please enter your Message ";}								
								if($validationMsg != ""){
									$('#Message').focus();
									displayMessage($validationMsg);
								}else{
									if($validationMsg != ""){alert($validationMsg);}
										else{
											$('#form').submit();
									}
								}
							}	
						}
					}		
			
		});
				
		function displayMessage($msg){
			$('#message').html('<span>'+$msg+'</span>');
			$('#message').show().css("opacity",0);
			$('#message').animate({"opacity":1},1000,function(){
				$('#message').animate({"opacity":1},1000,function(){
					$('#message').animate({"opacity":0},700,function(){
						$('#message').hide();
					});
				});
			});
		}

		$(function(){
			var $left = ($(window).width()/2) - 150;
			var $top = ($(window).height()/2) - 50;
			$('#message').css({"top" : $top, "left" : $left});
		});
		
	});
</script>	
<?php 
	if(isset($_POST['Name'])&&isset($_POST['Email'])&&isset($_POST['Phone'])&&isset($_POST['Message']))
	{
		$to = "Care.sunitha@gmail.com";
		$subject = "Request from Contact Page - ".$_SERVER['HTTP_HOST'];
		$message = "<p>You have a Request form your contact page on ".$_SERVER['HTTP_HOST'].'</p>';
		$message .= "<p>Name : ".$_POST['Name'].'</p>';
		$message .= "<p>Email : ".$_POST['Email'].'</p>';
		$message .= "<p>Phone : ".$_POST['Phone'].'</p>';
		$message .= "<p>Message : ".$_POST['Message'].'</p><br/><br/>';
		$message .= "<p><b>Note : This email is not intended to be a solicitation.  You received this email because you are admin for the website  ".$_SERVER['HTTP_HOST']."</p>" ;
		$from = $_POST['Email'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: '.$_POST['Name'].' <'.$from.'>' . "\r\n" .'X-Mailer: PHP/' . phpversion();
		$send_mail = mail($to,$subject,$message,$headers);
		if($send_mail != true)
		{
			$flag = 0;
		}else{
			$flag = 1;
		}
		if($flag == 0)
		{
			echo "<script type='text/javascript'> alert('There is an error. Please try after some time.'); window.location='contacts.php';</script>";;
			//echo '<script type="text/javascript"> alert("'.__('Sorry, application was failed, please try again!','jobpress').'"); window.location=""</script>';
		}
		if($flag == 1)
		{
				echo "<script type='text/javascript'> alert('We'll get in touch with you soon. Thank you.'); window.location='contacts.php';</script>";
			
		}
		// header( 'Location:contacts.php?p=1' ) ;	
	}
?>
<?php include('footer.php'); ?>