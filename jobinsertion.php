<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:http://localhost/ourweb/error.php');
}

ob_start();
include "db_con.php";
include "index.php";
extract($_SESSION);
$jobname=$_POST['jobname'];
$company=$_POST['company'];
$experience=$_POST['experience'];
$type=$_POST['type'];
$intern=$_POST['intern'];
$skill=$_POST['skill'];
$skill1=$_POST['skill1'];
$skill2=$_POST['skill2'];
$skill3=$_POST['skill3'];
$salary=$_POST['salary'];
$location=$_POST['location'];
$description=$_POST['description'];

   
    $query="INSERT INTO job (email,jobname,company,experience,package,location,skill,skill1,skill2,skill3,description,type,intern) values ('$email','$jobname','$company','$experience','$salary','$location','$skill','$skill1','$skill2','$skill3','$description','$type','$intern')";
$status=mysqli_query($con,$query);
if($status)
{
    header("location:http://localhost/ourweb/home.php");
}
else
{
    header("location:http://localhost/ourweb/jobinsert.php");
}
?>