<!DOCTYPE html>
<html>

<head>
    <title>Healthcare Product Page</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./js/healthcare.js"></script>
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
            $servername = 'localhost';
            $username = 'nsssayom';
            $password = '978653';
            try {
                ///try to build up the connection
                $conn = new PDO("mysql:host=$servername;port=3306;dbname=pharmacy", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $mysqlquery = "select * from products";

                $ret = $conn->query($mysqlquery); ///$ret object
                ///$ret->rowCount() 
                $table = $ret->fetchAll(); ///extracting the table 

                $cartQuery = "SELECT * FROM carts";
                $cartQueryReturn = $conn->query($cartQuery);
                $cartItems = $cartQueryReturn->fetchAll();
                $cartItems . array_unique($cartItems);

                if (count($cartItems) > 0) {
            ?>
                    <button type="button" class="btn btn-primary my-4" id="view-cart" data-toggle="modal" data-target="#cart-modal">View Cart</button>
                    <!-- Modal Starts -->
                    <div class="modal" id="cart-modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <?php
                                    for ($j = 0; $j < count($cartItems); $j++) {
                                        for ($k = 0; $k < count($table); $k++) {
                                            if ($cartItems[$j]['product_id'] == $table[$k]['id']) {
                                                $product = $table[$k];
                                                break;
                                            }
                                        }
                                    ?>
                                        <!-- Product Starts -->
                                        <div class="row" id=<?php echo "product-" . $product['id'] ?>>
                                            <div class="col-3">
                                                <img class="img-responsive" src=<?php echo $product['image_dir'] ?> alt="preview" width="120" height="120">
                                            </div>
                                            <div class="col-7 my-auto">
                                                <h6 class="product-name"><?php echo $product['name'] ?></h6>
                                                <p class="mb-1"><?php echo $product['details'] ?></p>
                                                <h6><strong>Price: <span class="text-muted price">
                                                            <span><?php echo $product['price'] ?> </span>
                                                        </span> BDT</strong></h6>
                                            </div>
                                            <div class="col-1 text-right my-auto">
                                                <button type="button" class="btn btn-outline-danger btn-xs remove-product" data-product_id=<?php echo $product['id'] ?>>
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <hr>

                                        <!-- Product Ends-->
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Ends -->

                <?php
                }

                for ($i = 0; $i < count($table); $i++) {
                    $row = $table[$i]; ///each row ///number array
                ?>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src=<?php echo $row['image_dir'] ?> alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['name'] ?></h5>
                            <p class="card-text"><?php echo $row['price'] ?></p>
                            <button class="btn btn-primary btn-add-to-cart" data-product-id="<?php echo $row['id'] ?>">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                <?php
                }
            } catch (PDOException $ex) {
                // echo 'Execute Failed: ' . $ex->getMessage();
                ?>
                <script>
                    alert("Database Connection Error!!");
                </script>
            <?php
            }

            $conn = null;
            ?>
        </div>
    </div>
</body>

</html>