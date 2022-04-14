<?php
// Start the session
session_start();
?>
<html>
<body>
<form method="post">
Command : <input name="flag"><br><br>
    <input type="submit" name="submit" value="submit">
</form>

<?php
// Set session variables
$_SESSION["favcolor"] = "RED";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.<br>";

if ($_POST['flag'] == "change")
    {
    $_SESSION["favcolor"] = "YELLOW";
    $_SESSION["favanimal"] = "dog";
    echo "Session variables changed.";
    }
if ($_POST['flag'] == "unset")
    {
    //session_unset();
    unset($_SESSION["favanimal"]);
    echo "Session unset.";
    }
if ($_POST['flag'] == "delete")
    {
    session_destroy();
    echo "Session destroyed.";
    }
$_POST['flag'] == "none"
?>

</body>
</html>