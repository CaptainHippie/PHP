<html>
<head>
<title>Registration form</title>
</head>

<link rel="stylesheet" href="css/reg_view.css">
<body style="background-image:url('resources/images/menubg.gif');
    background-size:cover">

<div id="body"><br><br><br><br><br><br>
<h1 class="heading">REGISTERED MEMBERS</h1><br>

<?php
session_start();
$con=mysqli_connect('localhost','root','','registration');
$query=mysqli_query($con,"SELECT *FROM userdata");
$row_count = mysqli_num_rows($query);
if ($row_count>0)
{
  echo "<table id='database'>";
  echo "<thead><tr>";
  echo "<th>NAME</th><th>GENDER</th><th>AGE</th><th>ADDRESS</th><th>PHONE</th>
      <th>EMAIL</th><th>USERNAME</th><th>PASSWORD</th><th>IMAGE LINK</th>";
  echo "</tr></thead>";
  echo "<form method='post'";
  $all_users = array();
  while($row=mysqli_fetch_array($query))
  {
    $user=$row['username'];
    echo "<tr>";
    echo "<td>".$row['f_name']." ".$row['s_name']."</td>";
    echo "<td>".$row['gender']."</td>";
    echo "<td>".$row['age']."</td>";
    echo "<td>".$row['addr'].", ".$row['city'].", ".$row['stat']."</td>";
    echo "<td>".$row['phone']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>$user</td>";
    echo "<td>".$row['pass']."</td>";
    echo "<td>".$row['imglink']."</td>";
    echo "<td><input type='submit' value='EDIT' name='$user'></td>";
    echo "</tr>";
    array_push($all_users,$user);
  }
  echo "</form></table>";
}
else
{
  echo "<br><br><br><x class = 'empty'>NO DATA</x>";
}

if (isset($_POST['clear']))
{
  mysqli_query($con,"TRUNCATE TABLE userdata");
  header("Refresh:0");
}
foreach ($all_users as $cur_user)
{
  if (isset($_POST[$cur_user]))
  {
    $_SESSION["edit_user"]=$cur_user;
    header("Location:edit.php");
  }
}
?>

<form method="post" id='cmds'>
<br><br>
<input type="submit" name="clear" value="CLEAR DATA" class="clear"><br><br>
<a href="reg_form.php"><input type="button" name="back" value="BACK" class="back"></a>

</form>
</div>

</body>
</html>
