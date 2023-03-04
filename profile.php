<?php
include("connection.php");

$id = $_GET['id'];
$query = "SELECT * FROM employees WHERE id = $id";
$results = $connection->query($query);
$number_rows = $results->num_rows;
if ($number_rows == 0)
{
    header ("Location : users.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee CRM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/pygments-manni.css" rel="stylesheet"> 
    <link href="<?php echo $path ?>css/pygments-manni.css" rel="stylesheet"> 
    <?php $path="http://".$_SERVER['HTTP_HOST']."/" ;?>
    <style>
       
        .helloform{
            box-shadow: 10px 10px 10px #ccc, -10px -10px 10px #ccc;
            padding: 20px 50px;
            margin: 100px auto;
            background-color: rgba(255, 255, 255, 0.603);
           
        }
    </style>
</head>
<body>
    <div class="container">
<h1 style="text-align: center; "><b>Your Profile</b></h1>
      <?php 
      foreach ($results as $user)
      {
         ?>
    <div class="card w-50 mx-auto "  >
        <img src="<?=$user['image']?>" height = "500px" class="card-img-top" style ="border-radius: 50%" >
         <div class="card-body">
         <h1 class="card-title"><b>Name : </b> <?=$user['name']?> </h1>
         <hr>
         <h1 class="card-title"><b>Email : </b><?=$user['email']?></h1>
         <hr>
         <h1 class="card-title"><b>Phone : </b><?=$user['phone']?></h1>
         <hr>
         <h1 class="card-title"><b>Adress : </b><?=$user['address']?> </h1>
         <hr>
         <h1 class="card-title"><b>Date of Birth : </b><?=$user['dateofbirth']?></h1>
         <hr>
         <h1 class="card-title"><b>Gender : </b><?=$user['gender']?></h1>
         <hr>
         <h1 class="card-title"><b>Department : </b><?=$user['Department']?></h1>
         <hr>
         <h1 class="card-title"><b>Status : </b><?=$user['status']?></h1>
         <hr>
         <h1 class="card-title"><b>Country : </b><?=$user['country']?></h1>
         <hr>
         <h1 class="card-title"><b>Job Title : </b><?=$user['jobtitle']?></h1>
         <hr>
         <h1 class="card-title"><b>Salary : </b><?=$user['salary']?></h1>
         <hr>
         <a href="edit_picture.php?id=<?=$user['id']?>" class="btn btn-primary">Edit Profile Picture</a>
         <a class="btn btn-success" href="index.html" role="button">Home</a>
    </div>
    <?php } ?>
</div>

    </div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script> 
</body>
</html>