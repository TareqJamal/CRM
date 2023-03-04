<?php
include("connection.php");
$name = $_POST['name'];
$email = $_POST['email'];
$phone_number = $_POST['phone'];
$adress = $_POST['address'];
$image = $_FILES['myimage'];
$date_of_birth = $_POST['dateofbirth'];
$gender = $_POST['gender'];
$derpartment = $_POST['department'];
$status = $_POST['status'];
$country = $_POST['country'];
$job_title = $_POST['jobtitle'];
$postal_code = $_POST['postalcode'];
$salary = $_POST['salary'];
$image_name = $_FILES['myimage']['name'];
$old_location = $_FILES['myimage']['tmp_name'];
$r = rand();
$t = time();
if ($_FILES['myimage']['error'] > "0")
{
    $new_location = "images/defult.png";
}else
{
    $new_location = "images/$r$t$image_name";
}
move_uploaded_file($old_location,$new_location);
$query = "INSERT INTO  employees  (name ,address ,country,phone,email ,image,dateofbirth ,gender ,status,salary ,Department,jobtitle ,postalCode,date) 
VALUES ('$name','$adress','$country','$phone_number','$email','$new_location','$date_of_birth','$gender','$status','$salary','$derpartment','$job_title','$postal_code',Now())";
$result = $connection->query($query);
if ($result)
{
    header("Location: users.php");
}
?>