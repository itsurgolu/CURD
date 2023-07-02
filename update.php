<!DOCTYPE html>
<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="script.js"></script>


    <title>Document</title>
</head>

<body>
    <?php require "import/navbar.php"?>
                <?php
                require "import/connection.php";
                if(isset($_GET['Sr'])){
                
                $Sr=$_GET['Sr'];
                $sql = "SELECT * FROM `student` where `Sr`= $Sr ";
                $result = mysqli_query($conn, $sql);
                $data=mysqli_fetch_array($result);
                }
?>
 <form action="/iceico/CURD/update1.php" method="post" enctype="multipart/form-data">
   
    <div class="container my-4 w-50">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" value="<?php echo $data["Name"]?>" class="form-control" id="name" name="name"
          >
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" value="<?php echo $data["Email"]?>" class="form-control" id="email" name="email"
          placeholder="mailtoprathamesh484@gmail.com">
      </div>
      <div class="mb-3">
        <label for="number" class="form-label">Contact</label>
        <input type="number" class="form-control" value="<?php echo $data["Contact"]?>" id="number" name="number" placeholder="9130*******">
      </div>
      <div class="mb-3">
        <label for="class" class="form-label">Class</label>
        <input type="text" class="form-control" value="<?php echo $data["Class"]?>" id="class" name="class"
          placeholder="PHP Developer (ICEICO)">
      </div>

      <div class="mb-3">
        <label for="id" class="form-label">id</label>
        <input type="file"  value="<?php echo $data["id"]?>" class="form-control" id="id" name="id"><img src="<?php echo $data["id"]?>" width="100px" height="100px">
       
      </div>
      <input type="hidden" name="Sr"  value="<?php echo $data['Sr'] ?>">
      
        <button type="submit" name="update" class="btn btn-primary">Update</button>
    
    </div>

  
  </form>
         

    </body>
</html>