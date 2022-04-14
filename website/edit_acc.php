<html>
<head>
<title>Edit Security</title>
</head>
<link rel="stylesheet" href="css/edit_acc.css">
<body style="background-image:url('resources/images/menubg.gif');
    background-size:cover">
<div id="security_page">
<br><br><br>

<?php
session_start();
$uname = $_SESSION["username"];
$con=mysqli_connect('localhost','root','','registration');
$query=mysqli_query($con,"SELECT * FROM userdata WHERE username ='$uname'");
$row=mysqli_fetch_array($query);
?>

<div id="security">
<br>
<x class="title">EDIT SECURITY SETTINGS</x>
<div class="line2"></div>
<div class="details2">
<form method="post" name="edit_uname">
<label class="label2">Username </label>
<x class='uname'>: &nbsp;<input type="text" name="uname" class="unamebox" value="<?php echo $row['username']; ?>" required></x>
<input type="submit" name="change_user" value="CHANGE" class="change_user"></form>
<form method="post" name="edit_pass">
<label class="label2">Current password</label>
<x class='c_pass'>: &nbsp;<input type="password" class="box2" name="c_pass"></x><br>
<label class="label2">New password</label>
<x class='new_pass'>: &nbsp;<input type="password" name="new_pass" class="box2" required></x><br>
<label class="label2">Confirm password</label>
<x class='con_pass'>: &nbsp;<input type="password" name="con_pass" class="box2" required></x><br>

</div>
</div>
    <input type="submit" name="c_pass_button" value="CHANGE PASSWORD" class="c_pass_button">
</form>
<form method="post">
    <input type="submit" name="cancel" value="CANCEL" class="cancel2">
</form>


<?php
if (isset($_POST['change_user']))
{
    $submitted_uname = $_POST['uname'];
    $query2=mysqli_query($con,"SELECT * FROM userdata WHERE username ='$submitted_uname'"); 
    if (mysqli_num_rows($query2)==0)
        {
        mysqli_query($con, "UPDATE userdata SET username='$submitted_uname' WHERE username ='$uname'");
        $_SESSION["username"]=$submitted_uname;
        echo "<script type='text/javascript'>alert('Username changed successfully!')</script>";
        header("Location:edit_acc.php");
        echo "<div class='change_success'>Username changed successfully!</div>";
        }
    else
        echo "<div class='user_change'>Username already exists!</div>";
    
}
if (isset($_POST['c_pass_button']))
{
    if ($_POST['c_pass'] == $row['pass'])
    {
        if ($_POST['new_pass'] == $_POST['con_pass'])
        {
            $new_pass=$_POST['new_pass'];
            mysqli_query($con, "UPDATE userdata SET pass='$new_pass' WHERE username ='$uname'");
            echo "<script type='text/javascript'>alert('Password changed successfully!')</script>";
            header("Location:user_home.php");
        }
        else
        {
            echo "<div class='wrong_pass'>New and confirm password does not match!</div>";
        }
    }
    else
    {
        echo "<div class='wrong_pass'>Password incorrect!</div>";
    }    
}

if (isset($_POST['cancel']))
{
    header("Location:user_home.php");
}

?>
</div>
</body>
</html>