<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>sign up</title>
    <style>
        *{margin:0;padding:0;}
        body{background: url('mmm.jpg');
             background-size: cover;
             background-repeat: no-repeat;
             background-attachment: fixed;
             font-family: Arial, Helvetica, sans-serif;
             overflow: hidden;
             }
       .wrap{max-width:350px ;
             border-radius: 20px;
             margin: auto;
             background:rgba(0,0,0,0.8);
             box-sizing: border-box;
             padding: 40px;
             color:#fff;
             margin :70px 500px  500px;
             }
        h2{text-align: center;
             }
        input[type=text], input[type=email], input[type=password]{
            width: 100%;
            box-sizing: border-box;
            padding: 12px 5px;
            background: rgba(0,0,0,10);
            outline: none;
            border: none;
            border-bottom: 1px solid #fff;
            color:#fff;
            border-radius: 5px;
            margin: 5px;
            font-weight: bold;
             }
        input[type=text]:focus, input[type=email]:focus, input[type=password]:focus
            {border-bottom:solid tomato;}
      
        input[type=submit]{
            width: 100%;
            box-sizing: 10px 0;
            margin-top:30px;
            outline: none;
            border: none;
            background: #60adde;
            border-radius: 20px;
            font-size: 20px;
            color: #fff;
             }
             input[type=submit]:hover{background: #003366;
             opacity:0.7 ;
             cursor: pointer;}
       
            *{text-align: center;
            }
          
        
        #ll{position: relative;
      }
      #ll::after{ content: '';display: block;width:0%;height:2px;
              background: rgb(190, 144, 154);position: absolute;left: 35%;
              transition: all 500ms;bottom: -10px;
              }
       #ll:hover{color:rgb(104, 104, 160)}

       #ll:hover::after{width: 100%;color: crimson;left: 0%;
       }
       

         nav{display:flex;justify-content: space-around;align-items: center; background-color: #5d4954;font-family:'poppins',sans-serif;}
        .logo{color:white;text-decoration: none;letter-spacing: 2px;font-size: 20px;}
        .nav-links{display: flex;justify-content: space-around;width: 60%;height: 50px;}
        .nav-links li{list-style: none;margin-top: auto;}
        .nav-links a{color:rgb(226, 226, 226);text-decoration: none;font-weight: bold;}
        ul li ul {background-color: cornflowerblue;display: none;position: absolute;width: 10%;}
        ul li ul li{ float:none;}
        ul li:hover ul{display:block;}
        
        .nav-links li{width: 20%;text-align: center;height: 43px;}

        
    </style>
</head>
<body>
<header>  
    <nav >
     
        <div  class="logo"> SYAHA DZ   </div>
             <ul class="nav-links" style="z-index: 10;">
                
               <li id="mm"><a href="syaha-home.php" id="ll">  Home </a></li>
               <li id="mm"><a href="advertising.php" id="ll">Advertising</a></li> 
               <li id="mm"><a href="" id="ll">Menu</a>
               <ul class="drop">
                   <center>
                <li id="mm"  ><a href="Log In.php" > Log In </a></li>
                <li id="mm" ><a href="Sign Up.php"></i>  Sign Up</a></li></center>
             </ul></li> 
           </ul>
           </nav>
    </header>
   <div class="wrap">
     <h2>Wellcome</h2>
     <form id="form" action="conserv.php" method="post">
         <input type="text" name="wusername" id="user" placeholder="username" required>
         <input type="email" name="wemail" id="email" placeholder="email" required>
         <input type="password" name="wpassword" id="password" placeholder="password" required>
        
         <input type="submit" value="Sign Up" >
     </form>
     <div id="#ll" style="margin-top: 25px;">
     <span >go to <a href="Log In.php" > Log In</a></span>
     </div>
   </div> 
  
</body>
</html>