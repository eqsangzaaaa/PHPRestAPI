<?php
require_once __DIR__."/vendor/autoload.php";

use Thanapol\Connectdb;

$dbconnect = new Connectdb();
$connection = $dbconnect->getConnect();

//insert to Users table
$username = "eqsang";
$password = "1234";
$fullname = "Thanapol sommanpan";
$email = "eqsangzaaaa@hotmail.com";
$tel = "0875025415";
$status = "1";


$sql = "INSERT INTO users(username,password,fullname,email,tel,status)
            VALUES (:username,:password,:fullname,:email,:tel,:status)";
$stmt = $connection->prepare($sql);
$stmt->bindParam(':username',$username);
$stmt->bindParam(':password',$password);
$stmt->bindParam(':fullname',$fullname);
$stmt->bindParam(':email',$email);
$stmt->bindParam(':tel',$tel);
$stmt->bindParam(':status',$status);

if($stmt-> execute()){
    print_r($stmt);
    echo "Add new member success";
}else{
    echo "Add data fail";
}