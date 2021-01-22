<?php
session_start();
ob_start();
if(!isset($_SESSION['username'])){
    header('location:http://localhost/ourweb/error.php');
}
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
        .company-details .visible .job-update{
            display: block;
        }
         .company-details .hidden .job-update{
            display: none;
        }
    </style>
</head>
<body>
    <section class="header">
        <div class="menu-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#" style="font-family: cursive;">twittJob <i class="fab fa-twitter" style="color: skyblue;"></i><i class="fab fa-twitter" style="color: #7ce08a;"></i></a></nav></div></section> 


 <div class="search-job">
            <form class="form-inline" action="">
 
  <input type="text" class="form-control mb-2 mr-sm-2" onkeyup="searchfun()" placeholder="Job-keyword" id="email">
 
  <input type="text" class="form-control mb-2 mr-sm-2" onkeyup="searchfun1()" placeholder="Company" id="email2">
   <input type="text" class="form-control mb-2 mr-sm-2" onkeyup="searchfun3()" placeholder="Location" id="email3">
</form>
        </div> 




<div id="jobs">
   
    <div class="container">
        <h5 style="margin: 50px;">Get your Job</h5>
<!--        <h5> <div id="jobnumber"></div> - <div id="totaljob"></div> </h5>-->
        
        <?php
                for($i=1;$i<=$num;$i++)
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
    </div>
    
</div>
<section>
    <div class="container">
                    
  <ul class="pagination">
    <li class="page-item left-arrow" onclick="prev()" ><a class="pagelink" href="alljobview.php" id="prev" >&#8592;</a></li>
    <li class="page-item one"><a class="pagelink" href="alljobview.php" >1</a></li>
    <li class="page-item"><a class="pagelink" href="alljobview2.php" >2</a></li>
   
    <li class="page-item" onclick="next()" ><a class="pagelink" href="alljobview2.php" id="next" >&#8594;</a></li>
  </ul>
</div>
</section>
 <section id="footer" class="text-center">
          <div class="container">
              <h3>twittJob</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia officiis dolorum quaerat, modi aut expedita, accusamus placeat, dignissimos saepe atque velit architecto veniam repellendus nulla deserunt maiores necessitatibus in itaque.</p>
          </div>
           
       </section>
</body>
<script>
     function searchfun(){
                  let filter = document.getElementById('email').value.toUpperCase();
                  console.log(filter);
                  let h4=document.getElementsByTagName('h4');
                    for(var i=0; i<h4.length; i++)
                        {
                           
                         
                                
                                    let textvalue = h4[i].textContent || h4[i].innerHTML;
                                    if(textvalue.toUpperCase().indexOf(filter)> -1)
                                        {
                                            h4[i].parentNode.parentNode.style.display="";
                                        }
                                    else{
                                         h4[i].parentNode.parentNode.style.display="none";
                                    }
                                
                        }
       
              }  
     function searchfun1(){
                  let filter = document.getElementById('email2').value.toUpperCase();
                  console.log(filter);
                  let p=document.getElementsByTagName('p');
                    for(var i=0; i<p.length; i++)
                        {
                           
                         
                                
                                    let textvalue = p[i].textContent || p[i].innerHTML;
                                    if(textvalue.toUpperCase().indexOf(filter)> -1)
                                        {
                                            p[i].parentNode.parentNode.style.display="";
                                        }
                                    else{
                                         p[i].parentNode.parentNode.style.display="none";
                                    }
                                
                        }
       
              }  
     function searchfun3(){
                  let filter = document.getElementById('email3').value.toUpperCase();
                  console.log(filter);
                  let p=document.getElementsByClassName('location');
                    for(var i=0; i<p.length; i++)
                        {
                           
                         
                                
                                    let textvalue = p[i].textContent || p[i].innerHTML;
                                    if(textvalue.toUpperCase().indexOf(filter)> -1)
                                        {
                                            p[i].parentNode.parentNode.style.display="";
                                        }
                                    else{
                                         p[i].parentNode.parentNode.style.display="none";
                                    }
                                
                        }
       
              }  
    
    </script>


</html>
