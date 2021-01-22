<?php
 session_start();
 ob_start();
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'ourweb');
extract($_SESSION);
$q="Select * from information where email='$email'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
echo $num;

if($num)
{
    if($password=== $cpassword){
         $update="update information set password='$password',cpassword='$cpassword'  where email='$email'";
   $updated=mysqli_query($con,$update);
//    if($updated)
//    {
//            echo "updated";
//    }

    header('location:http://localhost/ourweb/home.php');
    }
    else {
         $_SESSION['msg']="password not matched";
         header('location:http://localhost/ourweb/forgate.php');
    }
 

}
else
{
     header('location:http://localhost/ourweb/home.php');
} 

?>