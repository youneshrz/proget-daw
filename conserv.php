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
$wusername = $_POST["wusername"];
$wemail = $_POST["wemail"];
$wpassword = $_POST["wpassword"];

}


$sql= "INSERT INTO syahadz (wusername, wemail, wpassword )
VALUES ('$wusername', '$wemail', '$wpassword' )";

if (mysqli_query($conn, $sql)) {
echo "تم إرسال معلومات بنجاح";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header("location :http://localhost/younes/mini proget/Log In.php");



?>