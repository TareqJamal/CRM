<?php
include("connection.php");
$id = $_GET['id'];
$image = $_FILES['myimage'];
$image_name = $_FILES['myimage']['name'];
$old_location = $_FILES['myimage']['tmp_name'];
$r = rand();
$t = time();
$new_location = "images/$r$t$image_name";
move_uploaded_file($old_location,$new_location);
$query = "UPDATE employees SET image = '$new_location' WHERE id = $id";
$results = $connection->query($query);
if ($results)
{
    header("Location: profile.php?id=$id");
}
 ?>
 
