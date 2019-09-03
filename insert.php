
<?php
    // email check will be here
    // include classes
  



// initialize objects
if(isset($_POST['starttime']))
{

$client = $_POST['client'];
$workStatus = $_POST['address'];
$starttime = date('Y-m-d H:i:s');
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_beginner_crud_level_1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO storage (client, address,starttime,firstname,lastname)
VALUES ('$client','$address','$starttime','$firstname','$lastname')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>






