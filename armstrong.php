<html>
<head><title>Creating Form</title></head>
<body background = "resources/images/background2.jpg">
<center>
    <h1 style = 'color:#003366;font-size:24px;font-family:comic sans ms;';><br>ARMSTRONG NUMBERS</h1>
    <l style = 'font-family:comic sans ms;font-size:14px;'>
    <form method="post">
        Enter the number : <input type="number" name="number"><br><br>
        <input type="submit" name="submit" value="submit">
    </form></l>
<?php
    if($_POST)
    {
        $num = $_POST['number'];
        $a = $num;
        $sum = 0;
        while ($a != 0)
        {
            $rem = $a % 10;
            $sum = $sum + ($rem * $rem * $rem);
            $a = $a / 10;
        }
        echo "<x style = 'font-family:comic sans ms;font-size:14px;'>";
        if ($num == $sum)
            echo "$num is an Armstrong number";
        else
            echo "$num is not an Armstrong number";
        echo "</x>";
    }
?>
</center>
</body>
</html>