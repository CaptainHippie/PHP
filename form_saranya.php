<html>

<head>
<title> profile</title>
</head>

<body>
<center>
<h1> Registration </h1>
<center>

<form method="post">

Enter Name:
<input type="text" name="name"> <br>

Enter Address:
<input type="text" name="addr"> <br>

Enter Phone Number:
<input type="number" name="phone"> <br>

Enter Email id:
<input type="email" name="email"> <br>

Enter Username:
<input type="text" name="user"> <br>

Enter Password:
<input type="password" name="pass">
<br>

<input type="submit" value="submit" name="submit">
<br>
</form>

<?php
$db=mysqli_connect('localhost','root','','registrationforms');
$query=mysqli_query($db,"SELECT * FROM forms");
$name="";
$addr="";
$phone="";
$email="";
$user="";
$pass="";

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$addr=$_POST['addr'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$user=$_POST['user'];
$pass=$_POST['pass'];

mysqli_query($db,"INSERT INTO forms(name,address,phone_number,email_id,username,password)
VALUES('$name','$addr','$phone','$email','$user','$pass')");

//header('location:form.php');
}

?>


<?php


?>
<table border=5>
<tr>
<th>Name</th>
<th>Address</th>
<th>phone number</th>
<th>Email id</th>
<th> Username</th>
<th> Password</th>
<th> edit</th>
</tr>


<?php

while($row=mysqli_fetch_array($query))
{

?>

<tr>
<td><?php echo $row['name']; ?> </td><br>
<td><?php echo $row['address']; ?> </td><br>
<td><?php echo $row['phone_number']; ?> </td><br>
<td><?php echo $row['email_id']; ?> </td><br>
<td><?php echo $row['username']; ?> </td><br>
<td><?php echo $row['password']; ?> </td><br>
</tr>


<?php
}
?>
</body>
</html>










