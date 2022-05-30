<html>
<head>
<title>User Login</title>
</head>
<link rel="stylesheet" href="css/user_home.css">
<body style="background-image:url('resources/images/menubg.gif');
    background-size:cover">
<div id="welcome_page">
<br><br><br>

<?php
session_start();
$uname = $_SESSION["username"];
$con=mysqli_connect('localhost','root','','registration');
$query=mysqli_query($con,"SELECT * FROM userdata WHERE username ='$uname'");
$row=mysqli_fetch_array($query);
echo "<x class = 'welcome'>Welcome, $uname</x>";
?>

<form method="post">
    <input type="submit" name="logout" value="LOG OUT" class="logout">
</form>

<?php 
if (empty($row['imglink']))
{ 
    echo "<img id='uploadPreview' src='resources/images/blank_profile_2.png' class='image'";
}
else 
{
    $img_loc=$row['imglink'];
    echo "<img id='uploadPreview' src='$img_loc' class='image2'";
}
?><br><br>
<div id="personal">
<br>
<x class="title">PERSONAL DETAILS</x>
<form method="post">
    <input type="submit" name="edit" value="EDIT" class="edit">
</form>
<div class="line1"></div>
    <div class="details">
    <?php
    echo "<label class='label1'>Name</label>";
    echo "<label class='name'>: ".$row['f_name']." ".$row['s_name']."</label><br>";

    echo "<label class='label1'>Gender</label>";
    echo "<label class='gender'>: ".$row['gender']."</label><br>";

    echo "<label class='label1'>Age</label>";
    echo "<label class='age'>: ".$row['age']."</label><br>";

    echo "<label class='label1'>Address</label>";
    echo "<label class='address1'>: ".$row['addr']."</label><br>";
    echo "<label class='address2'>".$row['city'].", ".$row['stat']."</label><br>";

    echo "<label class='label1'>Phone number</label>";
    echo "<label class='phone'>: ".$row['phone']."</label><br>";

    echo "<label class='label1'>Email Address</label>";
    echo "<label class='email'>: ".$row['email']."</label><br>";
    if (isset($_POST['edit']))
    {
    header("Location:edit_personal.php");
    }
    ?>
    </div>
</div>

<div id="security">
<br>
<x class="title2">SECURITY SETTINGS</x>
<form method="post">
    <input type="submit" name="edit_pass" value="EDIT" class="edit_pass">
</form>
<div class="line2"></div>
    <div class="details2">
    <?php
    echo "<label class='label2'>Username</label>";
    echo "<label class='username'>: ".$row['username']."</label><br>";

    echo "<label class='label2'>Password</label>";
    $p_length = strlen($row['pass']);
    echo "<label class='password'>: ".str_repeat("&#9679",$p_length)."</label><br>";
    if (isset($_POST['edit_pass']))
    {
    header("Location:edit_acc.php");
    }
    ?>
    </div>
</div>
<div class="delete">
<form method="post">
    <input type="submit" name="delete" value="DELETE ACCOUNT" class="delete_acc">
</form>
</div>
<div>
<form>
    <a href="gallery.php"><input type="button" value="GALLERY" class="gallery_text"></a>
</form>
</div>
<div>
<form>
    <a href="chat.php"><input type="button" value="CHAT" class="chat_text"></a>
</form>
</div>
<?php
if (isset($_POST['logout']))
    {
    unset($_SESSION["username"]);
    header("Location:login.php");
    }

if (isset($_POST['delete']))
    {
    mysqli_query($con,"DELETE FROM userdata WHERE username ='$uname'");
    unset($_SESSION["username"]);
    header("Location:login.php");
    }
?>

</div>
</body>
</html>
