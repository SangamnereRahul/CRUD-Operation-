<?php

include 'connect.php';
if(isset($_POST['submit'])){
  $name= $_POST['name'];
  $email= $_POST['email'];
  $mobile= $_POST['mobile'];
  $password= $_POST['password'];

$sql = "insert into crud (Name,Email,mobile,Password) values('$name','$email','$mobile','$password') ";

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
          <input type="text" class="form-control" placeholder="enter name" name="name" autocomplete="off">
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" placeholder="enter email" name="email" autocomplete="off">
        </div>

        <div class="mb-3">
          <label class="form-label">mobile</label>
          <input type="text" class="form-control" placeholder="enter mobile no." name="mobile" autocomplete="off">
        </div>

        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" placeholder="enter password" name="password" autocomplete="off">
        </div>
       
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
    </div>

  </body>
</html>