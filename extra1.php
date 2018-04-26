
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Registration Form | LMS </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
	 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
  th, td {
    padding: 5px;
    text-align: left;
}
 </style>
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library Management System</h1>
</div>


<body class="login" style="margin-top: -20px;">



    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="" method="POST">
                    <h2>User Registration Form</h2><br>

                   
                    
                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit1" value="Register">
                    </div>

                </form>
            </section>
			
			<table>
 <tr>
  <th></th> </tr>
  <tr><th></th> </tr>
  <tr><th></th>
 </tr>
 
<?php
if(isset($_POST["submit1"]))
{
	$conn = mysqli_connect("localhost", "root", "", "lms");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }
	 $sql = "SELECT id, username, password FROM student_registration where username='abdullah'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
	   echo "hello:";
    echo "<tr><td>" . $row["id"]. "</td><td>";
	 echo "<tr><td>". $row["username"] . "</td><td>";
	 
 echo "<tr><td>". $row["password"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
}
?>

<h1>hello</h1>
<h1>hello</h1>
<h1>hello</h1>
    </div>

    


</body>
</html>
