<!DOCTYPE html>

<html>

<head>
    <title>Healthcare Product Page</title>
   <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  -->
</head>

<body>

    <div class="container">
        <h2 class="slider-title">
                    <span class="inline-title">Healthcare Product</span>
                    <span class="line"></span>
            <hr>
                </h2>
        <br>
        <br>
        <div class="card-columns">
            
            <?php
            ///database connection, mysqli(procedure, object), PDO(object)
            try {
                ///try to build up the connection
                $conn = new PDO("mysql:host=localhost:3306;dbname=db2", "root", "");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $mysqlquery = "select * from product";

                $ret = $conn->query($mysqlquery); ///$ret object
                ///$ret->rowCount() 
                $table = $ret->fetchAll(); ///extracting the table 


                for ($i = 0; $i < count($table); $i++) {
                    $row = $table[$i]; ///each row ///number array
            ?>
                
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src=<?php echo $row['img_path'] ?> alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name'] ?></h5>
                        <p class="card-text"><?php echo $row['price'] ?></p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            
            <?php
            }
                } catch (PDOException $ex) {
                    ///no connection with database
                        ?>
                    <script>
                    alert("Database Connection Error!!")
                    </script>
                    <?php

                }
            ?>
        </div>
    </div>
</body>

</html>