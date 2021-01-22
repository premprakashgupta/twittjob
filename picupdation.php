<?php
session_start();
ob_start();
include "db_con.php";
include "index.php";
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
//file close
extract($_SESSION);
if(in_array($filecheck,$fileextstored))
{        $destinationfile='upload/'.$filename;
    move_uploaded_file($filetemp,$destinationfile);
    $query="update information set pic='$destinationfile  ' where email='$email'";
$status=mysqli_query($con,$query);
    header('location:http://localhost/ourweb/home.php');
 $_SESSION['image']=$destinationfile;

// echo "update";
}
    else
    {
//        echo "no";
         header('location:http://localhost/ourweb/login.php');
    }



?>