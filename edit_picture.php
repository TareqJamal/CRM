<?php
include("connection.php");
$id = $_GET['id'];
//$image = $_FILES['image'];
//print_r($image);
//$query = "UPDATE employees SET image =  WHERE id = $id "


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5" >Update your Profile Picture</h1>
        <form class="mx-auto mt-5 p-5" action="update_picture.php?id=<?= $id?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input class="form-control" type = "file" name="myimage" >
            </div>
            <input type="submit"  value = "Update" class="w-100  from-control btn btn-primary">
         </form>
       
    </div>
   

</body>
</html>