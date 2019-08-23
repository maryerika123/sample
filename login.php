<html>
<body>
<form action="action_page.php">
  <div class="container">
    <h1>Log In</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    
    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" 
required><br>
    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" 
required><br>
    <label for="psw-repeat"><b>Repeat Password</b></label><br>
    <input type="password" placeholder="Repeat Password" name="psw-
repeat" required><br>
    <hr>
    
  <input type="button" value="Continue" 
onclick="window.location.href='home.php'" />
  </div>
  
</form>
</body>
</html>
