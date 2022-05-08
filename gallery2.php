<html>
<head>
<title>Gallery</title>
</head>
<link rel="stylesheet" href="css/gallery.css">
<body style="background-image:url('resources/images/menubg1024x768.gif');
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

<div id="gallery" style="height:1200px">
<br><br>
<x class="title">GALLERY</x><br><br>
<div id="bg_box" style="height:1000">
<form method="post" name="uploading" enctype="multipart/form-data" class="up_form"><br>
    <input type="file" name="files[]" id="select_file" class="files" accept=".jpg,.png,.mp4,.mkv,.flv" multiple>
    <label for="select_file" class="upload_label">SELECT FILES</label>&nbsp;
    <input type="submit" name="upload" value="UPLOAD" class="upload">
    <a href="user_home.php"><input type="button" name="back" value="BACK" class="back"></a>
</form>
<div class="del_btn"><form method="post" name="deleting"  class="delete_all">
    <input type="submit" name="delete" value="DELETE ALL" class="delete"></div>
</form>
<div class="line1"></div>
<div class="images">

<?php
$directory= "uploads/";
echo "<form method='post'>";
$filenames_alone = array();
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
            echo "<video width='200' height='151' controls='controls'><source src='$rec_path'></video>&nbsp";
        }
        $img_name_no_ext = substr($img,0,strrpos($img,"."));
        array_push($filenames_alone,$img_name_no_ext);
        echo "<input type='submit' value='DELETE' name='$img_name_no_ext'>";
        echo "<br>";
    }
}
echo "</form>";
foreach ($filenames_alone as $img2)
{
    if (isset($_POST[$img2]))
    {
        $_SESSION["path"] = $img2;
        header("Location:session_read.php");
    }
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
    header("Location:gallery2.php");
}
if(isset($_POST['delete']))
{
    mysqli_query($con, "UPDATE userdata SET img_collect='' WHERE username='$uname'");
    foreach ($split as $img)
    {
        $f_path = $directory.$img;
        unlink($f_path);
    }
    header("Location:gallery2.php");
}
?>
</div></div></div>
</body></html>