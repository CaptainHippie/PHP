<html>
<body>

<?php
session_start();
echo $_SESSION["edit_user"];
?>
<br>
<form method="post" id='cmds'>
<br><br>
<a href="reg_view.php"><input type="button" name="back" value="BACK" class="back"></a>

</form>

</body>
</html>