<?php
//session_start();
ob_start();
include "db_con.php";
include "index.php";
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$cpassword=$_POST['cpassword'];
$address=$_POST['address'];
$files=$_FILES['file'];
//for file uploading
//print_r($files);
//print_r($username);
$filename=$files['name'];
$fileerror=$files['error'];
$filetemp=$files['tmp_name'];
$fileext= explode('.',$filename);
$filecheck= strtolower(end($fileext));
$fileextstored = array('png','jpg','jpeg');
//for file upload
$emailquery = "select * from information where email = '$email'";
$query=mysqli_query($con,$emailquery);
$num = mysqli_num_rows($query);
//$bcryptpass = password_hash($password,PASSWORD_BCRYPT);

$token = bin2hex(random_bytes(15));
if($num<1){
    if(in_array($filecheck,$fileextstored))
{        $destinationfile='upload/'.$filename;
    move_uploaded_file($filetemp,$destinationfile);
    $query="INSERT INTO information (username,email,password,cpassword,address,gender,token,status,pic) values ('$username','$email','$password','$cpassword','$address','$gender','$token','inactive','$destinationfile')";
$status=mysqli_query($con,$query);
    header('location:https://twittjob.herokuapp.com/login.php');
}
    else
    {
         header('location:https://twittjob.herokuapp.com/index.php');
    }
}
else
{
    header('location:https://twittjob.herokuapp.com/index.php');
}
?>
