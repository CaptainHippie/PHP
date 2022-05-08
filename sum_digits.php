<html>
<head><title>Sum of Digits</title></head>
<body background ="resources/images/background2.jpg">
<center>
<h1 style = 'color:#003366;font-size:24px;font-family:comic sans ms;';>
<br>SUM OF DIGITS OF A NUMBER</h1>
<l style = 'font-family:comic sans ms;font-size:15px;'>
<form method="post">
    Enter the number : <input type="number" name="number" style=" height:24px; width:130px; font-size:14px;">
    <br><br>
    <input type = "submit" name = "submit" value = "submit" style=" height: 24px; width: 90px;
            font-size: 14px; font-family: 'gisha';font-weight: bold;">
</form>

<?php
if($_POST)
{
    $num = $_POST['number'];
    $x = $num;
    $sum = 0;$rem = 0;
    for($i = 0; $i <= strlen($x); $i++)
    {
        $rem = $x % 10;
        $sum = $sum + $rem;
        $x = $x / 10;
    }
echo "<br>Sum of digits of $num is : <b>$sum<b>";
}
?>

</l></center>
</body>
</html>