<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

//database conncetion
$conn = new mysqli('localhost','root','test');
if($conn->connect_error){
    die('Connection failed :'.$conn- >connect_error);
}else{
    $stmt = $conn->prepare("insert into Form(name, email,number,message) values(?,?,?,?)");
    $stmt ->bind_param("ssis",$name ,$email, $number , $message );
    $stmt-> Execute();
    echo"Message Send Successfully";
    $stmt->close;
    $conn-> close;
}
?>