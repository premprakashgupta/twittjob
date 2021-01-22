<?php
session_start();
ob_start();
if(!isset($_SESSION['username'])){
    header('location:http://localhost/ourweb/error.php');
}
include"db_con.php";
extract($_SESSION);
$qq="select jobname,company,experience,package,location,skill,description from job where type='Private'";
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
</head>
<body>
    <section class="header">
        <div class="menu-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#" style="font-family: cursive;">twittJob <i class="fab fa-twitter" style="color: skyblue;"></i><i class="fab fa-twitter" style="color: #7ce08a;"></i></a></nav></div></section> 
                 <div class="search-job">
            <form class="form-inline" action="">
 
  <input type="text" class="form-control mb-2 mr-sm-2" onkeyup="searchfun()" placeholder="Search here jobname..." id="email">
</form>
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
                {   $rowss=mysqli_fetch_array($resultt);
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
<script>
              function searchfun(){
                  let filter = document.getElementById('email').value.toUpperCase();
                  console.log(filter);
                  let mytable=document.getElementById('mytable');
                  let tr=document.getElementsByTagName('tr');
                    for(var i=0; i<tr.length; i++)
                        {
                            let td=tr[i].getElementsByTagName('td')[0];
                            if(td)
                                {
                                    let textvalue = td.textContent || td.innerHTML;
                                    if(textvalue.toUpperCase().indexOf(filter)> -1)
                                        {
                                            tr[i].style.display="";
                                        }
                                    else{
                                         tr[i].style.display="none";
                                    }
                                }
                        }
       
              }  
                </script>
</html>
