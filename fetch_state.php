<?php
require("configure.php");
$state_name = ($_REQUEST["state_name"] <> "") ? trim($_REQUEST["state_name"]) 
: "";
if ($state_name <> "") {
$sql = "SELECT * FROM district WHERE state_name = :cname ORDER BY 
dis_name";
try {
$stmt = $DB->prepare($sql);
$stmt->bindValue(":cname", trim($state_name));
$stmt->execute();
$results = $stmt->fetchAll();
} catch (Exception $ex) {
echo($ex->getMessage());
}
if (count($results) > 0) {
?>
<br>
<label> <b>District: </b> </label>
<select name="dis_name" onchange="showCity(this);" id="dis_name">
<option value="">Please Select</option>
<?php foreach ($results as $rs) { ?>
<option value="<?php echo $rs["dis_name"]; ?>"><?php echo $rs["dis_name"]; 
?></option>
<?php } ?>
</select>
<?php
}
}
?>