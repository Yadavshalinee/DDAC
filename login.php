<!DOCTYPE html>
<html lang="en">
<head>
  <title>Maersk-Group</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/bootstrap/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="CSS/js/bootstrap.min.js"></script>
 
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
      <a class="navbar-brand" href="index.php"><img src="image/logo.svg" alt="MaerskLine logo" height="50px" width="150px" class="img-fluid"></a>
    </div>
	
    <div class="navbar-collapse collapse">
    <ul id="navbaractiveid" class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
  </div>
  </nav>
<div class="container">
  <h2>Login Form</h2>
  <form class="form-horizontal" action="login.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="usr">Username:</label>
      <div class="col-sm-10">
	        <input type="text" class="form-control" name="U_name" placeholder="Enter Username" id="usernames">		
    </div>
	</div>
    <div class="form-group">
	      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
	     </div>
		 <div class="form-group">
	       <label class="control-label col-sm-2" for="select">User-Type:</label>
      <div class="col-sm-10">          
        <select class="form-control" id="select"  name="select1">
		<option>Admin</option>
        <option>Agent</option>
          </select>
      </div>
	     </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
		   
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" class="btn btn-success">Login</button>
      </div>
    </div>
	<p>
	       Don't have Account ?<a href="signup.php"> Sign Up</a> </p>
  </form>
</div>
<footer class="container">
 <center> <p>© MaerskLine-2019</p></center>
</footer>
</body>
</html>

