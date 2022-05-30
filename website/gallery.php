<html>
<head>
<title>Gallery</title>
</head>
<link rel="stylesheet" href="css/gallery.css">
<body style="background-image:url('resources/images/menubg.gif');
    background-size:cover">
<?php
session_start();
$uname = $_SESSION["username"];
$con=mysqli_connect('localhost','root','','registration');
$query=mysqli_query($con,"SELECT * FROM userdata WHERE username ='$uname'");
$row=mysqli_fetch_array($query);
$split = explode(",",$row['img_collect']);
$image_files=array("jpg","png");
//Making window size dynamic
$x=596;
$x2=416;
$size=count($split);
$incr=168;
for($j=5;$j<=$size;$j++)
{
  if($j%2 == 1)
  {
    $x=$x+$incr;
    $x2=$x2+$incr;
  }
}
?>

<div id="gallery" style=<?php echo "height:".$x."px";?>>
<br><br>
<x class="title">GALLERY</x><br><br>
<div id="bg_box" style=<?php echo "height:".$x2."px";?>>
<form method="post" name="uploading" enctype="multipart/form-data" class="up_form"><br>
    <input type="file" name="files[]" id="select_file" class="files" 
        accept=".jpg,.png,.mp4,.mkv,.flv" multiple>
    <label for="select_file" class="upload_label">SELECT FILES</label>&nbsp;
    <input type="submit" name="upload" value="UPLOAD" class="upload">
    <a href="user_home.php"><input type="button" name="back" value="BACK" class="back"></a>
</form>
<div class="del_btn"><form method="post" name="deleting"  class="delete_all">
    <input type="submit" name="delete" value="DELETE ALL" class="delete">
</form></div>
<div class="line1"></div>
<div class="images">

<?php
$directory= "uploads/";
$count=0;
foreach ($split as $img)
{
    if ($img != "")
    {
        $rec_path = $directory.$img;
        $filetype=pathinfo($rec_path, PATHINFO_EXTENSION);
        if (in_array($filetype,$image_files, TRUE))
        {
            echo "<img width='200' height='151' src='$rec_path'>&nbsp";  
        }
        else
        {
            echo "<video width='200' height='151' controls='controls'><source 
                src='$rec_path'></video>&nbsp";
        }
        if ($count >= 1)
        {
        echo "<br>";
        $count=0;
        continue;
        }
    }
$count=$count+1;
}
if(isset($_POST['upload']))
{
    $fullpath="";
    $sqlpath = $row['img_collect'];
    $fileNames=array_filter($_FILES['files']['name']);
    $pathnames=array_filter($_FILES['files']['tmp_name']);
    $num = count($fileNames);
    for ($i=0;$i<$num;$i++)
    {
        if(($fileNames[$i]) != end($fileNames))
        {
            $fullpath = $fullpath.$fileNames[$i].",";
        }
        else
        {
            $fullpath = $fullpath.$fileNames[$i];
        }
        $target_file = $directory.$fileNames[$i];
        move_uploaded_file($pathnames[$i],$target_file);
    }
    $newpath = $sqlpath;
    if ($fullpath != '')
    {
        if (($sqlpath == ''))
        {
        $newpath = $fullpath;
        }
        else
        {
        $newpath = $newpath.",".$fullpath;
        }
    }
    mysqli_query($con, "UPDATE userdata SET img_collect='$newpath' WHERE username='$uname'");
    header("Location:gallery.php");
}
if(isset($_POST['delete']))
{
    mysqli_query($con, "UPDATE userdata SET img_collect='' WHERE username='$uname'");
    foreach ($split as $img)
    {
        $f_path = $directory.$img;
        unlink($f_path);
    }
    header("Location:gallery.php");  
}
?>
</div></div></div>
</body></html>
