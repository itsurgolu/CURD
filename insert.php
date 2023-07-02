<?php

require "import/connection.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $class = $_POST['class'];
  $id = $_FILES['id'];
  // print_r($_FILES['id']);
  $id_loc = $_FILES['id']['tmp_name'];
  $id_name = $_FILES['id']['name'];
  $id_des = 'uploadId/' . $id_name;
  move_uploaded_file($id_loc, 'uploadId/' . $id_name);

  //$sql = "(INSERT INTO 'student'('Name','Email','Contact','Class','id') VALUES('$name','$email','$number','$class','$id_des'))";
  $sql= "INSERT INTO `student` (`Name`, `Email`, `Contact`, `Class`, `id`) VALUES ('$name', '$email', '$number', '$class', '$id_des')";
  $result = mysqli_query($conn, $sql);
  header("location:index.php");


}


?>

<!DOCTYPE html>
<html>

<head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
<?php
require 'import/navbar.php';
?>

  <form action="" method="post" enctype="multipart/form-data">
    <div class="container my-4 w-50">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name"
          placeholder=" Prathamesh Manoj Rathod">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email"
          placeholder="mailtoprathamesh484@gmail.com">
      </div>
      <div class="mb-3">
        <label for="number" class="form-label">Contact</label>
        <input type="number" class="form-control" id="number" name="number" placeholder="9130*******">
      </div>
      <div class="mb-3">
        <label for="class" class="form-label">Class</label>
        <input type="text" class="form-control" id="class" name="class"
          placeholder="PHP Developer (ICEICO)">
      </div>

      <div class="mb-3">
        <label for="id" class="form-label">id</label>
        <input type="file" class="form-control" id="id" name="id">
       
      </div>
      
        <button type="submit" class="btn btn-primary">Submit</button>
    
    </div>
  </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>