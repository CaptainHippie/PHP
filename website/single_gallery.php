<html>
<head>
<title>Gallery</title>
</head>
<link rel="stylesheet" href="css/gallery.css">
<body style="background-image:url('resources/images/menubg.gif');
    background-size:cover">
<?php
session_start();
$con=mysqli_connect('localhost','root','','registration');
$query=mysqli_query($con,"SELECT * FROM fileinfo");
$size = mysqli_num_rows($query);
$image_files=array("jpg","png");
//Making window size dynamic
$x=596;
$x2=416;
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
<x class="title">FILES</x><br><br>
<div id="bg_box" style=<?php echo "height:".$x2."px";?>>
<form method="post" name="uploading" enctype="multipart/form-data" class="up_form"><br>
    <input type="file" name="files" id="select_file" class="files" 
        accept=".jpg,.png,.mp4,.mkv,.flv,.pdf">
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
while ($row = mysqli_fetch_array($query))
{
    $rec_path = $directory.$row['title'];
    $filetype=$row['type'];
    if (in_array($filetype,$image_files, TRUE))
    {
        echo "<img width='200' height='151' src='$rec_path'>&nbsp";  
    }
    elseif($filetype == '.pdf'){
        echo "<iframe width='196' height='151' src='$rec_path'></iframe>&nbsp";  
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
    $count=$count+1;
}
if(isset($_POST['upload']))
{
    $fullpath="";
    $sqlpath = $row['img_collect'];
    $fileName=$_FILES['files']['name'];
    $pathname=$_FILES['files']['tmp_name'];
    $ftype=pathinfo($fileName, PATHINFO_EXTENSION);
    if ($ftype == 'pdf'){
        $ftype = '.pdf';
    }
    $target_file = $directory.$fileName;
    move_uploaded_file($pathname,$target_file);

    mysqli_query($con, "INSERT INTO fileinfo(title,type) VALUES('$fileName','$ftype')");
    header("Location:single_gallery.php");
}
if(isset($_POST['delete']))
{
    mysqli_query($con, "TRUNCATE TABLE fileinfo");
    while ($row = mysqli_fetch_array($query))
    {
        $f_path = $directory.$row['title'];
        unlink($f_path);
    }
    header("Location:single_gallery.php");  
}
?>
</div></div></div>
</body></html>
