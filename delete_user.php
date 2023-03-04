<?php
include("connection.php");
$id = $_GET['id'];
$query = "DELETE  FROM employees WHERE id = $id";
$result = $connection->query($query);
if ($result)
{
    header('Location: users.php');
}
?>