<?php
$json = file_get_contents('php://input');
$obj = json_decode($json);

var_dump($obj);
$arr = get_object_vars($obj);

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($arr["payment_id"]))
{
    $payment_id = $arr["payment_id"];
    $name = $arr["name"];
    $amount = $arr["amt"];
    $email = $arr["email"];
    $phone = $arr["phone"];
            
    $conn = mysqli_connect("localhost", "root", "", "yogdaan");
    
    $sql = "INSERT INTO `payment` (`payment_id`, `name`, `amount`, `email`, `phone`, `payment_status`, `payment_created`) VALUES ('$payment_id', '$name', '$amount', '$email', '$phone','pending', current_timestamp());";
    
    mysqli_query($conn, $sql);

    session_start();
    $SESSION["payment_id"] = $payment_id;
    $SESSION["checkout_started"] = true;
}


if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION["payment_id"]) && $_SESSION["checkout_started"])
{
    $payment_id = $_SESSION["payment_id"];
    $sql = "UPDATE payment SET payment_status='successfull' WHERE payment_id='$payment_id'";
    mysqli_query($conn,$sql);

    session_unset();
    session_destroy();
}

?>