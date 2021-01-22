<?php
session_start();

?>
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
              font-size: 8px;
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
              font-size: 13px;
          }
          input{
              width: 80px;
              font-size: 13px;
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
               <h2>Login Form</h2>
               <div class="rocket">
                   <img src="image/Picture1.png" alt="">
                   <a href="index.php" class="btn">Registration</a>
                   <br>
               </div>
           </div>
            <div class="col-right">
               <form id="form" action="validation.php" method="post">
                   <table>
                       <tr>
                           <th>Email</th>
                           <td><input type="email" name="email" id="email" onkeyup="validate()" required>
                           
                       </tr>
                        <tr>
                           <th>Password</th>
                           
                           <td><input type="password" name="password"  id="password" required> <br> <span id="passwordindicator"></span></td>
                       </tr>
                       <tr><td colspan="2"><input type="submit" value="Log In" class="registerbtn" id="submit" onclick="validation()" ></td></tr>
                   </table>
                   </form>
           </div>
       </div>
   </div>
    </body>
</html>