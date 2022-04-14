<html>
<link rel="stylesheet" href="css/chatbox.css">
<body onload="show_func()" style="background-image:url('resources/images/menubg.gif');
    background-size:cover">
<script>
function show_func(){
var element = document.getElementById("box_scroll");
	element.scrollTop = element.scrollHeight;
}
function refreshPage(){
    window.location.reload();
}

</script>
<?php
session_start();
$logged_user = $_SESSION["username"];
$con = mysqli_connect("localhost","root", "", "registration");
$query = mysqli_query($con,"SELECT * FROM chats");
?>

<center>
<div id='main'>
<div class='up_widget'>
<img id="menu" src="resources/images/menu_icon_white2.png" class='image'><br>
<header class="header">GROUP CHAT</header>
<a href="user_home.php"><img id="go_back" src="resources/images/back_icon.png" class='imageback'></a>
</div>
<div id="chatbox">
<form method="POST" class="f_form">
<input type="image" onclick="refreshPage()" src="resources/images/refresh.png" class="reload">
    <a href="chat.php?delete=true"><img src="resources/images/bin.png" name="delete" class="delete"></a>
</form>
<div id="box_scroll">
<?php
while($row = mysqli_fetch_array($query))
{
    if ($row['uname'] == $logged_user)
    {
        echo "<v class='self'>".$row['msg']."<br>";
        echo "<x class='self_ts'>".$row['dt']."</x><br>";
        echo "</v><br><br>";
    }
    else
    {
        echo "<v class='other'>".$row['msg']."<br>";
        echo "<x class='other_name'>".$row['uname'].", ".$row['dt']."</x><br>";
        echo "</v><br><br>";
    }
    echo "<br>";
}
if (isset($_GET['message']))
{
    date_default_timezone_set('Asia/Kolkata');
    $ts=date('h:ia');
    $msg_text=$_GET['message'];
    mysqli_query($con,"INSERT INTO chats(uname,msg,dt) VALUES('$logged_user','$msg_text','$ts')");
    header("Location:chat.php");
}
if (isset($_GET['delete']))
{
    mysqli_query($con,"TRUNCATE TABLE chats");
    header("Location:chat.php");
}
?>
</div>
</div>
<form method="GET">
<textarea type="text" name="message" placeholder="Type your message" class="textbox" required></textarea>
<input type="image" src="resources/images/send_icon.png" alt="submit" class="send">
</form>
</div>
</center>
</body>
</html>