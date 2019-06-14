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
      <a class="navbar-brand" href="#"><img src="image/logo.svg" alt="MaerskLine logo" height="50px" width="150px" class="img-fluid"></a>
    </div>
	
    <div class="navbar-collapse collapse">
    <ul id="navbaractiveid" class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
  </div>
  </nav>
  
<div class="jumbotron-fluid text-center">
    <img src="image/bg.jpg" class="img-fluid" height="600px" width="1400px">
  </div>
  </div>
	<div class="container">
  <div class="row">
    <div class="col-sm-4 panel panel-default">
      <div class="panel-heading">Total of Shipments - Overall</div>
            <div class="panel-body">
                <p runat="server" ClientIDMode="static" id="totalofshipmentoverallid">Shipments</p>
            </div>
        </div>
    <div class="col-sm-4 panel panel-default">
       <div class="panel-heading">Total of Shipments - This Month</div>
            <div class="panel-body">
                <p runat="server" ClientIDMode="static" id="totalofshipmentmonthid">Shipments</p>
            </div>
			</div>
    <div class="col-sm-4 panel panel-default">
       <div class="panel-heading">Total of Shipments - Today</div>
            <div class="panel-body">
                <p runat="server" ClientIDMode="static" id="totalofshipmenttodayid">Shipments</p>
            </div>
        </div>
</div>
</div>
	<footer class="container">
 <center> <p>© MaerskLine-2019</p></center>
</footer>

</body>
</html>
