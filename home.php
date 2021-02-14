<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:https://twittjob.herokuapp.com/error.php');
}

if(isset($_POST))

?>
<?php
    
    include"db_con.php";
//extract($_SESSION);
$q="select jobname,company,experience,package,location,skill,skill1,skill2,skill3,description from job";
$result=mysqli_query($con,$q);

      
$num=mysqli_num_rows($result);





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>job-website | Here is for you</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="../fontawesome-free-5.14.0-web/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .profile{
            position: relative;
        }
        .profile ul{
            height: auto;
            width: 180px;
            background-color: #fff;
            position: absolute;
            right: 0;
            top: 70px;
            padding: 10px;
            overflow-x: hidden;
             z-index: 9999;
            display: none;
            transition: .5s all ease-in-out;
            box-shadow: 1px 1px 5px black;
        }
        .profile ul span{
               color: red;
    display: block;
    width: 20px;
    height: 20px;
    font-size: 30px;
    cursor: pointer;
    transform: rotateZ(45deg);
    position: absolute;
    top: 7px;
    left: 13px;
    text-shadow: 1px 1px 1px black;
    font-weight: bold;
    text-align: center;
        }
        .profile ul li{
            width: 100%;
            list-style: none;
            padding: 10px;
            text-align: left;
            font-size: 15px;
            font-weight: bold;
           
        }
        .profile ul li img{
            display: block;
            margin: auto;
            border-radius: 50%;
            height: 50px;
        }
        .profile ul li:nth-child(2){
            height: 100px;
           
           
        }
        .profile ul li:nth-child(3){
            height: 50px;
             border-bottom: 2px #555 solid;

        }
                .profile ul li:nth-child(4){
            height: 50px;
                    border-bottom: 2px #555 solid;
        }
          .profile ul li:nth-child(5){
            height: 50px;
                    border-bottom: 2px #555 solid;
        }
          .profile ul li:nth-child(6){
            height: 50px;
                    border-bottom: 2px #555 solid;
        }
        #submit{
/*            display: none;*/
        }
        @media (max-width: 770px){
             .profile ul{
            position: absolute;
            left: 10px;
            top: 0px;
                 box-shadow: 1px 1px 5px black;
                 
           
        }
        }
    
    </style>
</head>
<body onload="myfun()">
 
     <section class="header">
       <div class="preloader" id="preloader">
        <div class="center">
            <div class="center-div"></div>
            <h1>Loading</h1>
        </div>
        
    </div>
        <div class="menu-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#" style="font-family: cursive;">twittJob <i class="fab fa-twitter" style="color: skyblue;"></i><i class="fab fa-twitter" style="color: #7ce08a;"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="alljobview.php">All job <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Companies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="government.php">Government job</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="private.php">walk-IN</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="intern.php">internship</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">notification</a>
      </li>
       <li class="nav-item profile">
        <a class="nav-link" href="#"><img src="image/Picture1.png" alt="" width="40px" onclick="showmenu()" ></a>
        <ul id="menu">
           <span onclick="closemenu()">+</span>
            <li><a href="https://twittjob.herokuapp.com/picupdate.php"><img src="<?php echo $_SESSION['image'];?>" alt="" width="50px"></a></li>
            <li> <a href="https://twittjob.herokuapp.com/view.php"> <?php echo $_SESSION['username'];?></a> </li>
            <li><a href="https://twittjob.herokuapp.com/forgate.php">Forget password</a></li>
            <li><a href="https://twittjob.herokuapp.com/profile.php">Update profile</a></li>
            <li><a href="https://twittjob.herokuapp.com/jobinsert.php">Job Insert</a></li>
            <li><a href="https://twittjob.herokuapp.com/logout.php">Log out</a></li>
        </ul>
      </li>
    </ul>
    
  </div>
