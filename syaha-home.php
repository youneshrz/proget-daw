<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>syahadz/home</title>
    <style>
        *{margin: 0px;padding: 0px;box-sizing: border-box }
        body{background-image: url(mmm.jpg);background-repeat: no-repeat;background-size: cover;background-attachment: fixed;background-position: center center;}
        
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
       
        .container{position: absolute;top: 30%;}
        div h1{font-size: 60px;font-weight: bolder;color:rgb(218, 105, 233);background:lightblue;width:350px}
        div  p{font-size: 30px;font-weight: bold;color: white;}
        .photo{width: 100%;position: absolute;bottom: 15px}
        .photo img{transition: all ease 0.5s;transform:scale(1)}
        .photo img:hover{transform: scale(1.2);-webkite-transform:scale(1.2);}
        button{position: absolute;top: 50%;left: 150%;width: 90px;height: 40px;font-size: 20px;background-color: antiquewhite;border: 1px solid ;border-radius: 5px;} 
        button:hover{background-color: blueviolet;cursor: pointer;color: white;}
        
        
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
<div class="container">
    <div><h1>SYAHA DZ</h1> <p><strong>SYAHA DZ</strong>  is the best Algerian website that <br> offers the best tourist places <br>
        that you can go to in Algeria <br>You can start by clicking on GO <br> and then log in and enjoy <br> pictures of beautiful places</p></div>
        <a href="Log In.php"><button>GO</button></a>
        </div>
    <center>
    <div class="photo">
        <img src="mm.jpg" alt="">
        <img src="m1.jpg" alt="">
        <img src="m2.jpg" alt="">
        <img src="m3.jpg" alt="">
       
        <img src="m9.jpg" alt="">
    </div>
 
    </center>
   

</body>

</html>