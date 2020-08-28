<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>advertising</title>
    <style>
         *{margin: 0;padding: 0;}
        body{background-color: chocolate;}
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
        ul li ul {background-color: cornflowerblue;display: none;position: absolute;width: 7%;}
       
        
        .nav-links li{width: 20%;text-align: center;height: 43px;}
        div{font-weight: bold;}
        .adv{font-size: 25px;}
        #kk{border:1px solid white;width:auto;background:white}
        .btn2{width:100px;font-weight:bold;margin-top:5%;height:40px;font-size:20px;}
        .btn2:hover,.btn:hover{background: rgb(137, 141, 137);color:white;}
        .btn{width:300px;font-weight:bold;height:40px;font-size:20px;}
        .btn3{width:100px;font-weight:bold;font-size:20px;;height:35px}
        input{width:300px;height:30px;font-weight:bold}
    </style>
</head>
<body>
<header>
    <nav >
     
        <div  class="logo"> SYAHA DZ   </div>
             <ul class="nav-links" style="z-index: 10;">
                
               <li id="mm"><a href="syaha-home.php" id="ll">  Home </a></li>
               <li id="mm"><a href="advertising.php" id="ll">Advertising</a></li> 
               
           </ul>
           </nav>
    </header>
           <center>
               <button class="btn2" onclick="info()";>click here</button>
    <div class="adv" id="adv">
        
    </div>
    <button class="btn" onclick="alert('my email is : hrzy08651@gmail.com')">click here to get my email</button> <br> <br><br><hr>
    <input id="lbl" type="text" placeholder="say something :"> <button class="btn3" onclick="send();">send</button>
    <br>
    <div id="lbl1"></div>
    <footer >
Copyright © SYAHA DZ. All right reserved
</footer>
</center>

<script>
    function info(){
        var msg1="Welcome",msg2="welcome to our site ",msg3=" This page is intended",msg4="for advertisers  If you "
        ,msg5=" want to advertise on the site,",msg6="you can contact us";
           
        window.adv.innerHTML="<p>"+"<h1>" + msg1 + "</h1>" + msg2 + "<br>" + msg3 +
           " <br>" + msg4 + "<br>" + msg5 + "<br>" +msg6 + "<br>"+"</p>";
    }
   function send(){
       msg=window.lbl.value;
       window.lbl1.innerHTML += "<div id='kk'>" + "<p>" + msg + "</p>" +" </div>"+ "<br>" + "<br>" ;
   }

</script>
</body>
</html>