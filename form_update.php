<?php
include('connection.php');
$id = $_GET['id'];
$query = "SELECT * FROM employees WHERE id = $id";
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
    <style>
        body{
            background-image: url('images/body.jpeg');
            background-size: cover;
            background-position: center;
        }
        .helloform{
            box-shadow: 10px 10px 10px #ccc, -10px -10px 10px #ccc;
            padding: 20px 50px;
            margin: 100px auto;
            background-color: rgba(255, 255, 255, 0.603);
           
        }
    </style>
</head>
<body>
    <div class="container w-50 mt-5 helloform">
        <h1 class="mb-5 text-center">Update Empolyee Data</h1>
        <form class="  mx-auto " action="edit.php?id=$id" method="post" enctype="multipart/form-data">
            <?php
            foreach($result as $user)
            {
            ?>
            <input type = "text" hidden value = "<?=$user['id']?>" name = "id">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value = "<?=$user['name']?>">
            </div>

            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" name="email" value = "<?=$user['email']?>">
            </div>

            <div class="form-group">
                <label>Phone Number</label>
                <input type="tel" class="form-control" name="phone" value = "<?=$user['phone']?>">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address" value = "<?=$user['address']?>">
            </div>
            <div class="form-group">
                <label>Salary</label>
                <input type="number" class="form-control" name="salary" value = "<?=$user['salary']?>">
            </div>
            <div class="form-group">
                <label>Choose Department</label>
                <select name="department"  class="form-control">
                    <option <?php if ($user['Department']=='HR'){echo "selected" ;}?>>HR</option>
                    <option <?php if ($user['Department']=='SALES'){echo "selected" ;}?>>SALES</option>
                    <option <?php if ($user['Department']=='MARKETING'){echo "selected" ;}?>>MARKETING</option>
                    <option <?php if ($user['Department']=='IT'){echo "selected" ;}?>>IT</option>
                    <option <?php if ($user['Department']=='PR'){echo "selected" ;}?>>PR</option>
                </select>
            </div>

            <div class="form-group">
                <label>Choose Status</label>
                <select name="status"  class="form-control">
                    <option <?php if ($user['status']=='Single'){echo "selected" ;}?>>Single</option>
                    <option <?php if ($user['status']=='Married'){echo "selected" ;}?>>Married</option>
                    
                </select>
            </div>
            <div class="form-group">
                <label>Job Title</label>
                <input type="text" class="form-control" name="jobtitle" value = "<?=$user['jobtitle']?>">
            </div>
            <div class="form-group">
                <label>postalcode</label>
                <input type="text" class="form-control" name="postalcode" value = "<?=$user['postalCode']?>">
            </div>
         <?php }?>
           
            <button type="submit" class=" w-100 btn btn-success">+ Submit</button>
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script> 
</body>
</html>