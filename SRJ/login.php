<?php
session_start();

if(!empty($_SESSION))
{
	$url = 'index.php';

    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
	
}



?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KUET Departmental Store</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="templatemo_container">
	<div id="templatemo_menu">
    	<ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#" class="current">Search</a></li>
            <li><a href="index.php">Books</a></li>            
            <li><a href="index.php">New!</a></li>  
            <li><a href="about.php">KUET Departmental Store</a></li> 
            <li><a href="contact.php">Contact</a></li>
    	</ul>
    </div> <!-- end of menu -->
    
    <div id="templatemo_header">
    	<div id="templatemo_special_offers">
        	<p>
                <span>KUET</span>Departmental Store
        	</p>
			<a href="#" style="margin-left: 50px;">Read more...</a>
        </div>
        
        
    </div> <!-- end of header -->
    
    <div id="templatemo_content">
    	
        <div id="templatemo_content_left">
        	 	<div class="templatemo_content_left_section">
            	<h1>Categories</h1>
                <ul>
                    <li><a href="subpage.php">Electronics</a></li>
                    <li><a href="subpage.php">Communication</a></li>
                    <li><a href="#">Mathematics</a></li>
                    <li><a href="#">Physics</a></li>
                    <li><a href="#">C programming</a></li>
                    <li><a href="#">PHP,MySQL</a></li>

            	</ul>
            </div>
			<div class="templatemo_content_left_section">
            	<h1>Popular Books</h1>
                <ul>
                    <li><a href="#">Microwave by Pozar</a></li>
                    <li><a href="#">Microprocessor by Goankar</a></li>
                    <li><a href="#">Numerical Method by Balgurusamy</a></li>
                    <li><a href="#">Assembly Language</a></li>

            	</ul>
            </div>

        </div> <!-- end of content left -->
        
        <div id="templatemo_content_right">

		
		<form method="post" action="loginprocess.php">
		
		<br/>
		<br/>
		<br/>
		
		User name : <input type="text" name="user">
		<br/>
		<br/>
		Password : <input type="password" name="pass">
		<br/>
		<br/>
		<?php echo ""; ?><input type="submit" value="Login">
		
		
		
		</form>
		
		<br/>
		<br/>
		
		<?php
		
		if(!empty($_GET))
		{
			$status  = $_GET['status'];
			
			if($status==2)
			{
				echo "Wrong user name or password!";
				
			}
			else if($status==3)
			{
				echo "You are not logged in! Please log in to continue.";
				
			}
			else if($status==4)
			{
				echo "Successfully logged out!";
				
			}
			
			
			
		}
		
		
		
		?>
			
             <div class="cleaner_with_height">&nbsp;</div>
            
       
        </div> <!-- end of content right -->
    
    	<div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    
    <div id="templatemo_footer">
	       <a href="index.php">Home</a> | <a href="index.php">Search</a> | <a href="index.php">Books</a> | <a href="#">New Releases</a> | <a href="#">FAQs</a> | <a href="#">Contact Us</a><br />
        Copyright © 2048 <a href="#"><strong>KUET Departmental Store</strong></a> | <a href="http://www.iwebsitetemplate.com" target="_parent">Website Developed</a> by <Palash Dev
	</div> <!-- end of footer -->
</div> <!-- end of container -->
</html>