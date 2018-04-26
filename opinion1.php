<?php
include "connection.php";
?>
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
	<!-- Fontawesome core CSS -->
    <link href="assets/css2/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="assets/ItemSlider/css/main-style.css" rel="stylesheet" />
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
                   <li><a href="index.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="registration.php">Signup</a></li>

                   
                </ul>
              
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<br><br>
	  <div class="raw">
	  <div class="col-md-5" >
	   <div class="login_wrapper"id="em1">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="" method="POST">
                    <h2>Press your opinion</h2>
					<hr><br>

                    <div>
                        <input type="text" class="form-control" placeholder="Name" name="name" required=""/>
                    </div>
					<div>
                        <input type="text" class="form-control" placeholder="email" name="email" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="City" name="city" required=""/>
                    </div>

                    <div>
                        <input type="text" class="form-control" placeholder="Country" name="country" required=""/>
                    </div>
					
                    <div>
                        <input type="text" class="form-control" placeholder="Product Name" name="productname" required=""/>
                    </div>
                    
                    <div>
                        <input type="text" class="form-control" placeholder="Brand" name="brand" required=""/>
                    </div>
					<div>
                     <textarea name="comment"  class="form-control" required="" placeholder="comment"></textarea>
                    </div>
                    
                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit1" value="Submit">
                    </div>

                </form>
            </section>
<?php
if(isset($_POST["submit1"]))
{
	
	mysqli_query($link,"insert into customar_record values('','$_POST[name]','$_POST[email]','$_POST[city]','$_POST[country]','$_POST[productname]','$_POST[brand]','$_POST[comment]')");

	?>
	<div class="alert alert-success col-lg-6 col-lg-push-3">
        Thank you for your comment and preview
    </div>
	<?php
	}
?>


    </div>
	
	     </div>
	  
<div class="col-md-7">
	  <div class="main box-border">
                    <div id="mi-slider" class="mi-slider">
                        <ul>

                            <li><a href="#">
                                <img src="images/sumsung.jpg" alt="img01"><h4>samsung</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="images/symphony.jpg" alt="img02"><h4>symphony</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="images/walton.jpg" alt="img03"><h4>walton</h4>
                            </a></li>
                           
                        </ul>
                       
                       
                      
                        
                    </div>
                    
                </div>
	  </div>
	  
	   </div>
	  <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>