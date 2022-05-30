<html>

<script type="text/javascript">
function PreviewImage()
{
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("imglink").files[0]);
    oFReader.onload = function (oFREvent)
    {
        document.getElementById("uploadPreview").src = oFREvent.target.result;
    };
};
</script>

<head>
<title>Registration</title>
</head>
<link rel="stylesheet" href="css/registration.css">
<body style="background-image:url('resources/images/menubg.gif');
    background-size:cover">
<div id="reg_page">
<br><br><br>

<x class="title">REGISTRATION</x><br><br>
<div id="white_box">
    <div class="details">
<form method="post" name="edit_form" enctype="multipart/form-data">

<img id='uploadPreview' src='resources/images/blank_profile_2.png' class='image'>
<br>
<div class="imgupload"><label for="imglink" class="img_label">SELECT IMAGE</label>
<input class="img_input" type="file" id="imglink" name="imglink" accept=".jpg,.jpeg,.png" onchange="PreviewImage();"></div>

<br><label class="label_pers">PERSONAL INFO </label><br>
<label class="label">First Name </label>
<x class='fname'>: <input type="text" name="fname" class="box" required></x><br>
<label class="label">Last Name</label>
<x class='sname'>: <input type="text" class="box" name="sname"></x><br>

<label class="label">Gender</label>
<x class='gender'>: <select name="gender" class="gender_select" required>
<option value="" disabled selected hidden style="color:grey" >select</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select></x>

<label class="age">Age &nbsp;&nbsp;: &nbsp;</label>
<input type="number" name="age" class="agebox" maxlength="2" required><br>

<label class="label">Address</label>
<x class='address'>: <input type="text" name="address" class="box" required></x><br>
<label class="label">City</label>
<x class='city'>: <input type="text" name="city" class="box" required></x><br>
<label class="label">State</label>
<x class='state'>: <input type="text" name="state" class="box" required></x><br>

<label class="label">Phone Number</label>
<x class='phone'>: <input type="number" name="phone" class="box" maxlength="10" required></x><br>
<label class="label">Email Address</label>
<x class='email'>: <input type="email" name="email" class="box" required></x><br><br>

<label class="label_sec">SECURITY DETAILS</label><br>
<label class="label">Username</label>
<x class='uname'>: <input type="text" name="uname" class="box2" required></x><br>
<label class="label">Password</label>
<x class='passw'>: <input type="password" name="pass" class="box2" required></x><br>
<label class="label">Confirm Password</label>
<x class='c_passw'>: <input type="password" name="c_pass" class="box2" required></x><br>

</div>
</div>
    <input type="submit" name="submit" value="SUBMIT" class="submit">
    <input type="reset" value="CLEAR"  class="reset" name="reset">
    <a href="login.php"><input type="button" class="cancel" name="cancel" value="CANCEL"></a>
</form>

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
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $c_pass=$_POST['c_pass'];

    $img_name=$_FILES['imglink']['name'];
    $img_size=$_FILES['imglink']['size'];
    $img_tmp=$_FILES['imglink']['tmp_name'];

    
    $directory= "uploads/";
    $target_file= $directory.$img_name;

    $query2=mysqli_query($con,"SELECT * FROM userdata WHERE username ='$uname'"); 
    if (mysqli_num_rows($query2)==0)
    {
        if ($pass == $c_pass)
        {
            mysqli_query($con,"INSERT INTO userdata(f_name,s_name,gender,age,addr,city,stat,phone,email,username,pass,imglink,img_collect) 
            VALUES('$fname','$sname','$gender','$age','$address','$city','$state','$phone','$email','$uname','$pass','','')");
            if (empty($img_name))
            {}
            else
            {
                mysqli_query($con, "UPDATE userdata SET imglink='$target_file' WHERE username ='$uname'");
                move_uploaded_file($img_tmp,$target_file);
            }
            echo "<div class='success'>User entered successfully!</div>";
        }
        else
        {
            echo "<div class='no_match'>Password and Confirm password does not match!</div>";
        }
    }
    else
    {
        echo "<div class='user_exist'>Username already exists!</div>";
    }
}
?>
</div>

</body>
</html>
