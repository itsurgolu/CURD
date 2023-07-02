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
    <?php
    require 'import/navbar.php';
    ?>

    <div class="container  my-3">
        <table class="table">
            <thead>
                <tr>

                    <th>Sr</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Class</th>
                    <th>id</th>
                    <th>Date</th>
                    <th>Insert</th>
                    <th>Delete</th>

                </tr>
            </thead>
            <tbody>
                <?php
                require "import/connection.php";
                $sql = "SELECT * FROM `student`";

                $result = mysqli_query($conn, $sql);
              
                while ($row = mysqli_fetch_assoc($result)) {
                 
                    echo " <tr>

                    <td>$row[Sr]</td>
                    <td> $row[Name]</td>
                    <td>$row[Email]</td>
                    <td>$row[Contact]</td>
                    <td> $row[Class]</td>
                    <td><img src='$row[id]' width='100px'  height='100px'></td>
                    <td> $row[Date]</td>
                    
                    <td><a href='update.php? Sr=$row[Sr]' class='btn btn-primary'>Update</a></td>
                    <td><a href='delete.php? Sr=$row[Sr]' class='btn btn-danger'>Delete</a></td>

                </tr>";
                }
                ?>
            </tbody>
        </table>


    </div>



    </body>
</html>