<?php
 session_start();
 ob_start();

$email=$_POST['email'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'ourweb');
$q="Select * from information where email='$email' && password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
    $row=mysqli_fetch_array($result);
   $_SESSION['username']=$row['username'];
    $_SESSION['image']=$row['pic'];
    $_SESSION['email']=$email;
    $_SESSION['msg']="";
    
   
    header('location:http://localhost/ourweb/home.php');

}
else
{
     header('location:http://localhost/ourweb/login.php');
} 

?>