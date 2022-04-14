<html>
<head>
  <title>Electricity Bill</title>
</head>
<link rel="stylesheet" href="css/ebill.css">
<body background="resources/images/ebill_bg.png">
<br><br>
<div id="main_wrap">
<form method="post" class="myform">
<label class="heading">ELECTRICITY BILL</label><br><br>

<label class="label">Name : </label>
<input type="text" name="name" class="input1" placeholder="Name"><br>
<label class="label">Consumer no : </label>
<input type="number" name="con_num" class="input2" placeholder="7-digit number"><br>
<label class="label">Current Reading : </label>
<input type="number" name="current" class="input3"><br>
<label class="label">Previous Reading : </label>
<input type="number" name="previous" class="input4"><br><br>
<label class="label">Billing Type : </label>
<input type="radio" id="single" name="type" value="Monthly">
<label class="radio" for="single">Monthly
<input type="radio" id="bi_month" name="type" value="Bi-Monthly" checked>
<label class="radio" for="bi-month">Bi-Monthly<br><br>
<input type="submit" name="submit" value="SUBMIT" id = "submitkey"></l>
</form>
</div>
<br><br><br><br>
<center>
<img src="resources/images/kseb-logo2.png" width="334" height="139">
<p style='font-family:euphemia'>Demand/Disconnection Notice<br>( Electricity Act 2003 P56 )<br>
Customer Care 1912<br>Valappad section<br>0480-2837123
<br>KSEBL-GSTIN: 32AACECK2277NBZI<br>
<img src="resources/images/barcode.png" width="137" height="55">
<br><b><p1 style='font-size:19px'>C#: 1156684002619<p1></b></p>

<?php 
# CHANGE VALUES HERE
$name = "";
$con_num = '-';
$type = "Bi-monthly";
$bill = "21-01-2022";
$due = "15-02-2022";
$current_usage = 0;
$previous_usage = 0;

$tariff = "LT-1A Dom";
$surcharges = 11;
$plan = "Domestic";
$tax_rate = 10;
$meter_rent = 14.16;

if ($_POST)
  {
    $current_usage = (int)$_POST['current'];
    $previous_usage = (int)$_POST['previous'];
    $name = $_POST['name'];
    $con_num = (int)$_POST['con_num'];
  }

# FIXED CALCULATIONS
$unit_consumed = $current_usage - $previous_usage;
$scheme = '';
$limit_reached = False;

if ($unit_consumed <= 100)
  { $energy_charge = ($unit_consumed * 3.15);
  $fixed_charge = 70; }
elseif ($unit_consumed <= 200)
  { $energy_charge = (($unit_consumed - 100) * 3.7) + 315;
  $fixed_charge = 90; }
elseif ($unit_consumed <= 300)
  { $energy_charge = (($unit_consumed - 200) * 4.8) + 685;
  $fixed_charge = 110; }
elseif ($unit_consumed <= 400)
  { $energy_charge = (($unit_consumed - 300) * 6.4) + 1165;
  $fixed_charge = 140; }
elseif ($unit_consumed <= 500)
  { $energy_charge = (($unit_consumed - 400) * 7.6) + 1805;
  $fixed_charge = 160; }
elseif ($unit_consumed <= 600)
  { $energy_charge = ($unit_consumed * 5.8);
  $fixed_charge = 200; }
elseif ($unit_consumed <= 700)
  { $energy_charge = ($unit_consumed * 6.6);
  $fixed_charge = 220; }
elseif ($unit_consumed <= 800)
  { $energy_charge = ($unit_consumed * 6.9);
  $fixed_charge = 240; }
elseif ($unit_consumed <= 1000)
  { $energy_charge = ($unit_consumed * 7.1);
  $fixed_charge = 260; }
else 
  { $energy_charge = ($unit_consumed * 7.9);
  $fixed_charge = 300;
  $limit_reached = True; }

if ($unit_consumed <= 500)
  $scheme = "Telescopic";
else
  $scheme = "Non-Telescopic";

$e_duty = $energy_charge * $tax_rate/100;
$total = round(($fixed_charge + $energy_charge + $e_duty + $meter_rent + $surcharges),2); 
$pay = round($total,0);
$diff = round(($pay - $total),2);

echo "<f style='font-family:euphemia;'>";
echo "<p style='font-size:19px'><x style='margin-left:-28px'>Consumer Name &nbsp : &nbsp $name <br></x>";
echo "<x style='margin-left:-54px'>Connection ID".str_repeat("&nbsp;",5).": &nbsp $con_num <br></x>";
echo "<x style='margin-left:-36px'>Billing Type ".str_repeat("&nbsp;",7).": &nbsp $type <br></x>";
echo "<x style='margin-left:-26px'>Billing date ".str_repeat("&nbsp;",7).": &nbsp $bill <br></x>";
echo "<x style='margin-left:-26px'>Due date ".str_repeat("&nbsp;",9).": &nbsp $due <br></x>";
echo "<x style='margin-left:-43px'>Purpose".str_repeat("&nbsp;",10).": &nbsp $plan <br></x>";
echo "<x style='margin-left:-33px'>Tariff".str_repeat("&nbsp;",13).": &nbsp $tariff <br></x></p>";

echo "<style> table{border-collapse:collapse;text-align:center;margin:1% auto;border: 1px solid black}";
echo "td {
    border-right: 1px solid black;  
    }";

echo ("</style>");
echo "<table margin='50%' cellpadding='4' style ='border: 2px solid black'><tr style='padding:5px;margin:5%;'><td>Unit</td><td>Current</td><td>Previous</td><td>Consumed</td></tr>";
echo "<tr style='border: 1px solid black'><td style='padding-left: 15px;padding-right: 15px;'>KWH/A/I</td><td style='padding-left: 20px;padding-right: 20px;'>$current_usage</td><td style='padding-left: 20px;padding-right: 20px;'>$previous_usage</td><td style='padding-left: 35px;padding-right: 35px;'>$unit_consumed</td></tr>";
echo "</table><br>";

echo "<x style='font-size:19px'>Scheme : <b>$scheme </b><br></x>";

if ($limit_reached == True)
  echo "<i style='font-size:13px;color:red'><b>Warning : Your usage is extremely high, you'll have to pay <br>extra charges & the board will have to take necessary actions<b><br></i>";
elseif ($unit_consumed > 500) 
  echo "<i style='font-size:13px;color:red'>Note : You have exceeded monthly usage of 250 units,<br> you will have to pay additional charges<br></i>";

echo "<table margin='50%' cellpadding='4' style ='border: 2px solid black;font-size:18px'><tr style='padding:5px;margin:5%;'><td>Fixed Charges  : </td><td> $fixed_charge </td></tr>";
echo "<tr><td>Meter Rent  : </td><td> $meter_rent </td></tr>";
echo "<tr><td style='padding-left: 30px;padding-right: 30px;'>Energy charge  : </td><td> $energy_charge </td></tr>";
echo "<tr><td>Duty charge  : </td><td> $e_duty </td></tr>";
echo "<tr><td>Surcharges  : </td><td> $surcharges </td></tr>";
echo "<tr><td>Bill Amount  : </td><td style='padding-left: 30px;padding-right: 30px;'> $total </td></tr>";
echo "<tr><td>Round off  : </td><td> $diff </td></tr>";
echo "<tr style='border: 1px solid black'><td><b>Payable  : </b></td><td><b> $pay </td></tr></b>";
echo "</table>";

echo "</f>"
?>

<p style='font-size:17px'><br>Remarks<br>Mtr Rent:12 CGST 9% :1.08 SGST 9% :1.08 </p>
</center>
</body>
</html>