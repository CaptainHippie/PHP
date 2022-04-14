
<html>
<head>
  <title>PHP Operators</title>
</head>
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTufgdidoSi6BsOsHJXwMOTHPAEyaWBZZv5UQ&usqp=CAU">

<?php 
echo "<f style='font-family:comic sans ms;'>";  
echo "<l style='color:green;font-size:24px;margin-left:90px ;'>STUDENT MARKLIST<br></l>"; 

$m1 = 98;
$m2 = 97;
$m3 = 99;
$m4 = 90;
$tot = $m1 + $m2 + $m3 + $m4;
$avg = $tot/4;
$grade;

if ($avg>=0 && $avg<=50)
    $grade = "Fail";
elseif ($avg>50 && $avg<=70)
    $grade = "C";
elseif ($avg>70 && $avg<=80)
    $grade = "B";
elseif ($avg>80 && $avg<=90)
    $grade = "A";
elseif ($avg>90 && $avg<=95)
    $grade = "A Plus";
else $grade = "Excellent";


echo "<style> table{border-collapse:collapse;text-align:center;margin:1% auto;margin-left:130px;border: 1px solid #0066ff}";
echo "td {border-right: 1px solid #0066ff}";
echo "tr:nth-child(odd) {background-color:#b3e0ff}";
//echo "tr:nth-child(odd) {background-color:white;color:#0099ff;}</style>";
echo ("</style>");
echo "<table margin='50%'><tr style='background-color:#0066ff;border: 1px solid #0066ff;color:white'><td>Name</td><td>English</td><td style='padding:5px;margin:5%;'>Maths</td><td>Physics</td><td>Chemistry</td><td>Total Marks</td><td>Average Marks</td><td>Grade</td></tr>";
echo "<tr><td>Neeraj</td><td>$m1</td><td>$m2</td><td>$m3</td><td>$m4</td><td>$tot /400</td><td>$avg</td><td>$grade</td></tr>";
echo "</table></f>";


?>


</body>
</html>