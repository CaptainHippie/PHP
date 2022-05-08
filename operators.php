
<html>
<head>
  <title>PHP Operators</title>
</head>
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTufgdidoSi6BsOsHJXwMOTHPAEyaWBZZv5UQ&usqp=CAU">

<?php 
echo "<f style='font-family:calibri;'><l style='color:red;font-size:34px;margin-left:50px ;'><strong>PHP OPERATORS</strong><br></l>";  
echo "<l style='color:green;font-size:24px;margin-left:90px ;'>ARITHMETIC OPERATORS<br></l>"; 
echo "<i style='margin-left:130px ;'>The PHP arithmetic operators are used to perform common arithmetic operations such as addition, subtraction, etc. with numeric values.<br></i>"; 

$a = 9;
$b = 4;
echo "<style> table{border-collapse:collapse;text-align:center;margin:1% auto;margin-left:130px;border: 1px solid #0066ff}";
echo "td {border-right: 1px solid #0066ff;style=padding:5px;margin:5%;}";
echo "tr:nth-child(odd) {background-color:#b3e0ff}";
//echo "tr:nth-child(odd) {background-color:white;color:#0099ff;}</style>";
echo ("</style>");
echo "<table margin='50%'><tr style='background-color:#0066ff;border: 1px solid #0066ff;color:white'><td>Operator</td><td>Name</td><td>Explanation</td><td style='padding:5px;margin:5%;'>  \$a  </td><td>  \$b  </td><td>operator result</td></tr>";
echo "<tr><td>+</td><td>Addition</td><td>Sum of operands</td><td>$a</td><td>$b</td><td>\$a + \$b = ",$a + $b,"</td></tr>";
echo "<tr><td>-</td><td>Subtraction</td><td>Difference of operands</td><td>$a</td><td>$b</td><td>\$a - \$b = ",$a - $b,"</td></tr>";
echo "<tr><td>*</td><td>Multiplication</td><td>Product of operands</td><td>$a</td><td>$b</td><td>\$a * \$b = ",$a * $b,"</td></tr>";
echo "<tr><td>/</td><td>Division</td><td>Quotient of operands</td><td>$a</td><td>$b</td><td>\$a / \$b = ",$a / $b,"</td></tr>";
echo "<tr><td>%</td><td>Modulus</td><td>Remainder of operands</td><td>$a</td><td>$b</td><td>\$a % \$b = ",$a % $b,"</td></tr>";
echo "<tr><td>**</td><td>Exponentiation</td><td>\$a raised to the power \$b</td><td>$a</td><td>$b</td><td>\$a ** \$b = ",$a ** $b,"</td></tr>";
echo "</table>";


echo "<l style='color:green;font-size:24px;margin-left:90px ;'>ASSIGNMENT OPERATORS<br></l>"; 
echo "<i style='margin-left:130px ;'>The assignment operators are used to assign value to different variables. The basic assignment operator is \"=\".<br></i>"; 

echo "<style> table{border-collapse:collapse;text-align:center;margin:1% auto;margin-left:130px;border: 1px solid #0066ff}";
echo "td {border-right: 1px solid #0066ff}";
echo "tr:nth-child(odd) {background-color:#b3e0ff}";
echo ("</style>");
echo "<table margin='50%'><tr style='background-color:#0066ff;border: 1px solid #0066ff;color:white'><td>Operator</td><td>Name</td><td>Explanation</td><td style='padding:5px;margin:5%;'>  \$a  </td><td>  \$b  </td><td>operator result</td></tr>";
echo "<tr><td>=</td><td>Assign</td><td>The value of right operand is <br>assigned to the left operand.</td><td>$a</td><td>$b</td><td>\$a = \$b = ",$a = $b,"</td></tr>";
echo "<tr><td>+=</td><td>Add then Assign</td><td>Addition same as \$a = \$a + \$b</td><td>$a</td><td>$b</td><td>\$a += \$b = ",$a += $b,"</td></tr>";
echo "<tr><td>-=</td><td>Subtract then Assign</td><td>Subtraction same as \$a = \$a - \$b</td><td>$a</td><td>$b</td><td>\$a -= \$b = ",$a -= $b,"</td></tr>";
echo "<tr><td>*=</td><td>Multiply then Assign</td><td>Multiplication same as \$a = \$a * \$b</td><td>$a</td><td>$b</td><td>\$a *= \$b = ",$a *= $b,"</td></tr>";
echo "<tr><td>/=</td><td>Divide then Assign(quotient)</td><td>Find quotient same as \$a = \$a / \$b</td><td>$a</td><td>$b</td><td>\$a /= \$b = ",$a /= $b,"</td></tr>";
echo "<tr><td>%=</td><td>Divide then Assign(remainder)</td><td>Find remainder same as \$a = \$a % \$b*</td><td>$a</td><td>$b</td><td>\$a %= \$b = ",$a %= $b,"</td></tr>";
echo "</table>";


