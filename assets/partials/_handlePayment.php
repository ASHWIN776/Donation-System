<?php
$conn = mysqli_connect("localhost", "root", "", "yogdaan");
$json = file_get_contents('php://input');
$obj = json_decode($json);

var_dump($obj);
$arr = get_object_vars($obj);
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($arr["name"]))
{
    $name = $arr["name"];
    $amount = $arr["amt"];
    $email = $arr["email"];
    $phone = $arr["phone"];
            
    
    
    $sql = "INSERT INTO `payment` (`name`, `amount`, `email`, `phone`, `payment_status`, `payment_created`) VALUES ('$name', '$amount', '$email', '$phone','pending', current_timestamp());";
    
    mysqli_query($conn, $sql);

    session_start();
    $_SESSION["oid"] = mysqli_insert_id($conn);
    var_dump($_SESSION);
}

var_dump($_SESSION);
if(isset($arr["payment_id"]) && isset($_SESSION["oid"]))
{
    $payment_id = $arr["payment_id"];
    $id = $_SESSION["oid"];
    $sql = "UPDATE payment SET payment_status='successfull', payment_id='$payment_id' WHERE id='$id'";
    mysqli_query($conn,$sql);

    session_unset();
    session_destroy();

}

else{
    echo "Nope";
}

?>