<?php
require("configure.php");
?>
<!doctype html>
<html lang="en">
<head>
<style>
select {
padding:3px;
border-radius:5px;
background: #fff;
color:#000;
border:1px solid #d3d3d3 ;
outline:none;
display: inline-block;
width:500px;
height:40px;
cursor:pointer;
text-align:left;
font:arial;
font-size: 14px;
}
</style>
</head>
<body>
<!-- Page Content -->
<div id="content" class="p-4 p-md-5 pt-5">
</head>
<body>
<style>
.card {
background-color:white;
box-shadow: 0 4px 8px 0 rgba(0,0,0,9);
transition: 0.3s;
width: 100%;
text-align: left;
}
.card:hover {
box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.container {
padding: 4px 16px;
}
.card1 {
background-color:#2f89fc;
box-shadow: 0 4px 8px 0 rgba(0,0,0,9);
transition: 0.3s;
width: 100%;
text-align: left;
}
.card:hover {
box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.container {
padding: 4px 16px;
}
</style>
</head>
<body>
<br>
<div class="card1">
<br>
<h6><p style="color:#FFF";>&nbsp;&nbsp;Onchange</p></h6>
<div class="card">
<div class="container">
<form class="form horizontal" method="post">
<div id="body">
<div class="height20"></div>
<table style="margin:0 auto;width:50%" >
<tr>
<td height="50">
<?php
$sql = "SELECT * FROM state ORDER BY state_name";
try {
$stmt = $DB->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();
} catch (Exception $ex) {
echo($ex->getMessage());
}
?>
<label><b>State:</b></label>
<select name="state_name" onChange="showState(this);" id="state_name">
<option value="">Please Select</option>
<?php foreach ($results as $rs) { ?>
<option value="<?php echo $rs["state_name"]; ?>"><?php echo $rs["state_name"]; 
?></option>
<?php } ?>
</select>
</td>
<td height="50">
<?php
$sql = "SELECT * FROM state ORDER BY dis";
try {
$stmt = $DB->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();
} catch (Exception $ex) {
echo($ex->getMessage());
}
?>
<label><b>District:</b></label>
<select name="state_name" onChange="showState(this);" id="state_name">
<option value="">Please Select</option>
<?php foreach ($results as $rs) { ?>
<option value="<?php echo $rs["dis"]; ?>"><?php echo $rs["dis"]; ?></option>
<?php } ?>
</select>
</td>
</tr>
<tr>
<td height="50"><div id="output1"></div> </td>
</tr>
</table>
<script src="jquery-1.9.0.min.js">
function showState(sel) {
var state_name = sel.options[sel.selectedIndex].value;
$("#output1").html("");
$("#output2").html("");
if (state_name.length > 0) {
$.ajax({
type: "POST",
url: "fetch_state.php",
data: "state_name=" + state_name,
cache: false,
beforeSend: function() {
$('#output1').html('<img src="loader.gif" alt="" width="24" height="24">');
},
success: function(html) {
$("#output1").html(html);
}
});
}
}
</script>
</form>
</div>
</div>
</div>
</div>
</body>
</html>