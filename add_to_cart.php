<?php

if (isset($_GET['product_id'])) {

    $product_id = $_GET['product_id'];
    $servername = 'localhost';
    $username = 'nsssayom';
    $password = '978653';
    try {
        $conn = new PDO("mysql:host=$servername;port=3306;dbname=pharmacy", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $addToCardQuery = "INSERT INTO carts (user_id, product_id) VALUES (1, $product_id);";

        $conn->exec($addToCardQuery);
        echo '200 Ok';
    }
    catch (PDOException $ex) {
        echo 'Error: ' . $ex->getMessage();
    }
}

$conn = null;

?>