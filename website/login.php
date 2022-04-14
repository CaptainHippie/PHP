<html>
<head>
<title>Login Page</title>
</head>
<br><br><br>
<link rel="stylesheet" href="css/login.css">
<body style="background-image:url('resources/images/menubg.gif');
    background-size:cover">

<div id="loginpage">
<img src="resources/images/discord_logo.png" class="image">
<!img src="resources/images/amazon_logo_login.png" class="image"><br>
<h1 class="heading">LOGIN</h1>
<form method="post">
<label class="label">Username :</label>
<input type="text" name="u_name" class="namebox" required><br>
<label class="label">Password :</label>
<input type="password" name="p_word" class="passbox" required><br>
<input type="submit" name="login" value="SUBMIT" class="login"><br><br><br>
<label class="new_user">New User? Register here </label><br>
<a href="registration.php"><input type="button" name="register" value="REGISTER" class="register"></a>
</form>

<?php
session_start();
$con=mysqli_connect('localhost','root','','registration');
$submitted_uname;$submitted_pass;

if(count($_POST)>0)
{
    $submitted_uname = $_POST["u_name"];
    $submitted_pass = $_POST["p_word"];
    $query=mysqli_query($con,"SELECT * FROM userdata WHERE username ='$submitted_uname'"); 
    if (mysqli_num_rows($query)==0)
    {
        echo "<div class='no_user'>Username not found!</div>";
    }
    else
    {
        $row=mysqli_fetch_array($query);
        $saved_uname = $row['username'];
        $saved_pass = $row['pass'];
        if ($submitted_pass == $saved_pass)
        {
            //SUCCESSFUL LOGIN
            $_SESSION["username"]=$saved_uname;
            header("Location:user_home.php");
        }
        else
        {
            echo "<div class='invalid'>Invalid password!</div>";
        }
    }
}
?>

</div>
</body>
</html>