</nav>
        </div>
        <div class="row interface">
            <div class="interface-image col-sm-12 col-md-6 col-lg-6"><img src="image/pic.png" alt="" class="img-fluid">
        </div>
        <div class="right-text col-sm-12 col-md-6 col-lg-6 text-center"><p1>Get job</p1><p2>instantly</p2> <br>
        <p3>twittJob make your path easy.</p3></div>
        </div>
        
        <div class="search-job">
            <form class="form-inline" action="">
 
  <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Job-keyword" id="email">
 
  <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Company" id="pwd">
  <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Location" id="pwd">
 
  <button type="submit" class="btn btn-primary mb-2">Find job</button>
</form>
        </div> 
     </section>
  <section id="recruitment">
      <div class="container text-center text-uppercase">
          <h3>Top recruiters</h3>
      
      <div class="company-image">
          <img src="image/1200px-Cisco_logo.svg.png" alt="">
          <img src="image/1200px-Infosys_logo.svg.png" alt="">
          <img src="image/Amazon_logo_plain.svg_.png" alt="">
          <img src="image/BYJUS_NEW_LOGO.png" alt="">
          <img src="image/Dell-Logo.png" alt="">
      </div>
      <div class="company-image">
          <img src="image/microsoft.png" alt="">
          <img src="image/Netflix_logo.png" alt="">
          <img src="image/OIP%20(1).jpg" alt="">
          <img src="image/OIP.jpg" alt="">
          <img src="image/oracle_logo1600.png" alt="">
      </div>
      </div>
      
      
  </section>
<div id="jobs">
    <div class="container">
        <h5>RECENT UPDATES</h5>
        <?php
                for($i=$num-3;$i<=$num;$i++)
                {
                     $rows=mysqli_fetch_array($result);
    ?>
       
        <div class="company-details">
           
            <div class="job-update" id="mytable" >
                <h4> <b><?php echo $rows['jobname'];?></b></h4>
                <p><?php echo $rows['company'];?></p>
                <i class="fa fa-briefcase"></i> <span><?php echo $rows['experience']." years";?></span> <br>
                 <i class="fa fa-inr"></i> <span><?php echo $rows['package']." lacs p. a.";?></span> <br>
                 <div class="location"> <i class="fa fa-map-marker"></i> <span><?php echo $rows['location'];?></span></div> <br>
                  <p1>Skill  <i class="fa fa-angle-double-right"></i> <small><?php echo $rows['skill'];?></small>
                  <small><?php echo $rows['skill1'];?></small> <small><?php echo $rows['skill2'];?></small> <small><?php echo $rows['skill3'];?></small></p1> <br>
                  <p1>discription <i class="fa fa-angle-double-right"></i> <?php echo $rows['description'];?> <a href="#">Read more</a></p1>
            </div>
            <div class="apply-btn">
                <button type="button" class="btn btn-primary">Apply</button>
            </div>
        </div>
        <?php
                }
    ?>
<!--
        <div class="company-details">
            <div class="job-update">
                <h4> <b>Seasoned senoir python developer (fresher)</b></h4>
                <p>XYZ Solution Pvt Ltd</p>
                <i class="fa fa-briefcase"></i> <span>0-1 years</span> <br>
                 <i class="fa fa-inr"></i> <span>3.50 - 4.00 lacs p. a.</span> <br>
                  <i class="fa fa-map-marker"></i> <span>baglore</span>
                  <p>Skill  <i class="fa fa-angle-double-right"></i> <small>Java</small>
                  <small>python</small> <small>HTML,CSS</small> <small>.Net</small></p>
                  <p>discription <i class="fa fa-angle-double-right"></i> for any website development please contact me <a href="#">Read more</a></p>
            </div>
            <div class="apply-btn">
                <button type="button" class="btn btn-primary">Apply</button>
            </div>
        </div>
