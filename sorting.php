<html>
<body background="resources/images/background2.jpg">
<center>

<?php
$names = array("Lewandowski","Kimmich","Neuer","Muller","Goretzka","Davies");
$numbers = array(9,6,1,25,8,19);
$count = count($names);
$name_sorted = $names;
sort($name_sorted);
$num_sorted = $numbers;
sort($num_sorted);

echo "<f style='font-family:comic sans ms;'><l style='color:red;font-size:34px;margin-left:50px ;'>";
echo str_repeat("<br>",5);
echo "<style> table{border-collapse:collapse;text-align:center;margin-left:130px;border: 1px solid #0066ff}";
echo "td {border-right: 1px solid #0066ff}";
echo "</style>";
echo "<table margin='50%' style ='border: 2px solid #0066ff'>";
echo "<tr style='background-color:#0066ff; border:1px solid #0066ff; color:white'>";
echo "<th style='padding:5px; padding-left: 20px;padding-right: 20px; border-right: 1px solid white'>Names</th>";
echo "<th style='padding-left:20px; padding-right:20px; border-right: 1px solid white'>Numbers</th>";
echo "<th style='padding-left:20px; padding-right:20px; border-right: 1px solid white'>Sorted Names</th>";
echo "<th style='padding-left:20px; padding-right:20px;'>Sorted Numbers</th>";
echo "</tr>";
for ($i=0;$i<$count;$i++)
    {
    echo "<tr>";
    echo "<td style='padding:3px;'>".$names[$i]."</td>";
    echo "<td>".$numbers[$i]."</td>";
    echo "<td>".$name_sorted[$i]."</td>";
    echo "<td>".$num_sorted[$i]."</td>";
    echo "</tr>";
    }
echo "</f>";
?>

</center>
</body>
</html>