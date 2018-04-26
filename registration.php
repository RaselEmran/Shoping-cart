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

    <title> Registration From| </title>

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
                    <h2>User Registration Form</h2><br>

                    <div>
                        <input type="text" class="form-control" placeholder="FirstName" name="firstname" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="LastName" name="lastname" required=""/>
                    </div>

                    <div>
                        <input type="text" class="form-control" placeholder="Username" name="username" required=""/>
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" name="password" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="email" name="email" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="contact" name="contact" required=""/>
                    </div>
                    
                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit1" value="Register">
                    </div>

                </form>
            </section>
<?php
if(isset($_POST["submit1"]))
{
	$count=0;
	$res=mysqli_query($link,"select*from student_registration where email='$_POST[email]'");
$count=mysqli_num_rows($res);
if(!$count=mysqli_num_rows($res))
{
	mysqli_query($link,"insert into student_registration values('','$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]')");
}
	if($count==0)
		{
	?>
	<div class="alert alert-success col-lg-6 col-lg-push-3">
        Registration successfully, You will get email when your account is approved<br>
		<a href="login.php"><b>login here<b></a>
    </div>
	<?php
}
else
{
echo '<div class="alert alert-danger col-lg-12 col-lg-push-0">
    <strong style="color:white">Alert</strong> Your Email Address is Already Use<br>Please Try Again Letter.
</div>';
}
	}
?>


    </div>

    


</body>
</html>
