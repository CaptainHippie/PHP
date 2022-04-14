<?php

$conn = mysqli_connect('localhost','root','','snk1');
$sql = mysqli_query($conn,"SELECT * FROM base");
?>

<table>
<thead>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Address</th>
</tr>
</thead>

<?php
    while($row=mysqli_fetch_array($sql))
    {
    echo "<tr>";
    echo "<td>".$row['ID']."</td>";
    echo "<td>".$row['Name']."</td>";
    echo "<td>".$row['Place']."</td>";
    echo "<td><a href='edit.php?edit='".$row['ID'].">Edit</a></td>";
    echo "<td><a href='delete.php?del='".$row['ID'].">Delete</a></td>";
    echo "</tr>";
    }
?>
</table>