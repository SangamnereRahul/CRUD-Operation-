<?php

include 'connect.php';

$id =$_GET['updateid'];

$sql= "select * from crud where id=$id";

$result=mysqli_query($con,$sql);

$row=mysqli_fetch_assoc($result);

$name=$row['Name'];
$email=$row['Email'];
$mobile=$row['mobile'];
$password=$row['Password'];

if(isset($_POST['submit'])){
  $name= $_POST['name'];
  $email= $_POST['email'];
  $mobile= $_POST['mobile'];
  $password= $_POST['password'];

$sql = "update crud set id = $id, name='$name', email='$email', mobile='$mobile', password='$password' where id=$id ";

$result = mysqli_query($con,$sql);
if($result){
    header('location:display.php');
}else{ 
  die(mysqli_error($con));
}

}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >
    <title>CRUD operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="POST">
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" placeholder="enter name" name="name" autocomplete="off" value=<?php echo $name ?>>
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" placeholder="enter email" name="email" autocomplete="off" value=<?php echo $email ?>>
        </div>

        <div class="mb-3">
          <label class="form-label">mobile</label>
          <input type="text" class="form-control" placeholder="enter mobile no." name="mobile" autocomplete="off" value=<?php echo $mobile ?>>
        </div>

        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" placeholder="enter password" name="password" autocomplete="off" value=<?php echo $password ?>>
        </div>
       
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
      </form>
    </div>

  </body>
</html>