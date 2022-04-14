<html>
<head>
<title>Factorial</title></head>
<body background="resources/images/background2.jpg">
<center>
<h1 style = 'color:#003366;font-size:24px;font-family:comic sans ms;';>
<br>FACTORIAL OF A NUMBER</h1>
<l style = 'font-family:comic sans ms;font-size:14px;'>
<form method="post">
  Factorial of : <input type="number" name="number" style="height: 21px;
  width: 100px;font-size: 14px;"><br><br>
  <input type="submit" name="submit" value="SUBMIT" style="height: 21px;
  width: 80px;font-size: 14px;">
</form></l>

<?php
if($_POST)
{
  $num=$_POST['number'];
  $fact = 1;
  for ($x=$num;$x>=1;$x--)
  {
    $fact = $fact * $x;
  }
  echo "<x style = 'font-family:comic sans ms;font-size:14px;'>
  The factorial of $num is :$fact </x><br>";
}
?>
</center>
</body></html>