<?php 
include("connection.php");
$query = "SELECT * FROM employees";
$result = $connection->query($query);
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


    
    <div class="container-fluid w-100 mt-5 helloform">
        <h1 class="mb-5 text-center">Show All Empolyee </h1>
        
        <table class="table table-striped">
            <thead>
              <th>Image</th>
              <th>Name</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Country</th>
              <th>Gender</th>
              <th>Job_Title</th>
              <th>Date</th>
              <th>Actions</th>
            </thead>
            <tbody>
              <?php foreach($result as $employee)
              {?>
              <tr>
                <td><img src = "<?= $employee['image']?> " width = 50px height = 50px></td>
                <td><?= $employee['name']?></td>
                <td><?= $employee['address']?></td>
                <td><?= $employee['phone']?></td>
                <td><?= $employee['email']?></td>
                <td><?= $employee['country']?></td>
                <td><?= $employee['gender']?></td>
  
                <td><?= $employee['jobtitle']?></td>
    
                <td><?= $employee['date']?></td>
                <td>
                  <a href = "profile.php?id=<?= $employee['id']?>" class = "btn btn-success"><i class="fas fa-eye"></i></a>
                  <a href = "form_update.php?id=<?= $employee['id']?>" class = "btn btn-primary"><i class="fas fa-edit"></i></a>
                  <a href = "delete_user.php?id=<?= $employee['id']?>" class = "btn btn-danger"><i class="fas fa-trash"></i></a>
              
                </td>
              </tr>
              <?php }?>
            
              
            </tbody>
          </table>

          <a class="btn btn-success" href="index.html" role="button">ADD Employee</a>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script> 
</body>
</html>