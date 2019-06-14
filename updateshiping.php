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
	<ul class="nav navbar-nav navbar-left">
      <li><a href="Createvessel.php"> Home</a></li>
      <li><a href="Createvessel.php"></span> Create Vessel</a></li>
	  <li><a href="Shipschedule.php"></span> Shipping Schedule</a></li>
	  <li><a href="viebooking.php"></span> View Booking</a></li>
	  <li><a href="viewcustomer.php"></span> View Customer</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php">LOGOUT</a></li>
	  </ul>
	  </div>
  </div>
  </nav>
  <div class="container">
  <h2>Update Shchedule</h2>
  <p><a href="Shipschedule.php"> Create New</a></p>   
<form class="form-inline" action="/action_page.php">
    <label for="usr" class="mb-2 mr-sm-2">Departure Location:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="dtl"  name="email">
    <label for="usr" class="mb-2 mr-sm-2">Arival Location:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="al"  name="pswd">
    <div class="form-check mb-2 mr-sm-2">  
 <button type="button" class="btn btn-light">Search</button>
  </form>  
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Departure time</th>
        <th>Arival time</th>
        <th>Departure Location</th>
		<th>Arival Location</th>
        <th>Vessel</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>
  
  
  <footer class="container">
 <center> <p>© MaerskLine-2019</p></center>
</footer>
</body>
</html>