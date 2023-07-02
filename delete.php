<?php

include 'import/connection.php';

if(isset($_GET['Sr'])){
    $Sr=$_GET['Sr'];
    $sql="Delete FROM `student` WHERE `Sr` = $Sr";
    $result=mysqli_query($conn,$sql);
    header('location:index.php');
    
}
else{
    echo "failed";
}




?>