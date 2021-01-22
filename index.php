

<!DOCTYPE html>

<html lang="en">
<head>
  <title>Data Entery Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
 
  <style>
      *{
          font-family: 'Poppins', sans-serif;
      }
      body{
          width: 100vw;
          height: 100vh;
      }
      .container{
       width: 90%;
          height: 90%;
          box-sizing: border-box;
          box-shadow: 2px 2px 6px blue;
          margin: auto;
           background-image: linear-gradient(to right,#6db9ef,#7ce08a) !important;
      }
      .row{
          display: flex;
          width: 100%;
          height: 100%;
      }
      .col-left{
          flex-basis: 30%;
          background-color: transparent;
          height: 100%;
          width: 100%;
          position: relative;
      }
      .col-right{
          flex-basis: 70%;
          background-color: #fff;
          height: 80%;
          width: 100%;
          border-bottom-left-radius: 250px;
          border-top-left-radius: 35px;
        margin-top: 5%;
          box-shadow: 2px 2px 7px #fff;
          position: relative;
      }
      h2{
          width: 70%;
          height: auto;
          margin: auto;
          margin-top: 50px;
          margin-bottom: 20px;
          font-size: 40px;
          color: #fff;
          text-shadow: 1px 1px 5px black;
      }
      .rocket{
          width: 70%;
          height: 300px;
          margin: auto;
          position: relative;
      }
      .rocket img{
          width: 120px;
          display: block;
          margin: auto;
          position: absolute;
          bottom: 0;
          animation: rocket 5s linear infinite;
      }
      @keyframes rocket{
          0%{
              bottom: 0;
          }
          100%{
              bottom: 100%;
          }
      }
      .btn{
          width: 100px;
          height: 25px;
          border-radius: 20px;
          padding: 10px;
          margin: 10px auto;
          background-color: aliceblue;
          position: absolute;
          bottom: 30px;
          text-align: center;
          text-decoration: none;
          color: #000;
          font-weight: bold;line-height: 25px;
          
      }
      form{
          width: 70%;
          height: 70%;
          margin: auto;
          margin-top: 40px;
      }
      table{
          width: 100%;
          height: 100%;
      }
      .registerbtn{
          position: absolute;
          bottom: 20px;
          right: 20px;
            width: 100px;
          height: 25px;
          border-radius: 20px;
          padding: 5px;
        text-align: center;
         cursor: pointer;
          color: #000;
          font-weight: bold;line-height: 15px;
          background-color: aliceblue;
      }
      input{
          border-bottom: 2px black solid;
          border-top: 0;
          border-left: 0;
          border-right: 0;
          outline: 0;
          padding-left: 5px;
          letter-spacing: 2px;
          font-size: 13px;
          background-color: transparent;
      }
      #textarea{
          padding-left: 5px;
          outline: none;
      }
      .indicator{
          width: 10px;
          height: 10px;background: #555;
          border-radius: 50%;
          display: inline-block;
      }
      #form.valid .indicator{
          background-color: #0f0;
          box-shadow: 0 0 5px #0f0,
              0 0 10px #0f0,
              0 0 20px #0f0,
          0 0 40px #0f0;
      }
        #form.invalid .indicator{
          background-color: #f00;
          box-shadow: 0 0 5px #f00,
              0 0 10px #f00,
              0 0 20px #f00,
          0 0 40px #f00;
      }
      @media (max-width: 800px)
      {
          h2{
              font-size: 20px;
          }
          .btn{
              width: 50px;
              height: 13px;
              font-size: 13px;
              line-height: 13px;
          }
         .registerbtn{
              width: 80px;
              height: 17px;
              line-height: 7px;
              font-size: 8px;
          }
          .col-right{
               border-bottom-left-radius: 120px;
          border-top-left-radius: 17px;
              width: 200px;
              height: 70%;
          }
          table{
              width: 50px;
              font-size: 5px;
          }
          input{
              width: 40px;
              font-size: 8px;
          }
          textarea{
              width: 80px;
              height: 30px;
              font-size: 8px;
          }
          .rocket img{
              width: 60px;
          }
      }
    </style>
</head>
<body>
   <div class="container">
       <div class="row">
           <div class="col-left">
               <h2>Registration Form</h2>
               <div class="rocket">
                   <img src="image/Picture1.png" alt="">
                   <a href="login.php" class="btn">LogIn</a>
                   <br>
