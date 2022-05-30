<?php
session_start();
$con = mysqli_connect("localhost","root", "", "registration") or die("CONNECTION ERROR");
$query = mysqli_query($con,"SELECT * FROM chat_two");
$query2 = mysqli_query($con,"SELECT * FROM chat_two");
$left_user = $_SESSION["l_user"];
$right_user = $_SESSION["r_user"];
?>

<html>
<link rel="stylesheet" href="css/chat_new.css">
<body>
<div id="main">
<header>CHAT BOX</header>
<div class='left_box'><br><br>
<div class="logged">Logged in as : <b><?php echo $left_user; ?></b></div>
<form method="POST">
<input type="text" name="uname_left" class="uname_box" required><br>
<input type="submit" name="l_user" value="LOGIN" class="login_btn">
</form>
<div class="l_chat"><br>
<?php
while($row = mysqli_fetch_array($query))
{
    if ($row['uname'] == $left_user){
        echo "<x style='float: right' class='self_msg'>";
        echo $row['msg']."</x><br><br>";
    }
    else{
        echo "<x style='float: left' class='other_msg'>";
        echo "<b>".$row['uname']."</b> : ".$row['msg']."</x><br><br>";
    }
}
?>
</div>
<form method="POST">
<textarea type="text" name="l_msg" placeholder="Type your message" class="msgbox" required></textarea>
<input type="submit" name="l_submit" value="SEND" class="send_btn">
</form>
</div>

<div class='right_box'><br>
<div class="logged2">Logged in as : <b><?php echo $right_user; ?></b></div>
<form method="POST">
<input type="text" name="uname_right" class="uname_box2" required><br>
<input type="submit" name="r_user" value="LOGIN" class="login_btn">
</form>
<div class="l_chat"><br>
<?php

while($row2 = mysqli_fetch_array($query2))
{
    if ($row2['uname'] == $right_user){
        echo "<x style='float: right' class='self_msg'>";
        echo $row2['msg']."</x><br><br>";
    }
    else{
        echo "<x style='float: left' class='other_msg'>";
        echo "<b>".$row2['uname']."</b> : ".$row2['msg']."</x><br><br>";
    }
}
?>
</div>
<form method="POST">
<textarea type="text" name="r_msg" placeholder="Type your message" class="msgbox" required></textarea>
<input type="submit" name="r_submit" value="SEND" class="send_btn">
</form>
<form method="post">
    <input type="submit" name="delete" value="DELETE ALL" class="delete">
</form>
</div>

<?php
if (isset($_POST['l_submit']))
{
    $msg_left=$_POST['l_msg'];
    mysqli_query($con,"INSERT INTO chat_two(uname,msg) VALUES('$left_user','$msg_left')");
    header("Location:chat_new.php");
}
if (isset($_POST['r_submit']))
{
    $msg_right=$_POST['r_msg'];
    mysqli_query($con,"INSERT INTO chat_two(uname,msg) VALUES('$right_user','$msg_right')");
    header("Location:chat_new.php");
}

if (isset($_POST['l_user']))
{
    $_SESSION["l_user"]=$_POST['uname_left'];
    header("Location:chat_new.php");
}
if (isset($_POST['r_user']))
{
    $_SESSION["r_user"]=$_POST['uname_right'];
    header("Location:chat_new.php");
}
if (isset($_POST['delete']))
{
    mysqli_query($con,"TRUNCATE TABLE chat_two");
    header("Location:chat_new.php");
}
?>
</div>
</body>
</html>