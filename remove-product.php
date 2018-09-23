<?php include("header.php");
include("connection.php");
include("bd-products.php");

$products_id = $_GET['products_id'];
removeProduct($connection, $products_id);
?>

<p class="text-success">Produto <?=$products_id?> removido!</p>

<?php include("footer.php"); ?>