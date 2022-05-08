
<html>
<head>
  <title>Assignment</title>
</head>
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTufgdidoSi6BsOsHJXwMOTHPAEyaWBZZv5UQ&usqp=CAU">

<?php 
echo '<l style="color:red;font-size:34px;font-family:Arial-bold;margin-left:80px ;">ECHO FUNCTIONS<br><br></l> ';  
echo '<i style="color:blue;font-size:24px;font-family:calibri;margin-left:120px  ;">Printing Single Line<br></i> '; 
echo '<l style="margin-left:140px  ;">Hello PHP<br><br><l>';
echo '<i style="color:blue;font-size:24px;font-family:calibri;margin-left:120px ;">Printing Multi Line<br></i> '; 
echo '<l style="margin-left:140px  ;">Hello by PHP echo
this is multi line
text printed by
PHP echo statement
<br><br><l>';
echo '<i style="color:blue;font-size:24px;font-family:calibri;margin-left:120px ;">Escape Sequence<br></i> '; 
echo '<l style="margin-left:140px  ;">Hello escape \"sequence\" characters<br></l>';
echo '<i style="color:blue;font-size:24px;font-family:calibri ;"><br>Printing Variable<br></i> '; 
$fname = "Neeraj";  
$lname = " V B";  
echo "My name is: ".$fname,$lname; 

print '<i style="color:red;font-size:34px;font-family:Arial-bold ;"><br><br>PRINT FUNCTIONS</i> '; 
print '<i style="color:blue;font-size:24px;font-family:calibri ;"><br><br>Printing Single Line</i> '; 
print "<br>Hello PHP<br>";
print '<i style="color:blue;font-size:24px;font-family:calibri ;"><br>Printing Multi Line</i> '; 
print "<br>Hello by PHP print 
this is multi line  
text printed by   
PHP print statement  
";
print '<i style="color:blue;font-size:24px;font-family:calibri ;"><br><br>Escape Sequence</i> '; 
print "<br>Hello escape \"sequence\" characters by PHP print<br>";
print '<i style="color:blue;font-size:24px;font-family:calibri ;"><br>Printing Variable</i> ';
print "<br>My name is: $fname $lname";
;
?>


</body>
</html>