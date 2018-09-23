<?php include("header.php");
include("connection.php");
include("bd-products.php");

$products = listProducts($connection);
foreach($products as $product) {
?>


<?php
    echo $product['name'] . "<br/>";
}

?>

<?php include("footer.php"); ?>