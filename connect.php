<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="younes";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
}

$sql= "SELECT*FROM syahadz WHERE wusername='$n1' AND wpassword ='$n2'";
$resl=$conn->query($sql);

while($row=$resl->fetch_assoc()){
	$count=$resl->num_rows;		
}
if ($count >0 ){
  session_start();
 $_SESSION["siswork"]=$n1;
header("location: http://localhost/younes/mini proget/place.php");
} else {
header("location: http://localhost/younes/mini proget/Log In.php ");
}
?>
