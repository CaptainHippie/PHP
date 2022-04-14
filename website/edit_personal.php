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
<title>Change Personal Details</title>
</head>
<link rel="stylesheet" href="css/edit_acc.css">
<body style="background-image:url('resources/images/menubg.gif');
    background-size:cover">
<div id="personal_page">
<br><br><br>

<?php
session_start();
$uname = $_SESSION["username"];
$con=mysqli_connect('localhost','root','','registration');
$query=mysqli_query($con,"SELECT * FROM userdata WHERE username ='$uname'");
$row=mysqli_fetch_array($query);
?>

<div id="personal">
<br>
<x class="title">EDIT PERSONAL DETAILS</x>

<div class="line1"></div>
    <div class="details">
<form method="post" name="edit_form" enctype="multipart/form-data">

<img id="uploadPreview" src=<?php if (empty($row['imglink']))
{ echo 'resources/images/blank_profile_2.png'; }
else {
    echo $row['imglink'];
}
 ?> class='image'><br>
<div class="imgupload"><label for="imglink" class="img_label">SELECT IMAGE</label>
<input class="img_input" type="file" id="imglink" name="imglink" accept=".jpg,.jpeg,.png" onchange="PreviewImage();"></div>

<label class="label">First Name </label>
<x class='fname'>: <input type="text" name="fname" class="box" value="<?php echo $row['f_name']; ?>" required></x><br>
<label class="label">Last Name</label>
<x class='sname'>: <input type="text" class="box" name="sname" value="<?php echo $row['s_name']; ?>"></x><br>

<label class="label">Gender</label>
<x class='gender'>: <select name="gender" class="gender_select" required>
<?php
    if ($row['gender'] == "Male")
    {
        echo "<option value='Male' selected>Male</option>";
        echo "<option value='Female'>Female</option>";
    }
    else
    {
        echo "<option value='Male'>Male</option>";
        echo "<option value='Female' selected>Female</option>";
    }
?>
</select></x>

<label class="age">Age &nbsp;&nbsp;: &nbsp;</label>
<input type="number" name="age" class="agebox" maxlength="2" value="<?php echo $row['age']; ?>" required><br>

<label class="label">Address</label>
<x class='address'>: <input type="text" name="address" class="box" value="<?php echo $row['addr']; ?>" required></x><br>
<label class="label">City</label>
<x class='city'>: <input type="text" name="city" class="box" value="<?php echo $row['city']; ?>" required></x><br>
<label class="label">State</label>
<x class='state'>: <input type="text" name="state" class="box" value="<?php echo $row['stat']; ?>" required></x><br>

<label class="label">Phone Number</label>
<x class='phone'>: <input type="number" name="phone" class="box" maxlength="10" value="<?php echo $row['phone']; ?>" required></x><br>
<label class="label">Email Address</label>
<x class='email'>: <input type="email" name="email" class="box" value="<?php echo $row['email']; ?>" required></x><br>

</div>
</div>
    <input type="submit" name="apply" value="APPLY CHANGES" class="apply">
</form>
<form method="post">
    <input type="submit" name="cancel" value="CANCEL" class="cancel">
</form>
</div>

<?php
if (isset($_POST['cancel']))
{
    header("Location:user_home.php");
}
if (isset($_POST['apply']))
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

    $img_name=$_FILES['imglink']['name'];
    $img_size=$_FILES['imglink']['size'];
    $img_tmp=$_FILES['imglink']['tmp_name'];

    $directory= "uploads/";
    $target_file= $directory.$img_name;

    mysqli_query($con, "UPDATE userdata SET f_name='$fname', s_name='$sname', gender='$gender', 
    age='$age', addr='$address', city='$city', stat='$state', phone='$phone', email='$email' WHERE username ='$uname'");
    if (empty($img_name))
    {}
    else
    {
        mysqli_query($con, "UPDATE userdata SET imglink='$target_file' WHERE username ='$uname'");
        move_uploaded_file($img_tmp,$target_file);
    }
    header("Location:user_home.php");
}
?>

</body>
</html>