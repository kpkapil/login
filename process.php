<!DOCTYPE html>
<html>
<head>
<title>Our Secure Website</title>
<link rel="stylesheet" type="text/css" href="file.css.">
 </head>
<body>
    <div class="topstrip">
        
    </div>
	<div class = "main">
        <div class ="header">
            <a href = "https://www.insa-lyon.fr/en/">    <img src = "INSA_Lyon3.jpg" >
            </a>
            <span class="head">Welcome to Secure Website</span>    
        </div >
        <div class="links">
            <a href = "home.html">
                Home
            </a>
            <a href = "login.php">
                Logout
            </a>
            <a href="team.html">
                Team
            </a>
        </div>
<div class="leftmargin">
        
        </div>
<div class="right1">

<link rel="stylesheet" type="text/css" href="file.css.">
<?php
    	
    $username= $_POST['username'];
	$password= $_POST['password'];
	
	$username=stripcslashes($username);
	$password=stripcslashes($password);
	$username= @mysql_real_escape_string($username);
	$password= @mysql_real_escape_string($password);

	@mysql_connect('localhost', 'root', '');
	mysql_select_db( 'login');
	        
	
	$result= mysql_query( "select * from users where username = '$username' and password = '$password'")
	         or die("Failed to connect to database".mysql_error());
	 $row=mysql_fetch_array($result);
	 
	 if($row['username']==$username && $row['password']==$password) {
	   echo "<div id=\"errormsg\">Login Successful !!!! <br><br> Welcome<br><br> </div>".$row['username'];	 
	   
	 }
	 else{
	  echo "Failed to Login";
	 }
?>
</div>
        <div class="right2">
	 
        </div>
    </div>
    <div class="footer">
    </div>
</body>
</html>