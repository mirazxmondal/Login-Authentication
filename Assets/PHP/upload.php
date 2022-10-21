<?php
require 'connect.php';
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$pnumbermail=$_POST['email']; 
$password=$_POST['password'];
$pnumber=$_POST['pnumber'];
// to receive the photo or file $_FILES is used 
$pic=$_FILES['photo']['name'];
$url="../Upload/";
$furl=$url.$pic;
// know the file type
$type=pathinfo($furl,PATHINFO_EXTENSION);
if ($type=="jpeg" || $type=="jpg" || $type=="png")
{
// to place the pictures on server
move_uploaded_file($_FILES['photo']['tmp_name'],$furl);

$sql="insert into login(fname,lname,email,pwd,pnumber,furl) values('$firstname','$lastname','$pnumbermail','$password','$pnumber','$furl')";
$x=mysqli_query($conn,$sql);

if($x==1)
{
    header("location:../../index.html?msg=Done");
}
else
{
    header("location:../../index.html?msg=NotDone");
}
}
else
{
    header("location:../../index.html?msg=type-not-matched");
}
?>
