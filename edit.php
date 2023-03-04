<?php 
include('connection.php');
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone_number = $_POST['phone'];
$adress = $_POST['address'];
$derpartment = $_POST['department'];
$status = $_POST['status'];
$job_title = $_POST['jobtitle'];
$salary = $_POST['salary'];
$Query = "UPDATE employees SET name = '$name' , address ='$adress', phone = '$phone_number' ,email = '$email' ,status = '$status' ,salary = '$salary' ,Department ='$derpartment',jobtitle = '$job_title' WHERE id = $id";
$result = $connection->query($Query);
if ($result )
{
    header('Location: users.php');
}


?>