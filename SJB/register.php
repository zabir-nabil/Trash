<!DOCTYPE html>
  <html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admit Card System</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
 <div id="top">
 <span id="logo"><b>Admit Card System</b></span>
 </div>
  <div id="hnav">
      <ul id="pul">
  <li class="pli"><a href="home.html">Home</a></li>
  <li class="pli"><a href="notice.html">Notice</a></li>
  <li class="pli"><a href="#">Register</a></li>
  <li class="pli"><a href="contact.html">Contact</a></li>
  <li class="pli"><a href="data_check">Data Check</a></li>
</ul>
</div> 
      <form action="#" method="post">
      
        <h1>Give your information</h1>
        
        <fieldset>
          <legend><span class="number"></span>Primary Information</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name">
          
    <label for="name">College:</label>
          <input type="text" id="name" name="user_name">
          
		      <label for="name">Board:</label>
          <input type="text" id="name" name="user_name">
          
             
          </fieldset>
        
        <fieldset>
          <legend><span class="number"></span>Admission</legend>
		            <label for="univ">Registration number:</label>
          <input type="text" id="univ" name="univ">
          <label for="univ">Roll no:</label>
          <input type="text" id="univ" name="univ">
		  <label for="univ">H.S.C. GPA:</label>
          <input type="text" id="univ" name="univ">
            <label for="univ">S.S.C. GPA:</label>
          <input type="text" id="univ" name="univ">
        </fieldset>
        <fieldset>
        
        
        </fieldset>
        <button id="regb" type="submit" onclick="location.href='profile.html'">Generate Admit Card</button>
      </form>
      
    </body>
	
	<footer>
	&copy; Developed by Monirul Islam.
	</footer>
	
</html>