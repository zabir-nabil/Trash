<?php
session_start();

if(empty($_SESSION))
{
	$url = 'login.php?status=3';

    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
	
}



?>


<!DOCTYPE html>
<head>

<title>KUET Departmental Store</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--  Free CSS Templates from www.templatemo.com -->
<div id="templatemo_container">
	<div id="templatemo_menu">
    	<ul>
            <li><a href="index.php" class="current">Home</a></li>
            
            <li><a href="subpage.php">Books</a></li>            
            <li><a href="subpage.php">New!</a></li>  
            <li><a href="about.php">About KUET Departmental Store</a></li> 
            <li><a href="contact.php">Contact</a></li>
			<li><a href="logout.php">Logout</a></li>
    	</ul>
    </div> <!-- end of menu -->
    
    <div id="templatemo_header">
    	<div id="templatemo_special_offers">
        	<p>
                <span>KUET</span> Departmental Store
        	</p>
			<a href="subpage.php" style="margin-left: 50px;">Read more...</a>
        </div>
        
        
        <div id="templatemo_new_books" style="margin:10px;">
        	

        </div>
    </div> <!-- end of header -->
    
    <div id="templatemo_content">
    	
        <div id="templatemo_content_left">
        	<div class="templatemo_content_left_section">
            	<h1>Categories</h1>
                <ul>
                    <li><a href="subpage.php">Electronics</a></li>
                    <li><a href="subpage.php">Communication</a></li>
                    <li><a href="subpage.php">Mathematics</a></li>
                    <li><a href="subpage.php">Physics</a></li>
                    <li><a href="subpage.php">C programming</a></li>
                    <li><a href="subpage.php">PHP,MySQL</a></li>

            	</ul>
            </div>
			<div class="templatemo_content_left_section">
            	<h1>Popular Books</h1>
                <ul>
                    <li><a href="subpage.php">Microwave by Pozar</a></li>
                    <li><a href="subpage.php">Microprocessor by Goankar</a></li>
                    <li><a href="subpage.php">Numerical Method by Balgurusamy</a></li>
                    <li><a href="subpage.php">Assembly Language</a></li>

            	</ul>
            </div>

        </div> <!-- end of content left -->
        
        <div id="templatemo_content_right">
        	<div class="templatemo_product_box">
            	<h1>Microwave <span>(by Pozar)</span></h1>
   	      <img src="images/pozar.jpg" alt="image" />
                <div class="product_info">
                	<p>Microwave Engineering</p>
                  <h3>Tk 255</h3>
                    <div class="buy_now_button"><a href="subpage.php">Buy Now</a></div>
                    <div class="detail_button"><a href="subpage.php">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
            	<h1>Microprocessor<span>(by Goankar)</span></h1>
       	    <img src="images/goankar.jpg" alt="image" />
                <div class="product_info">
                	<p>Microprocessor and Microcomputers.</p>
                    <h3>Tk 235</h3>
                    <div class="buy_now_button"><a href="subpage.php">Buy Now</a></div>
                    <div class="detail_button"><a href="subpage.php">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>
            
            <div class="templatemo_product_box">
            	<h1>Numerical Method<span>(by Balgurusamy)</span></h1>
   	      <img src="images/bal.jpg" alt="image" />
                <div class="product_info">
                	<p>Numerical methods and solution.</p>
                    <h3>Tk 230</h3>
                    <div class="buy_now_button"><a href="subpage.php">Buy Now</a></div>
                    <div class="detail_button"><a href="subpage.php">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
            	<h1>C Programming <span>(by Felix Halim)</span></h1>
            	<img src="images/pozar.jpg" alt="image" />
                <div class="product_info">
                	<p>Felix Halim Competitive Programming.</p>
                    <h3>Tk 566</h3>
                    <div class="buy_now_button"><a href="subpage.php">Buy Now</a></div>
                    <div class="detail_button"><a href="subpage.php">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>
            
        </div> <!-- end of content right -->
    
    	<div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    
    <div id="templatemo_footer">
    
	       <a href="index.php">Home</a> |  <a href="subpage.php">Books</a> | <a href="subpage.php">New!</a> | <a href="about.php">FAQs</a> | <a href="contact.php">Contact Us</a><br />
        Copyright © 2017 <a href="#"><strong>KUET Departmental Store</strong></a> | <a href="http://www.iwebsitetemplate.com" target="_parent">Website developed</a> by Palash Dev

</div> <!-- end of container -->
</body>
</html>