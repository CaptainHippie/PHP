<?php
/*$word = "neeraj.jpg,hello.png,welcome.mp4";
$split = explode(",",$word);

foreach ($split as $w)
{
    echo $w."<br>";
}
*/
$count=0;
for ($i=0;$i<=8;$i++)
{
echo "hello";
    if ($count == 1)
    {
    $count=0;
    echo "<br>hi";
    continue;
    }
    $count=$count+1;
}
?>