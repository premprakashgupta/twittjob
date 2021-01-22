<?php
session_start();
ob_start();
if(!isset($_SESSION['username'])){
    header('location:http://localhost/ourweb/error.php');
}
include"db_con.php";
extract($_SESSION);
$q="select id,username,address,gender,pic from information where email='$email'";
$result=mysqli_query($con,$q);
       $rows=mysqli_fetch_array($result);
$qq="select jobname,company,experience,package,location,skill,description from job where email='$email'";
$resultt=mysqli_query($con,$qq);

     
$numm=mysqli_num_rows($resultt);





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>view data</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="../fontawesome-free-5.14.0-web/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            width: 100vw;
            height: 100vh;
        }
/*
        .container{
            width: 80%;
            height: 80%;
            box-shadow: 1px 1px 5px black;
            margin: auto;
            position: relative;
        }
        .row{
            width: 50%;
            height: 100%;
            background-color: #e3e3e3;
                        box-shadow: 1px 1px 5px black;
            margin: auto;
        }
*/
        .cont{
             background-image: linear-gradient(to right,#6db9ef,#7ce08a) !important;
        }
        .row ul{
            width: 100%;
            height: 100%;
/*            margin: 10px;*/
/*            padding: 20px;*/
           text-align: center;
        }
        li{
            width: 100%;
            list-style: none;
            font-size: 15px;
            height: 10%
            
        }
        li:nth-child(1){
            height: 40%;
        }
        .pic{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: block;
            margin: auto;
            margin-bottom: 20px;
            padding-top: 20px;
        }
        span{
            width: 100px;
            height: 30px;
            display: inline-block;
            font-weight: bold;
            
        }
        p{
            width: 120px;;
            height: 20%;
            display: inline-block;
                      font-family: 'Poppins', sans-serif;
        }
        .imgli{
            position: relative;
        }
/*
        .circle{
            width: 150px;
            height: 150px;
            background-color: red;
            position: absolute;
            top: 0;
            left: 38%;
            transform: translateX(-50%);
            border-bottom: 4px red solid;
            border-right: 2px red solid;
            border-radius: 50%;
            animation: rotate 1s linear infinite;
        }
        @keyframes rotate {
            0%{
                transform: rotateZ(0deg);
            }
            100%{
                transform: rotateZ(360deg);
            }
           
        }
*/
/*
         h3{
                position: absolute;
                top: 100px;
                left: 50%;
             transform: translateX(-50%);
            }
*/
             h3{
          width: 50%;
          height: auto;
          margin: auto;
          margin-top: 50px;
          margin-bottom: 20px;
          font-size: 40px;
          color: #fff;
          text-shadow: 1px 1px 5px black;
      }
            
            
    </style>
</head>
<body>
    <section class="header">
        <div class="menu-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#" style="font-family: cursive;">twittJob <i class="fab fa-twitter" style="color: skyblue;"></i><i class="fab fa-twitter" style="color: #7ce08a;"></i></a></nav></div></section> 
   <div class="container my-2 cont">
     
      <div class="row">
           <h3><?php echo "Hello,  ". $_SESSION['email'];?></h3>
            <ul>
                <li class="imgli"><img src="<?php echo $rows['pic'];?>" class="pic" alt="">
                </li>
                 
                 <li><span>Name : </span> <p><?php echo $rows['username'];?></p> </li>
                <li><span>id : </span> <p><?php echo $rows['id'];?></p> </li>
                <li><span>Gender : </span> <p><?php echo $rows['gender'];?></p></li>
                <li><span>Address: </span> <p><?php echo $rows['address'];?></p></li>
                
            </ul>
      </div>
       
   </div>
    <div class="container">
        <table class="table table-striped my-2">
         <thead class="thead-dark">
              <tr>
             <th>jobname</th>
               <th>experience</th>
                 <th>salary</th>
                   <th>skill</th>
                   <th>description</th>
          </tr>
         </thead>
         
           <?php
                for($i=1;$i<=$numm;$i++)
                {
                      $rowss=mysqli_fetch_array($resultt);
    ?>
           <tr>
               
               <td> <?php echo $rowss['jobname'];?> </td>
                 
                   <td> <?php echo $rowss['experience'];?> </td>
                  
                     <td> <?php echo $rowss['package'];?> </td>
                    
                       <td> <?php echo $rowss['skill'];?> </td>
                       
                        <td> <?php echo $rowss['description'];?> </td>
           </tr>
           <?php
                }
           ?>
       </table>
   </div>
   
   
</body>
</html>