<html>
<center>
<body>
<h1><I><B><U>KSEB</U></B></I></h1>
<h3>കേരളത്തിന്റെ ഊർജം </h3>


<h2>Demand/Disconnection Notice <br>
(Electricity Act 2003 P56)<br>
 Customer Care 1912<br>
Arikkulam section<br>
0496-2695100</h2>
<h>Select The supply</h> <br><br>

<?php
$con_num="C#:1167670000710";
$name="VISWANATHAN E  ,  KOLAPPERY";


$tr=2.16;
$sl=2;
$fcr=70;
$cmu=15048;
$pmu=14620;
$ur=4.43;


$uc = $cmu-$pmu;
$ec = $uc*$ur;

$fc = $sl*$fcr;


if ($uc<=50)
    $ec=$uc*4.43;    
elseif ($uc>50 and $uc<=100)
    $ec=$uc*4.98;       
elseif ($uc>100 and $uc<=150)
    $ec=$uc*6.08;
elseif ($uc>150 and $uc<=200)
    $ec=$uc*7.68;
elseif ($uc>200 and $uc<=250)
    $ec=$uc*8.8;
else
    echo"<b> This consumer uses more than 250
 unit, you need to pay additinal charge
 according to KSEB </b></br>";


 $ed = ( ($ec+$fc)*$tr)/100;

 $teb = $ec+$fc+$ed;

echo"Name of the consumer is :".$name."<br><br>";
echo"The consumer number is :".$con_num."<br><br>";


echo"<table border=2>";
echo"<tr><th>Unit</th>";
echo"<th>Curr</th>";
echo"<th>Prev</th>";
echo"<th>Cons</th>";
echo"<tr><td>KWH/A/I</td>";
echo"<td>".$cmu."</td>";
echo"<td>".$pmu."</td>";
echo"<td>".$uc."</td></tr>";
echo"</table><br><br>";

echo"Fixed Charges  :" .$fc."</br>";

echo"Energy Charges  :" .$ec."</br>";


echo"Duty  :" .$ed."</br>";


echo"Total Electricity Bill/Payable  :" .$teb."  Rs/- <br> <br> <br>"; 

echo"<U>Remarks </U><br><br>";
echo"Mtr Rent:12 CGST 9% :1.08     SGST 9% :1.08"



?>

</body>
</html>

