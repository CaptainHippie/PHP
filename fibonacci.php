<html>
<head><title>Fibonacci Series</title></head>
<body background="resources/images/background2.jpg">
<center>
<h1 style = 'color:#003366;font-size:24px;font-family:comic sans ms;';><br>FIBONACCI NUMBERS</h1>
    <l style = 'font-family:comic sans ms;font-size:14px;'>
    <form method="post">
        Fibonacci Numbers upto : <input type="number" name="number"><br><br>
        <input type="submit" name="submit" value="submit">
    </form></l>

<?php
    if($_POST)
    {
        $n1 = 0;
        $n2 = 1;
        echo "<x style = 'font-family:comic sans ms;font-size:14px;'>";
        $limit=$_POST['number'];
        if ($limit <0)
            echo "Please enter a positive number";
        elseif ($limit == 1 or $limit == 0)
            echo "Fibonacci sequence upto $limit is 1";
        else
        {
            echo "Fibonacci sequence upto $limit is :<br>";
            echo "0";
            while ($n2 <= $limit)
            {
                echo ", $n2";
                $n = $n1 + $n2;
                $n1 = $n2;
                $n2 = $n;
            }
            echo "</x>";
        }
    }
?>

</center>
</body>
</html>