<html>
<?php
$con=mysqli_connect('localhost','root','','idk');

//$con = mysqli_connect('127.0.1.1','root','') or die("ERROR");
$file = "jsondata.json";
$data = file_get_contents($file);
$array = json_decode($data, true);
foreach($array as $row){

$end_year = $row["end_year"];
$intensity = $row["intensity"];
$sector = $row["sector"];
$topic = $row["topic"];
$insight = $row["insight"];
$urls = $row["url"];
$region = $row["region"];
$start_year = $row["start_year"];
$impact = $row["impact"];
$added = $row["added"];
$published = $row["published"];
$country = $row["country"];
$relevance = $row["relevance"];
$pestle = $row["pestle"];
$source = $row["source"];
$title = $row["title"];
$likelihood = $row["likelihood"];


    //$sql = "INSERT INTO main_data(end_year,intensity,sector,topic,insight,urls,region,start_year,impact,added,published,country,relevance,pestle,source,title,likelihood) VALUES('".$row["end_year"]."','".$row["intensity"]."','".$row["sector"]."','".$row["topic"]."','".$row["insight"]."','".$row["url"]."','".$row["region"]."','".$row["start_year"]."','".$row["impact"]."','".$row["added"]."','".$row["published"]."','".$row["country"]."','".$row["relevance"]."','".$row["pestle"]."','".$row["source"]."','".$row["title"]."','".$row["likelihood"]."')";

    $sql = "INSERT INTO main_data(end_year,intensity,sector,topic,insight,urls,region,start_year,impact,added,published,country,relevance,pestle,source,title,likelihood) VALUES('$end_year','$intensity','$sector','$topic','$insight','$url','$region','$start_year','$impact','$added','$published','$country','$relevance','$pestle','$source','$title','$likelihood')";

    
    $entry = mysqli_query($con, $sql);
    if ($entry){
        echo "DATA ENTERED";
    }

    //echo $row["end_year"]."','".$row["intensity"]."','".$row["sector"]."','".$row["topic"]."','".$row["insight"]."','".$row["url"]."','".$row["region"]."','".$row["start_year"]."','".$row["impact"]."','".$row["added"]."','".$row["published"]."','".$row["country"]."','".$row["relevance"]."','".$row["pestle"]."','".$row["source"]."','".$row["title"]."','".$row["likelihood"];
    //echo "<br><br>";
}
?>

</html>