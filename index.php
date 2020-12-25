<?php
include("includes/configuration.php");
 include('header.php'); ?> 
  <!--==============================content================================-->
    <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com. April 23, 2012!</div>
        <div class="container_12">	
          <div class="grid_4 bot-1">
            <div class="art"></div>
            <div class=""><img src="images/ribbon.png" alt="ofr" /></div>
            <h2 class="top-1 p2">Events</h2>
			<?php $events = mysql_query("select * from evnts order by id DESC limit 2");			
			while($eventsDet = mysql_fetch_array($events)){
			?>
            <p class="text-1 p3"><?php echo $eventsDet['Title'] ;?></p>
            <p><?php echo $eventsDet['Description'] ;?></p>
			<br/>
          <!--  <p class="text-1 top-2 p3">April 01 - “Smile!”</p>
            <p>This website template has several pages: Home Page, About Us, Schedule, Gallery, Contact Us (note that contact us form – <br>doesn’t work).</p>-->
            <?php } ?>
			<a href="contacts.php" class="link-1 top-3">Enroll Now</a>
          </div>
          <div class="grid_8">
          	<div class="pad-1">
          		<h2 class="p2">Welcome</h2>
            	<p class="text-1">"Dedicated to Providing Quality Child Care"</p>
            </div> 
            <div class="block-1">
            	<div class="block-1-shadow">
                	<h2 class="clr-6 p6">A Few Words About Us</h2>
                    <p class="clr-6"><strong></strong></p>
					<p class="clr-6"><span class="clr-4">Our Philosophy:</span> We provide quality, affordable childcare you can trust! Each kid will get individual attention, safe nurturing, and educational environment he or she deserves. We encourage your child’s social, emotional, creative, physical, and cognitive growth.</p>
                    <div class="pad-3">
                    	<img src="images/page2-img1.jpg" alt="author_img" class="img-border img-indent">
                        <div class="extra-wrap clr-6">
                        	<p><strong>Little Words About me</strong></p>
                            <p>Hello, my name is Sunitha. I graduated from Osmania University, India with a Bachelor’s Degree in Biology. I took 2 years of Computer Programming classes through California Community Colleges. But I discovered that my passion is teaching kids. I’m very happy to be still working as a child care director/provider since 2004.</p>
                        </div>
                    </div>
					<p class="clr-6"><strong></strong></p>
					<p class="clr-6">I am currently studying Child Development/Early Childhood Education. I look forward to applying my skills here. It brings me great pleasure to be working with children. Especially watching them develop and to grow emotionally, socially, and academically. </p>
                    <h2 class="clr-6 p6">What We Offer</h2>
					
                    <div class="lists">
                    	<ul class="list-2">
                        	<li><a href="#">The Best in Child care, and Early Education </a></li>
                            <li><a href="#">STATE CERTIFIED Child care</a></li>
                            <li><a href="#">Age Appropriate Activities</a></li>
                            <li><a href="#">Positive Guidance for Children</a></li>
                        </ul>
                        <ul class="list-2 last">
                        	<li><a href="#">FUN LEARNING</a></li>
                            <li><a href="#">OPEN DOOR POLICY</a></li>
                            <li><a href="#">Certification in Early Childhood education</a></li>
                            <!--<li><a href="#">Feugiat nulla facilisis at vero eros</a></li>-->
                        </ul>
                    </div>
					<div class="pad-2">
						<p class="link-2">We look forward to meeting you and your children</p>
                    	<!--<a href="#" class="link-2">Read More</a>-->
                    </div>
                </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
    </section>
<?php include('footer.php'); ?>