-->
<!--
        <div class="company-details">
            <div class="job-update">
                <h4> <b>Seasoned senoir python developer (fresher)</b></h4>
                <p>XYZ Solution Pvt Ltd</p>
                <i class="fa fa-briefcase"></i> <span>0-1 years</span> <br>
                 <i class="fa fa-inr"></i> <span>3.50 - 4.00 lacs p. a.</span> <br>
                  <i class="fa fa-map-marker"></i> <span>baglore</span>
                  <p>Skill  <i class="fa fa-angle-double-right"></i> <small>Java</small>
                  <small>python</small> <small>HTML,CSS</small> <small>.Net</small></p>
                  <p>discription <i class="fa fa-angle-double-right"></i> for any website development please contact me <a href="#">Read more</a></p>
            </div>
            <div class="apply-btn">
                <button type="button" class="btn btn-primary">Apply</button>
            </div>
        </div>
-->
<!--
        <div class="company-details">
            <div class="job-update">
                <h4> <b>Seasoned senoir python developer (fresher)</b></h4>
                <p>XYZ Solution Pvt Ltd</p>
                <i class="fa fa-briefcase"></i> <span>0-1 years</span> <br>
                 <i class="fa fa-inr"></i> <span>3.50 - 4.00 lacs p. a.</span> <br>
                  <i class="fa fa-map-marker"></i> <span>baglore</span>
                  <p>Skill  <i class="fa fa-angle-double-right"></i> <small>Java</small>
                  <small>python</small> <small>HTML,CSS</small> <small>.Net</small></p>
                  <p>discription <i class="fa fa-angle-double-right"></i> for any website development please contact me <a href="#">Read more</a></p>
            </div>
            <div class="apply-btn">
                <button type="button" class="btn btn-primary">Apply</button>
            </div>
        </div>
-->
    </div>
</div>
<section>
    <div class="container">
                    
  <ul class="pagination">
    <li class="page-item left-arrow firstpageleftarrow"><a class="pagelink" href="#">&#8592;</a></li>
    <li class="page-item one"><a class="pagelink" href="#">1</a></li>
    <li class="page-item"><a class="pagelink" href="secondpage.html">2</a></li>
    <li class="page-item"><a class="pagelink" href="#">3</a></li>
    <li class="page-item"><a class="pagelink" href="#">&#8594;</a></li>
  </ul>
</div>
</section>
   <section id="site-stats">
       <div class="container text-center">
           <h3>TwittJob SITE STATS</h3>
           <div class="row">
               <div class="col-md-6">
               <div class="row">
                   <div class="col-6">
                       <div class="stats-box">
                           <i class="fa fa-user-o"> <span> <small>100k +</small></span> </i>
                           <p>Job seekers</p>
                       </div>
                   </div>
                   <div class="col-6">
                       <div class="stats-box">
                           <i class="fa fa-slideshare"> <span> <small>500 +</small></span> </i>
                           <p>Empoyes</p>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-md-6">
               <div class="row">
                   <div class="col-6">
                       <div class="stats-box">
                           <i class="fa fa-hand-peace-o"> <span> <small>100k +</small></span> </i>
                           <p>Active Jobs</p>
                       </div>
                   </div>
                   <div class="col-6">
                       <div class="stats-box">
                           <i class="fa fa-building-o"> <span> <small>500 +</small></span> </i>
                           <p>companies</p>
                       </div>
                   </div>
               </div>
           </div>
           </div>
           
       </div>
   </section>
    <section id="app-banner" class="text-center">
        <h1>Find job on mobile,Download twittJob App</h1>
        <img src="image/OIP%20(2).jpg" alt="">
        <img src="image/app-store-logo.jpg" alt="">
    </section>
       <section id="footer" class="text-center">
          <div class="container">
              <h3>twittJob</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia officiis dolorum quaerat, modi aut expedita, accusamus placeat, dignissimos saepe atque velit architecto veniam repellendus nulla deserunt maiores necessitatibus in itaque.</p>
          </div>
           
       </section>
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script>
    function myfun() {
            document.getElementById('preloader').style.display="none";
        }
    function showmenu(){
        document.getElementById('menu').style.display="block";
    }
          function closemenu(){
              document.getElementById('menu').style.display="none";
          }
          
    </script>
       
        
</body>
</html>
<?php

?>
