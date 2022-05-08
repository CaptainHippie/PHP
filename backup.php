
<html>
<head>
  <title>Data Types</title>
</head>
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTufgdidoSi6BsOsHJXwMOTHPAEyaWBZZv5UQ&usqp=CAU">

<?php 
echo "<f style='font-family:calibri;'><l style='color:red;font-size:34px;margin-left:50px ;'><strong>PHP DATA TYPES</strong><br></l>";  
echo "<l style='color:green;font-size:29px;margin-left:90px ;'>SCALAR TYPES<br></l>"; 
echo "<i style='color:blue;font-size:22px;margin-left:110px ;'>Booleans<br></i>"; 

$condition = True;
echo "<i style='margin-left:130px ;'>Flag : $condition<br></i>";
if ($condition == True)  
echo "<i style='margin-left:130px ;'>Printing TRUE<br></i>";  
else
echo "<i style='margin-left:130px ;'>Printing FALSE<br></i>";  


echo "<i style='color:blue;font-size:22px;margin-left:110px ;'>Integers<br></i>";
$dec1 = "34";  
$oct1 = "0243";  
$hexa1 = "0x45";  
echo "<i style='margin-left:130px ;'>Decimal number : ", (int)$dec1, "</br></i>";  
echo "<i style='margin-left:130px ;'>Decimal Equivalent of Octal $oct1 is : ", (octdec($oct1)), "</br></i>"; 
echo "<i style='margin-left:130px ;'>Decimal Equivalent of hexadecimal $hexa1 is : ", (hexdec($hexa1)), "</br></i>";  


echo "<i style='color:blue;font-size:22px;margin-left:110px ;'>Floating Points<br></i>";
$n1 = 19.34;  
$n2 = 54.472;  
$sum = $n1 + $n2;  
echo "<i style='margin-left:130px ;'>Sum of floating numbers $n1 and $n2 are : " .$sum,"<br></i>";  


echo "<i style='color:blue;font-size:22px;margin-left:110px ;'>Strings<br></i>";
$name = "Neeraj";  
echo "<i style='margin-left:130px ;'>Echo using double quotes : Hello $name <br></i>";  
echo '<i style="margin-left:130px ;">Echo using single quote : Hello $name <br><br></i>';  


echo "<l style='color:green;font-size:29px;margin-left:90px ;'>COMPOUND TYPES<br></l>"; 
echo "<i style='color:blue;font-size:22px;margin-left:110px ;'>Arrays<br></i>";
$players = array ("Lewandowksi", "Muller", "Neuer");  
echo "<i style='margin-left:130px ;'>VAR_DUMP : ",var_dump($players),"<br></i>";  
echo "<i style='margin-left:130px ;'>Player 1 : $players[0] <br></i>";  
echo "<i style='margin-left:130px ;'>Player 2 : $players[1] <br></i>";  
echo "<i style='margin-left:130px ;'>Player 3 : $players[2] <br></i>";  


echo "<i style='color:blue;font-size:22px;margin-left:110px ;'>Objects<br></i>";
 
class player {  
    function name() {  
         $player_name = "Robert Lewandowski";  
         echo "<i style='margin-left:160px ;'>Player name : $player_name <br></i>";  
       }  
       function number() {  
        $kit_number = 9;  
        echo "<i style='margin-left:160px ;'>Kit Number : $kit_number <br></i>";  
      } 
      function position() {  
        $position = "CF";  
        echo "<i style='margin-left:160px ;'>Position : $position <br></i>";  
      } 
}  

class player2 {  
  function name() {  
       $player_name = "Alphonso Davies";  
       echo "<i style='margin-left:160px ;'>Player name : $player_name <br></i>";  
     }  
     function number() {  
      $kit_number = 19;  
      echo "<i style='margin-left:160px ;'>Kit Number : $kit_number <br></i>";  
    } 
    function position() {  
      $position = "LB";  
      echo "<i style='margin-left:160px ;'>Position : $position <br></i>";  
    } 
} 
echo "<i style='margin-left:130px ;'>OBJECT 1 :<br></i>"; 
$obj = new player();  
$obj -> name();  
$obj -> number();  
$obj -> position();  
echo "<i style='margin-left:130px ;'>OBJECT 2 :<br></i>";  
$obj2 = new player2();  
$obj2 -> name();  
$obj2 -> number();  
$obj2 -> position();  


echo "<i style='color:blue;font-size:22px;margin-left:110px ;'>PHP Resources<br></i>";

echo "<i style='color:blue;font-size:22px;margin-left:110px ;'>PHP Null<br></i>";
$nl = NULL;  
echo $nl;
?>


</body>
</html>