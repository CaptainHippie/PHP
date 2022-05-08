<html>
<body>
<?php
echo "<h2> <center>  Electricity Bill <hr></center></h2>";
echo"<h3>";
$nam='saranya';
echo "The consumer name is:    ".$nam;
echo"<br>";
$number=1235541;
echo "The consumer number is:   ".$number;
echo"<br>";
$unit=300.3;
if($unit<=50)
{
$amount=$unit*1.50;
}
else if($unit<=150)
{
$amount=((50*1.5)+($unit-50)*200);
}
else if(($unit<=250))
{
$amount=(50*1.5)+((150-50)*2.00)+($unit-150)*3.00;
}
else
{
$amount=(50*1.5)+((150-50)*2.00)+((250-150)*3.00)*($unit-250)*4;
}
echo"total unit consumption is".$unit;
echo"<br>";
echo "total price of unit consumtion is:".$amount;
?>
</body>
</html>