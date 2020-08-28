<!DOCTYPE html>
<?php
error_reporting(0);
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>syahadz/place</title>
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
        div{ float: left;}
        div img{margin-left: 1%;;transition: all ease 0.5s;transform:scale(1);}
        div img:hover{transform: scale(1.1);-webkite-transform:scale(1.2);}
        h1{text-transform: uppercase;color: rgb(63, 21, 102);}
        div div{background-color: burlywood;}
    </style>
</head>
<body>
<?php
    if(isset($_SESSION['siswork'])){
     //login server
      $servername = "localhost";
$username = "root";
$password = "";
$dbname="younes";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$n1=$_SESSION["siswork"];

?>
 <header>
    <nav >
     
        <div  class="logo"> SYAHA DZ   </div>
             <ul class="nav-links" style="z-index: 10;">
                
               <li id="mm"><a href="syaha-home.php" id="ll">  Home </a></li>
               <li id="mm"><a href="advertising.php" id="ll">Advertising</a></li> 
               <li id="mm"><a href="#" id="ll"> <?php  echo "welcome" , " " ,$n1 ?></a></li>
                <li id="mm" class="gg" ><a href="Log In.php" id="ll"> Log Out </a></li>
               
           </ul>
           </nav>
    </header>
    <center>
    <div>
        <h1>Algerai</h1>
        <div><h2>Makam E'chahid(Alger)</h2><a href="https://www.google.com/maps/place/Makam+E'chahid/@36.7456417,3.0697775,15z/data=!4m5!3m4!1s0x0:0x933ce25cf4c7ab3c!8m2!3d36.7456417!4d3.0697775"><img src="as1.jpg" alt=""></a></div>
        <div><h2>Basilique Notre-Dame d'Afrique(Alger)</h2><a href="https://www.google.com/maps/place/Basilique+Notre-Dame+d'Afrique/@36.8009262,3.0426368,15z/data=!4m5!3m4!1s0x0:0x3f03dd1cafd90e67!8m2!3d36.8009262!4d3.0426368"><img src="as2.jpg" alt=""></a></div>
        <div><h2>Le Jardin d'Essai du Hamma (Alger)</h2><a href="https://www.google.com/maps/place/Jardin+Botanique+du+Hamma/@36.7484043,3.075778,15z/data=!4m5!3m4!1s0x0:0x80c5c69eeed0a92e!8m2!3d36.7484043!4d3.075778"><img src="as3.jpg" alt=""></a></div>
        
        
       <h1>Oran</h1>
        <div><h2>Fort Santa Cruz(Oran)</h2><a href="https://www.google.com/maps/place/Fort+Santa+Cruz/@35.7094837,-0.664418,15z/data=!4m5!3m4!1s0x0:0x4685388f1b80f797!8m2!3d35.7094837!4d-0.664418"><img src="o1.jpg" alt=""></a></div>
        <div><h2>Mosquée du Pacha(Oran)</h2><a href="https://www.google.com/maps/place/Mosqu%C3%A9e+du+Pacha/@35.7050657,-0.6501097,15z/data=!4m5!3m4!1s0x0:0xbacc8f7eac0e8ff9!8m2!3d35.7050657!4d-0.6501097"><img src="o2.jpg" alt=""></a></div>
        <div><h2>Place du 1er Novembre(Oran)</h2><a href="https://www.google.com/maps/place/Place+du+1er+Novembre,+Arzew/@35.8579511,-0.3124496,17z/data=!3m1!4b1!4m5!3m4!1s0xd7e74c50c9b5283:0x89baed79cae68604!8m2!3d35.8580971!4d-0.3105934"><img src="o3.jpg" alt=""></a></div>
        
        <h1>Tlemcen</h1>
        <div ><h2>Palais El Mechouar</h2><a href="https://www.google.com/maps/place/Palais+El+Mechouar,+Tlemcen/@34.8816537,-1.3109712,17z/data=!3m1!4b1!4m5!3m4!1s0xd78c9be3d5570fd:0x3df856a6025c542b!8m2!3d34.8816537!4d-1.3087825"><img src="t2.jpg" alt=""></a></div>
        <div style="margin-left: 20px;"><h2>Plateau Lalla Setti</h2><a href="https://www.google.com/maps/place/Plateau+Lalla+Setti/@34.8679867,-1.3183758,15z/data=!4m5!3m4!1s0x0:0xbbaa054db4a6baec!8m2!3d34.8679867!4d-1.3183758"><img src="t1.jpg" alt=""></a></div>
        <div style="margin-left: 20px;"><h2>La Grande Mosquée</h2><a href="https://www.google.com/maps/place/La+Grande+Mosqu%C3%A9e/@34.8837108,-1.3104819,15z/data=!4m5!3m4!1s0x0:0xfb5ae8793908db89!8m2!3d34.8837108!4d-1.3104819"><img src="t3.jpg" alt=""></a></div>
        
        <h1>Constantine</h1>
        <div><h2>Pont Suspendu Sidi M'Cid</h2><a href="https://www.google.com/maps/place/Pont+Suspendu+Sidi+M'Cid/@36.3724212,6.6142064,15z/data=!4m5!3m4!1s0x0:0x92fe1e435d35d9ed!8m2!3d36.3724212!4d6.6142064"><img src="c1.jpg" alt=""></a></div>
        <div><h2>Mosquée Emir Abdelkader</h2><a href="https://www.google.com/maps/place/Mosqu%C3%A9e+Emir+Abdelkader/@36.347063,6.6033373,15z/data=!4m5!3m4!1s0x0:0xe0734f810f7b8398!8m2!3d36.347063!4d6.6033373"><img src="c2.jpg" alt=""></a></div>
        <div><h2>Monument aux morts de Constantine</h2><a href="https://www.google.com/maps/place/Monument+aux+Morts+Constantine,+Constantine/@36.3752675,6.6136611,15z/data=!4m5!3m4!1s0x0:0xbefe13c2cdbe2447!8m2!3d36.3752675!4d6.6136611"><img src="c3.jpg" alt=""></a></div>
        
        <h1>anaba</h1>
        <div><h2>Plage Aïn Achir</h2><a href="https://www.google.com/maps/place/Plage+A%C3%AFn+Achir/@36.9570274,7.7801437,15z/data=!4m5!3m4!1s0x0:0xc2962198b3ad305e!8m2!3d36.9570274!4d7.7801437"><img src="a2.jpg" alt=""></a></div>
        <div><h2>Basilique Saint Augustin</h2><a href="https://www.google.com/maps/place/Basilique+Saint+Augustin/@36.8818048,7.7447486,15z/data=!4m5!3m4!1s0x0:0x7c20fb938ebde33c!8m2!3d36.8818048!4d7.7447486"><img src="a1.jpg" alt=""></a></div>
        <div><h2>Musée des Ruines d'Hyppone</h2><a href="https://www.google.com/maps/place/Mus%C3%A9e+des+Ruines+d'Hyppone/@36.8820627,7.7516628,15z/data=!4m5!3m4!1s0x0:0xb4f5607eec5c2183!8m2!3d36.8820627!4d7.7516628"><img src="a3.jpg" alt=""></a></div>
        
        <h1>Béjaïa </h1>
        <div><h2>Gouraya National Park</h2><a href="https://www.google.com/maps/place/Parc+national+de+Gouraya/@36.7679449,5.0863056,13z/data=!4m5!3m4!1s0x0:0x8c4e46c6cc398274!8m2!3d36.7679449!4d5.0863056"><img src="b1.jpg" alt=""></a></div>
        <div style="margin-left: 10px;"><h2>Cascades de Kefrida</h2><a href="https://www.google.com/maps/place/Cascades+de+Kefrida/@36.5705601,5.2896718,15z/data=!4m5!3m4!1s0x0:0xe5a50960370a5e13!8m2!3d36.5705601!4d5.2896718"><img src="b2.jpg" alt=""></a></div>
        <div style="margin-left: 20px;"><h2>Les Aiguades</h2><a href="https://www.google.com/maps/place/Les+Aiguades/@36.76447,5.1016635,17z/data=!3m1!4b1!4m5!3m4!1s0x12f2cb822bc575ff:0x780a7465c82c436a!8m2!3d36.7648774!4d5.1030688"><img src="b3.jpg" alt=""></a></div>
        
        <h1>tipaza</h1>
        <div style="margin-left: 10px;"><h2>Mausolée royal de Maurétanie</h2><a href="https://www.google.com/maps/place/Mausol%C3%A9e+royal+de+Maur%C3%A9tanie+(tombeau+de+la+chr%C3%A9tienne)/@36.5751343,2.5528469,15z/data=!4m5!3m4!1s0x0:0x97a2630691072b80!8m2!3d36.5751343!4d2.5528469"><img src="tt1.jpg" alt=""></a></div>
        <div style="margin-left: 10px;"><h2>romania relics</h2><a href="https://www.google.com/maps/place/%D8%A7%D9%84%D8%AD%D8%B6%D9%8A%D8%B1%D8%A9+%D8%A7%D9%84%D8%B4%D8%B1%D9%82%D9%8A%D8%A9+%D9%84%D9%84%D8%A7%D8%AB%D8%A7%D8%B1+%D8%A7%D9%84%D8%B1%D9%88%D9%85%D8%A7%D9%86%D9%8A%D8%A9+romania+relics%E2%80%AD/@36.5710607,2.3777953,12z/data=!4m8!1m2!2m1!1z2KfZhNii2KvYp9ixINin2YTYsdmI2YXYp9mG2YrYqSDZgdmKINiq2YrYqNin2LLYqQ!3m4!1s0x12857fc50213028f:0x34ccd94106e26023!8m2!3d36.5946281!4d2.4584785"><img src="tt2.jpg" alt=""></a></div>
        <div style="margin-left: 20px;"><h2>Chenoua plage</h2><a href="https://www.google.com/maps/place/Chenoua+plage/@36.6021738,2.4056035,15z/data=!3m1!4b1!4m5!3m4!1s0x12857f73c40c2cdd:0xeac1a95c0394946f!8m2!3d36.6024353!4d2.4129976"><img src="tt3.jpg" alt=""></a></div>
        
       
        
    </div>
</center>
<?php
 }else{
 	header("location:http://localhost/younes/mini proget/Log In.php");}
  ?>
  
</body>
</html>