<html>
<head>
<title>Registration form</title>
</head>

<link rel="stylesheet" href="css/register.css">
<body style="background-image:url('resources/images/menubg1024x768.gif');
    background-size:cover">

<div id="main">
<br><br><h1 class="heading">REGISTRATION FORM</h1><br>
<form method="post">
<label class="label">First Name : </label>
<label class="last">Last Name : </label><br>
<input type="text" name="fname" class="fnamebox" placeholder="Enter your first name" required>
<input type="text" class="snamebox" name="sname" placeholder="Enter your last name"><br><br>

<label class="label">Gender : </label>
<select name="gender" class="gender" required>
<option value="" disabled selected hidden style="color:grey">select</option>
<option value="M">Male</option>
<option value="F">Female</option>
</select>
<label class="age">Age : </label>
<input type="number" name="age" class="agebox" maxlength="2" placeholder="your age"><br><br>

<label class="label">Address :</label>
<input type="text" name="address" class="addressbox" placeholder="enter your address"><br><br>
<label class="label">City : </label>
<input type="text" name="city" class="citybox" placeholder="your city">
<label class="state">State : </label>
<input type="text" name="state" class="statebox" placeholder="your state"><br><br>

<label class="label">Phone Number : </label>
<input type="number" name="phone" class="phonebox" maxlength="10" placeholder="10-digit mobile number"><br><br>
<label class="label">Email Address : </label>
<input type="email" name="email" class="emailbox" placeholder="your email address"><br><br>

<label class="label">Enter a Username : </label>
<input type="text" name="user" class="usernamebox" placeholder="Enter a username" required><br><br>
<label class="label">Enter a Password : </label>
<input type="password" name="pass" class="passwordbox" placeholder="Enter a secure password" required><br><br>

<input type="submit" name="submit" value="SUBMIT" class="submit">
<a href="reg_view.php"><input type="button" name="view" value="VIEW" class="view"></a>
<input type="reset" value="RESET"  class="reset" name="reset">
<a href="login.php"><input type="button" name="back" value="BACK" id="back" style="margin: -5 199;
    height: 28px;
    background-color: rgb(79, 175, 220);
    color: rgb(2, 24, 122);
    width: 100px;
    box-shadow: 0 0 6px rgb(4, 15, 114),0 0 8px rgb(4, 15, 114);
    font-size: 16px;
    font-family: 'gisha';
    font-weight: bold;
    border: none;"></a></div>
</form>
</div>

<?php
$con=mysqli_connect('localhost','root','','registration') or die("Unable to connect");
$query=mysqli_query($con,"SELECT *FROM userdata");
$fname;$sname;$gender;$age;$address;$city;$state;$phone;$email;$user;$pass;

if (isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $sname=$_POST['sname'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    mysqli_query($con,"INSERT INTO userdata(f_name,s_name,gender,age,addr,city,stat,phone,email,username,pass) 
        VALUES('$fname','$sname','$gender','$age','$address','$city','$state','$phone','$email','$user','$pass')");
    header("Location:login.php");
    echo "<script type='text/javascript'>alert('Data entered!')</script>";
}
?>

</body>
</html>

