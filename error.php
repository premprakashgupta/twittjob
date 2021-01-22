<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>error</title>
    <style>
        body{
            display: grid;
            place-items: center;
            
        }
        .msg{
            text-align: center;
        }
        p{
            letter-spacing: 2px;
            animation: zoom 1.5s linear infinite;
            font-size: 20px;
        }
        h1{
            font-size: 100px;
            text-shadow: 1px 1px 5px black;
            color: #fff;
           animation: colorchange 1.5s linear infinite;
        }
        @keyframes colorchange{
            0%{
               transform: translateY(0px);
            }
            10%{
                 transform: translateY(10px);
            }
            20%{
                 transform: translateY(0px);
            }
            40%{
                                 transform: translateY(-10px);
            }
             60%{
                 transform: translateY(0px);
            }
             80%{
                 transform: translateY(10px);
            }
             100%{
                 transform: translateY(0px);
            }
        }
        @keyframes zoom{
            0%{
               transform: scale(1);
            }
             25%{
                 transform: scale(1.5);
            }
            50%{
                 transform: scale(2);
            }
            75%{
                 transform: scale(1.5);
            }
             100%{
                 transform: scale(1);
            }
        }
    </style>
</head>
<body>
   <div class="msg">
        <h1>ERROR 404</h1>
    <p>Please login properly</p>
   </div>
   
</body>
</html>