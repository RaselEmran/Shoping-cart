
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Registration Form | LMS </title>
<link href="assets/css2/font-awesome.min.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
	<link href="assets/css2/style.css" rel="stylesheet" />
	
</head>

<br>




<body class="login" style="margin-top: -20px;">
 <nav class="navbar navbar-default " role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><strong>DIGI</strong> Shop</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Track Order</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="registration.php">Signup</a></li>

                   
                </ul>
              
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<div class="raw">
<div class="col-md-4"id="panel">
<div class="tabbable" id="tabs-426276">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#panel-958550" data-toggle="tab">Electronics</a>
					</li>
					<li>
						<a href="#panel-768026" data-toggle="tab">Clothing & Wears</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-958550">
							<div class="jumbotron">
		
		
		
			<ul class="nav nav-pills nav-stacked">
				<li >
					<a href="1st.html" target="blank"class="well wow slideInDown">Mobiles</a>
				</li>
				<li>
					<a href="2nd.html" class="well wow slideInDown">Laptops</a>
				</li>
				<li>
					<a href="3rd.html" class="well wow slideInDown">Tablets</a>
				</li>
				<li>
					<a href="4th.html" class="well wow slideInDown">Apliances</a>
				</li>
				
				
			</ul>
		</div> 
					</div>
					<div class="tab-pane" id="panel-768026">
							<div class="jumbotron">
		
		
			<ul class="nav nav-pills nav-stacked">
				<li >
					<a href="1st.html" target="blank"class="well wow slideInDown">Men Clothing</a>
				</li>
				<li>
					<a href="2nd.html" class="well wow slideInDown">Women Clothing</a>
				</li>
				<li>
					<a href="3rd.html" class="well wow slideInDown">Kids Wears</a>
				</li>
				
				
				
			</ul>
		</div> 
		
	         </div>
			 
				</div>
				
			          </div>

					  
					         </div>

<div class="col-md-8"id="hp">

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">product deteils</h1>
</div>

    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="" method="POST">
                    <img src="images/totsiba.jpg" width="350" >

                   
                    
                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-info " type="submit" name="submit1" value="Details">
                    </div>

                </form>
            </section>
		
 <div class="col-md-12">
 <div class="col-md-6 category">
  <li>Name</li> 
 <li>Brand</li> 
  <li>Ram</li>
  <li>Rom</li>
  <li>Processor</li>
  <li>Hard disk</li>
  <li>Warranty</li>
  <li>Price</li>
</div>
<?php
if(isset($_POST["submit1"]))
{
	$conn = mysqli_connect("localhost", "root", "", "lms");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }
	 $sql = "SELECT name, brand, ram, rom, processor, harddisk, warranty, price FROM product where brand='Totsiba' ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<div class='col-md-6'><li>" . $row["name"]. "</li><li>" . $row["brand"] . " </li><li>" . $row["ram"] . " </li><li>" . $row["rom"] . " </li><li>" . $row["processor"] . " </li><li>". $row["harddisk"] . " </li><li>" . $row["warranty"] . " </li><li>"
. $row["price"]. " </li></div>";
}
echo "</div>";
} else { echo "0 results"; }
$conn->close();
}
?>


    </div>
</div>

   </div> 
</div>

<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