echo "<l style='color:green;font-size:24px;margin-left:90px ;'>COMPARISON OPERATORS<br></l>"; 
echo "<i style='margin-left:130px ;'>Comparison operators allow comparing two values, such as number or string. Below the list of comparison operators are given:<br></i>"; 

$a = 5;
$b = "5";
echo "<style> table{border-collapse:collapse;text-align:center;margin:1% auto;margin-left:130px;border: 1px solid #0066ff}";
echo "td {border-right: 1px solid #0066ff}";
echo "tr:nth-child(odd) {background-color:#b3e0ff}";
//echo "tr:nth-child(odd) {background-color:white;color:#0099ff;}</style>";
echo "</style>";
echo "<table margin='50%'><tr style='background-color:#0066ff;border: 1px solid #0066ff;color:white'><td>Operator</td><td>Name</td><td>Explanation</td><td style='padding:5px;margin:5%;'>  \$a  </td><td>  \$b  </td><td>operator result</td></tr>";
echo "<tr><td>==</td><td>Equal</td><td>Return TRUE if \$a is equal to \$b</td><td>$a</td><td>$b</td><td>\$a == \$b = ",$a == $b,"</td></tr>";
echo "<tr><td>===</td><td>Identical</td><td>Return TRUE if \$a is equal to \$b,<br>and they are of same data type</td><td>$a</td><td>\"$b\"</td><td>\$a === \$b = ",$a === $b,"</td></tr>";
echo "<tr><td>!==</td><td>Not identical</td><td>Return TRUE if \$a is not equal to \$b,<br>and they are not of same data type</td><td>$a</td><td>$b</td><td>\$a !== \$b = ",$a !== $b,"</td></tr>";
echo "<tr><td>!=</td><td>Not equal</td><td>Return TRUE if \$a is not equal to \$b</td><td>$a</td><td>$b</td><td>\$a != \$b = ",$a != $b,"</td></tr>";
echo "<tr><td><></td><td>Not equal</td><td>Return TRUE if \$a is not equal to \$b</td><td>$a</td><td>$b</td><td>\$a <> \$b = ",$a <> $b,"</td></tr>";
echo "<tr><td><</td><td>Less than</td><td>Return TRUE if \$a is less than \$b</td><td>$a</td><td>$b</td><td>\$a < \$b = ",$a < $b,"</td></tr>";
echo "<tr><td>></td><td>Greater than</td><td>Return TRUE if \$a is greater than \$b</td><td>$a</td><td>$b</td><td>\$a > \$b = ",$a > $b,"</td></tr>";
echo "<tr><td><=</td><td>Less than or equal to</td><td>Return TRUE if \$a is less than or equal $b</td><td>$a</td><td>$b</td><td>\$a <= \$b = ",$a <= $b,"</td></tr>";
echo "<tr><td>>=</td><td>Greater than or equal to</td><td>Return TRUE if \$a is greater than or equal $b</td><td>$a</td><td>$b</td><td>\$a >= \$b = ",$a >= $b,"</td></tr>";
echo "<tr><td><=></td><td>Spaceship</td><td>Return -1 if \$a is less than \$b<br>Return 0 if \$a is equal \$b<br>Return 1 if \$a is greater than \$b</td><td>$a</td><td>$b</td><td>\$a <=> \$b = ",$a <=> $b,"</td></tr>";
echo "</table>";


/*echo "<tr style='margin-left:130px; text-align:center'><td>Operator</td><td>Name</td><td>Explanation</td><td>  \$a  </td><td>  \$b  </td><td>operator result</td></tr>";
echo "<tr style='margin-left:130px; text-align:center'><td>+</td><td>Addition</td><td>Sum of operands</td><td>$a</td><td>$b</td><td>\$a + \$b = ",$a + $b,"</td></tr>";
echo "<tr style='margin-left:130px; text-align:center'><td>-</td><td>Subtraction</td><td>Difference of operands</td><td>$a</td><td>$b</td><td>\$a - \$b = ",$a - $b,"</td></tr>";
echo "<tr style='margin-left:130px; text-align:center'><td>*</td><td>Multiplication</td><td>Product of operands</td><td>$a</td><td>$b</td><td>\$a * \$b = ",$a * $b,"</td></tr>";
echo "<tr style='margin-left:130px; text-align:center'><td>/</td><td>Division</td><td>Quotient of operands</td><td>$a</td><td>$b</td><td>\$a / \$b = ",$a / $b,"</td></tr>";
echo "<tr style='margin-left:130px; text-align:center'><td>%</td><td>Modulus</td><td>Remainder of operands</td><td>$a</td><td>$b</td><td>\$a % \$b = ",$a % $b,"</td></tr>";
echo "<tr style='margin-left:130px; text-align:center'><td>**</td><td>Exponentiation</td><td>\$a raised to the power \$b</td><td>$a</td><td>$b</td><td>\$a ** \$b = ",$a ** $b,"</td></tr>";*/
#echo "</table>";

?>


</body>
</html>