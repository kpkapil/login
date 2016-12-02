<!DOCTYPE html>
<html>
<head>
<script src="style.js"></script>
<title>Our Secure Website</title>
<link rel="stylesheet" type="text/css" href="file.css.">
 </head>
<body>
 <form action="process.php" method="POST">
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
                Login
            </a>
            <a href="team.html">
                Team
            </a>
        </div>
        <div class="leftmargin">
        
        </div>
        <div class="login">
<label><b>Login to your Company Account</b></label>
</div>
<div class="imgcontainer">
    <img src="img-avatar.png" alt="Avatar" class="avatar">
  </div>
 
  <form class="container"> 
    <label align=center><b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Username&emsp;</b></label>
    <input type="text" placeholder="Enter Username" id="username" name="username" required><br>
    
    <label align=center><b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Password&emsp;</b></label>
    <input type="password" placeholder="Enter Password" id="password" name="password" required><br> 
         
<p> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
 <button type="submit">Login</button> 
    <button type="reset" class="reset">Reset</button>
	</p>
  </form>
  
  <div class="container" style="background-color:#f1f1f1">
  </div>
   </form>
</body>
</html>