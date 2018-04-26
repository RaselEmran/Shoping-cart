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
	
</head>
<body class="login" >
	<ul class="pager">
    <li class="previous"><a href="index.php">Back</a></li>
    
  </ul>

<div class="login_wrapper">

    <section class="login_content">
        <form name="form1" action="" method="POST">
            <h1>Buy available product here</h1>

      <div>
	<label for="sel1">Enter your name</label>
                <input type="text" name="name" class="form-control" placeholder="name" required=""/>
            </div>
			<div>
	<label for="sel1">Enter email address</label>
                <input type="text" name="email" class="form-control" placeholder="email" required=""/>
            </div>
			<div>
	<label for="sel1">Enter contact number</label>
                <input type="text" name="contact" class="form-control" placeholder="contact" required=""/>
            </div>
			<div>
	<label for="sel1">Enter location</label>
                <input type="text" name="location" class="form-control" placeholder="location" required=""/>
            </div>
                 <div class="form-group">
      <label for="sel1">Select product name</label>
      <select class="form-control " id="sel1"name="name">
        <option>mobile</option>
        <option>laptop</option>
        <option>showes</option>
        <option>watch</option>
      </select>
      <br>
      
    </div>
	        <div class="form-group">
      <label for="sel1">Select Brand</label>
      <select class="form-control " id="sel1"name="brand">
        <option>hp</option>
        <option>asus</option>
        <option>walton</option>
        <option>totsiba</option>
		<option>samsung</option>
		<option>symphony</option>
		<option>lotto</option>
		<option>bata</option>
		<option>appex</option>
		<option>titan</option>
		<option>casio</option>
		<option>rolex</option>
      </select>
      <br>
      
    </div>
	<div>
	<label for="sel1">Enter current price</label>
                <input type="text" name="price" class="form-control" placeholder="price" required=""/>
            </div>
			
			<div>
	<label for="sel1">Account no</label>
	<img src="images/paypal.png">
                <input type="text" name="account" class="form-control" placeholder="account" required=""/>
            </div>
            <div>

                <input class="btn btn-lg btn-info submit" type="submit" name="submit1" value="submit">
                
            </div>

            
                <br/>


           
        </form>
    </section>

		<?php
	if(isset($_POST["submit1"]))
{
	
	$count=0;
	$res=mysqli_query($link,"select*from product where name='$_POST[name]'&& brand='$_POST[brand]'&& price='$_POST[price]'");
$count=mysqli_num_rows($res);
if($count=mysqli_num_rows($res))
	{
		mysqli_query($link,"insert into Buy_product values('','$_POST[name]','$_POST[email]','$_POST[contact]','$_POST[location]','$_POST[account]')");
	}
if($count==0)
{
	?>
	<div class="alert alert-success col-lg-12 col-lg-push-0">
       You are type invalid information.Please send valid information.
    </div>
	<?php
}
else
{
echo '<div class="alert alert-danger col-lg-12 col-lg-push-0">
    <strong style="color:white">Success</strong> Your information is accept<br>Please check your email address.
</div>';
}
	}

?>
</div>
</body>
</html>