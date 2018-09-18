<?php header("location:index.php");?>
<?php
include("db.php");
$title=$_POST["title"];
$txt=$_POST["txt"];

$sql="INSERT board (title,txt,time)
values ('$title','$txt',now())";
mysqli_query($dbConnection,$sql);
?>