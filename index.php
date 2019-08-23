<html>
	<body>
	<form action="action_page.php">
	  <div class="container">
	    <h1>Register</h1>
	    <p>Please fill in this form to create an account.</p>
	    <hr>
	
	    <label for= firstname><b>First name</b></label><br>
	    <input type="text" placeholder="Enter firstname" name "firstname" required><br>
	    
	    <label for= last><b>last name<br>
	    <input type="text" placeholder="Enter lastname" name "lastname" required><br>
	    
	    <label for="email"><b>Email</b></label><br>
	    <input type="text" placeholder="Enter Email" name="email" required><br>
	
	    <label for="psw"><b>Password</b></label><br>
	    <input type="password" placeholder="Enter Password" name="psw" required><br>
	
	  
	    <hr>
	
	    
	<input type="button" value="Register" onclick="window.location.href='home.php'" />
	   
	 
	
	  <div class="container signin">
	    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
	  </div>
    
    </body>
 </html>

