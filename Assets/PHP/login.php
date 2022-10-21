<?php
require 'connect1.php';
$email=$_GET['email'];
$password=$_GET['password'];
$sql="select * from login where email='$email' and pwd='$password'";
$row=mysqli_query($conn,$sql); 
$session=mysqli_fetch_array($row);
// Creating a session name and storing in x variable, session is global variable
$_SESSION['FIEM']=$session;
// Array query(Line7) is running or not is checked by this query
if(mysqli_num_rows($row)>0)
{
    header("location:welcome.php?msg=done");
}
else
{
    header("location:../../index.html?msg=wrongemailorpwd");
}
?>