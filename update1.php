<?php

require "import/connection.php";

if (isset($_POST['update'])) {
  
  $Sr = $_POST['Sr'];
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
//   $sql= "(UPDATE `student` SET `Name`='$name',`Email`='$email',`Contact`='$number',`Class`='$class',`id`='$id_des', WHERE Sr='$Sr')";
$sql="UPDATE `student` SET `Name`='$name',`Email`='$email',`Contact`='$number',`Class`='$class',`id`='$id_des' WHERE Sr = '$Sr' ";
  $result = mysqli_query($conn, $sql);
  header("location:index.php");

}

?>