<?php include("header.php"); ?>
<?php include("connection.php");

function listProducts($connection) {
    $products = [];
    $result = mysqli_query($connection, "select * from products");
    while ($product = mysqli_fetch_assoc($result)){
        array_push($products, $product);
}
return $products;

}

$products = listProducts($connection);
foreach($products as $product) {
    echo $product['name'] . "<br/>";
}

?>

<?php include("footer.php"); ?>