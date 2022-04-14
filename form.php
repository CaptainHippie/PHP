<html>
<head><title>Factorial</title></head>
<body background="resources/images/background2.jpg">
<center>
<h1 style = 'color:#003366;font-size:24px;font-family:comic sans ms;';><br>FACTORIAL OF A NUMBER</h1>
    <l style = 'font-family:comic sans ms;font-size:14px;'>
    <form method="post">
    Enter the number : <input type="number" name="number"><br><br>
        <input type="submit" name="submit" value="submit"></l>
    </form>
<?php
    if($_POST)
    {
        $fact=1;
        $num=$_POST['number'];
        echo "<x style = 'font-family:comic sans ms;font-size:14px;'>";
            for($i=1;$i<=$num;$i++)
            {
                $fact=$fact*$i;
            }
        echo "<br>";
        echo "factorial of $num is : $fact";
        echo "</x>";
    }
?>
</center>
</body>
</html>