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
  <h2>Schedule</h2>
  <form class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Departure time:</label>
      <div class="col-sm-10">
	        <input type="text" class="form-control" name="dp-time" id="dpt">			
    </div>
   	     </div>
		 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Arival time:</label>
      <div class="col-sm-10">
	        <input type="text" class="form-control" name="arivtime" id="atime">			
    </div>
   	     </div>
		 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Departure Location:</label>
      <div class="col-sm-10">
	        <input type="text" class="form-control" name="dp-loc" id="dpl">			
    </div>
   	     </div><div class="form-group">
      <label class="control-label col-sm-2" for="email">Arival Location:</label>
      <div class="col-sm-10">
	        <input type="text" class="form-control" name="arivl" id="al">			
    </div>
   	     </div>
		 <div class="form-group">
	       <label class="control-label col-sm-2" for="select">Vessel:</label>
      <div class="col-sm-10">          
        <select class="form-control" id="select" name="select1">
		<option>100 pcs</option>
        <option>300 pcs</option>
		<option>500 pcs</option>
        <option>1000 pcs</option>
		<option>1500 pcs</option>
      
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
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    </div>
	<p><a href="updateshiping.php"> Show list</a></p>   
  </form>
</div>
  
  <footer class="container">
 <center> <p>© MaerskLine-2019</p></center>
</footer>
</body>
</html>