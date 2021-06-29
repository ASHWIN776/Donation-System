<?php
$servername = "localhost";
$username = "root"; // id17135952_root
$password = ""; // mP{e~rVb}[@eA9jL
$database = "yogdaan"; // id17135952_yogdaan

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
    die("Connection Failed :(");
 
$conn = mysqli_connect("localhost", "root", "", "yogdaan");

// To get the values sent by axios
$json = file_get_contents('php://input');
$obj = json_decode($json);

$arr = get_object_vars($obj);
session_start();
var_dump($obj);

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($arr["name"]))
{   
    
    $name = $arr["name"];
    $amount = $arr["amt"];
    $email = $arr["email"];
    $phone = $arr["phone"];
            
    
    
    $sql = "INSERT INTO `payment` (`name`, `amount`, `email`, `phone`, `payment_status`, `payment_created`) VALUES ('$name', '$amount', '$email', '$phone','pending', current_timestamp());";
    
    mysqli_query($conn, $sql);

    $_SESSION["oid"] = mysqli_insert_id($conn);
    $_SESSION["arr"] = $arr;
}

if(isset($arr["payment_id"]) && isset($_SESSION["oid"]))
{
    $payment_id = $arr["payment_id"];
    $sessionArr = $_SESSION["arr"];
    $id = $_SESSION["oid"];
    $sql = "UPDATE payment SET payment_status='successfull', payment_id='$payment_id' WHERE id='$id'";
    mysqli_query($conn,$sql);

    require '_mail.php';

    session_unset();
    session_destroy();
}

else{
    echo "Nope";
}
?>