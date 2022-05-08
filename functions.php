<html>
<head>
<title>Assignment</title>
</head>
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTufgdidoSi6BsOsHJXwMOTHPAEyaWBZZv5UQ&usqp=CAU">

<?php 
echo '<i style="color:red;font-size:34px;font-family:Arial-bold ;"><strong>PHP VARIABLES</strong></i> ';
echo '<i style="color:blue;font-size:24px;font-family:calibri ;"><br>Declaring Variables</i> ';
$str="Neeraj";
$x=23;
$y=177.4;
echo "<br>Name : $str <br/>";
echo "Age : $x <br/>";
echo "Height : $y cm<br/>";
$x=5;
$y=6;
echo "sum of $x and $y is :",($x+$y);

echo '<i style="color:blue;font-size:24px;font-family:calibri ;"><br>Case Sensitiveness and rules<br></i> ';
$color="red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
$a="hello";
$_b="there";
echo "word using variable with letter and underscore : $a  $_b";

echo '<i style="color:red;font-size:34px;font-family:Arial-bold ;"><br><br><strong>PHP VARIABLE SCOPE</strong></i> ';
echo '<i style="color:blue;font-size:24px;font-family:calibri ;"><br>Local variables</i> ';

function mytest()
{
    $lang = "PHP";
    echo "<br>Web development language: " .$lang;
}
mytest();

echo '<i style="color:blue;font-size:24px;font-family:calibri ;"><br>Global variables<br></i> ';

$name = "Programming";
function global_var()
{
    global $name;
    echo "Variable inside the function: ". $name;
    echo "</br>";
}
global_var();
echo "Variable outside the function: ". $name;

echo '<i style="color:blue;font-size:24px;font-family:calibri ;"><br>Global variable using $globals<br></i> ';

$num1 = 5;
$num2 = 13;
function globals_var()
{
    $sum = $GLOBALS['num1'] + $GLOBALS['num2'];
    echo "Sum of global variables $GLOBALS[num1] and $GLOBALS[num2] is: " .$sum;
}
globals_var();

$x = 5;
function globals()
{
    echo "<br>value of global variable x = $GLOBALS[x] ";
    $GLOBALS['x'] = 7;
    echo "is changed to x = $GLOBALS[x]";
}
globals();

echo '<i style="color:blue;font-size:24px;font-family:calibri ;"><br>Static Variables<br></i> ';
function static_var()
{
    static $numm1 = 3;
    $numm2 = 6;
    $numm1++;
    $numm2++;
    echo "Static: " .$numm1 ."</br>";
    echo "Non-static: " .$numm2 ."</br>";
}

static_var();
static_var();

echo '<i style="color:red;font-size:34px;font-family:Arial-bold ;"><br><br><strong>PHP $ AND $$ VARIABLES</strong></i> ';
echo '<i style="color:blue;font-size:24px;font-family:calibri ;"><br>Example 1<br></i> ';

$xx = "cash";
$$xx = 500;
echo $xx."<br/>";
echo $$xx."<br/>";
echo $cash;
echo '<i style="color:blue;font-size:24px;font-family:calibri ;"><br><t>Example 2<br></i> ';
$name="Cat";
${$name}="Dog";
${${$name}}="Monkey";
echo $name. "<br>";
echo ${$name}. "<br>";
echo $Cat. "<br>";
echo ${${$name}}. "<br>";
echo $Dog. "<br>";
?>

</body>
</html>