<?php include("header.php");
include("connection.php");
include("bd-products.php");

$products_id = $_GET['products_id'];
removeProduct($connection, $products_id);
header("Location: list-product.php?removed=true");
die();
?>

<?php include("footer.php"); ?>