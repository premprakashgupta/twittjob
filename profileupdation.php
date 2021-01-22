<?php
 session_start();
 ob_start();
extract($_SESSION);
$username1=$_POST['username'];
$gender1=$_POST['gender'];
$address1=$_POST['address'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'ourweb');
if(isset($email))
{
    
     $update="update information set username='$username1',gender='$gender1',address='$address1'  where email='$email'";
   $updated=mysqli_query($con,$update);
    if($updated)
    {
        $_SESSION['username']=$username1;
            echo "updated";
         header('location:http://localhost/ourweb/home.php');
    }
else
{
    echo "not";
}
}
else{
    header('location:http://localhost/ourweb/profile.php');
    
}
 

?>