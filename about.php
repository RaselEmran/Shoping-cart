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

    <title>About us </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>
<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">E-commerce management</h1>
</div>


<body class="login" style="margin-top: -20px;">

<ul class="pager">
    <li class="previous"><a href="index.php">Back</a></li>
    
  </ul>

    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="" method="POST">
                    <strong>Send a Quick Query </strong><hr><br>

                    <div>
                        <input type="text" class="form-control" placeholder="Name" name="name" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Email" name="email" required=""/>
                    </div>

                   <div>
                     <textarea name="messege"  class="form-control" required="" placeholder="Messege"></textarea>
                    </div>
                    
                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-primary submit " type="submit" name="submit1" value="Submit Request">
                    </div>

                </form>
            </section>
<?php
if(isset($_POST["submit1"]))
{
	
	mysqli_query($link,"insert into about values('','$_POST[name]','$_POST[email]','$_POST[messege]')");

	?>
	<div class="alert alert-success col-lg-6 col-lg-push-3">
       Submitted Successfully
    </div>
	<?php
	}
?>

    </div>

    


</body>