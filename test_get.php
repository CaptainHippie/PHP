<html>
<body>



<?php
  // collect value of input field
  $name = $_GET['name'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
?>

</body>
</html>