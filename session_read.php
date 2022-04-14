<?php
session_start();
?>
<?php 
$path = $_SESSION["path"];
echo "PATH : [".$path."]";
?>

<?php
/* Echo session variables that were set on previous page
echo "<br>First method : <br>";
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";

//Method two
echo "<br><br>second method : <br>";
print_r($_SESSION);*/
?>

