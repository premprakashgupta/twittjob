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






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>view data</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <style>
        body{
            width: 100vw;
            height: 100vh;
        }
        .container{
            width: 80%;
            height: 80%;
            box-shadow: 1px 1px 5px black;
            margin: auto;
            position: relative;
             background-image: linear-gradient(to right,#6db9ef,#7ce08a) !important;
        }
        .row{
            width: 50%;
            height: 100%;
            background-color: #e3e3e3;
                        box-shadow: 1px 1px 5px black;
            margin: auto;
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
            width: 60px;
            height: 30px;
            display: inline-block;
            font-weight: bold;
            
        }
        p{
            width: auto;
            height: 20%;
            display: inline-block;
                      font-family: 'Poppins', sans-serif;
        }
        .imgli{
            position: relative;
        }
        .circle{
            width: 150px;
            height: 150px;
/*            background-color: red;*/
            position: absolute;
            top: 0;
            left: 38%;
            transform: translateX(-50%);
            border-bottom: 4px red solid;
            border-right: 2px red solid;
            border-radius: 50%;
/*            animation: rotate 1s linear infinite;*/
        }
         h3{
                position: absolute;
                top: 100px;
                left: 50%;
             transform: translateX(-50%);
            }
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
   <div class="container">
     
      <div class="row">
            <ul>
                <li class="imgli"><img src="<?php echo $rows['pic'];?>" class="pic" alt="">
                </li>
                 <h3><?php echo "Hello,  ". $_SESSION['email'];?></h3>
                 <form action="picupdation.php" method="post" onsubmit="return validation()" enctype="multipart/form-data" >
                     <input type="file" name="file" id="file">
                     <input type="submit" name="submit" value="update">
                 </form>
                
            </ul>
      </div>
       
   </div>
   <script>
    function validation(){
        var file=document.getElementById('file').value;
        if(file=="")
            {
                return false;
            }
    }
    
    
    </script>
   
   
</body>
</html>