<!--                   <p style="color: #f00; font-size: 20px; font-weight: bold;"><?php echo $_SESSION['msg']; ?></p>-->
               </div>
           </div>
            <div class="col-right">
               <form id="form" action="insertion.php" onsubmit="return validation()" method="post" enctype="multipart/form-data">
                   <table>
                       <tr>
                           <th>Username</th>
                           
                           <td><input type="text" name="username" id="username" autocomplete="off" required> <br> <span id="usernameindicator"></span> </td>
                           <th>Email</th>
                           <td><input type="email" name="email" id="email" onkeyup="validate()" autocomplete="off" required>
                           <span class="indicator"></span></td>
                       </tr>
                        <tr>
                           <th>Password</th>
                           
                           <td><input type="password" name="password"  id="password" onkeyup="validatepass()" required> <br> <span id="passwordindicator"></span></td>
                           <th>Gender</th>
                           <td rowspan="2"><input type="radio"  value="Male" name="gender" required>Male
                           <input type="radio"  value="Female" name="gender">Female <input type="radio"  value="Transgender" name="gender">Transgender</td>
                       </tr>
                        <tr>
                           <th>Confirm Password</th>
                           <td><input type="password" name="cpassword" id="cpassword" onkeyup="validationcpass()"  required> <br> <span id="cpasswordindicator"></span> </td>
                           <td><input type="file" name="file" id="file"></td>
                       </tr>
                       <tr> <th>Address</th> <td colspan="2"><textarea name="address" id="textarea" cols="50" rows="3" placeholder="type here..." required></textarea></td></tr>
                       <tr><td colspan="2"><input type="submit" value="Register" class="registerbtn" id="submit" ></td></tr>
                   </table>
                   </form>
           </div>
       </div>
   </div>
   <script>
    function validate(){
        var form=document.getElementById('form');
        var email=document.getElementById('email').value;
//        var pattern= /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
        var pattern=/^[^  ]+@[^  ]+\.[a-z]{2,3}$/;
     
       
        if(email.match(pattern)){
            form.classList.add('valid');
              form.classList.remove('invalid');
        }
        else{
              form.classList.add('invalid');
             form.classList.remove('valid');
            return false;
        }
        
        if(email == "")
            {
                form.classList.remove('invalid');
             form.classList.remove('valid');
                return false;
            }
    }
       function validation(){
           var username=document.getElementById('username').value;
           var password=document.getElementById('password').value;
            var cpassword=document.getElementById('cpassword').value;
            var submit=document.getElementById('submit').value;
           
        if(username.length<3){
            document.getElementById('usernameindicator').innerHTML="**Username must be 3 letter or above";
            document.getElementById('usernameindicator').style.color="red";
           return false;
          }
            if(!isNaN(username)){
                document.getElementById('usernameindicator').innerHTML="**Username must be alphabate only";
            document.getElementById('usernameindicator').style.color="red";
               return false;
              
           }
            if(password.length<6){
            document.getElementById('passwordindicator').innerHTML="**Password must be 6 letter or above";
            document.getElementById('passwordindicator').style.color="red";
           return false;
          }
            if(cpassword.length<6){
            document.getElementById('cpasswordindicator').innerHTML="**Comfirme password must be 6 letter or above";
            document.getElementById('cpasswordindicator').style.color="red";
           return false;
          }
             if(cpassword!=password){
         
           return false;
          }
       

          var pattern= /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,15}$/;
     
       
        if(!password.match(pattern)){
              return false;
        }
           
       }
       function validationcpass(){
             var password=document.getElementById('password').value;
            var cpassword=document.getElementById('cpassword').value;
            if(cpassword === password){
            document.getElementById('cpasswordindicator').innerHTML="**Comfirme password same like password";
            document.getElementById('cpasswordindicator').style.color="green";
          
          }
           else{
                document.getElementById('cpasswordindicator').innerHTML="**Comfirme password must be same like password";
            document.getElementById('cpasswordindicator').style.color="red";
            
           }
       }
//       /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/
        function validatepass(){
        var form=document.getElementById('form');
        var password=document.getElementById('password').value;
//        var pattern= /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
        var pattern= /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,15}$/;
     
       
        if(password.match(pattern)){
            document.getElementById('passwordindicator').innerHTML="**Strong password";
             document.getElementById('passwordindicator').style.color="green";
        }
        else{
             document.getElementById('passwordindicator').innerHTML="**Weak password";
             document.getElementById('passwordindicator').style.color="red";
              return false;
        }
       
    }
       
    </script>
</body>
</html>