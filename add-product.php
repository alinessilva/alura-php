<?php include("header.php");
include("connection.php");
include("bd-products.php");

$name = $_GET['name'];
$price = $_GET['price'];

if (addProduct($connection, $name, $price)) { ?>
    <p class="text-sucess">Produto, <?= $name; ?>, <?= $price ?> adicionado com sucesso!</p>
<?php } else { 
    $msg = mysqli_error($connection);
?>
    <p class="text-danger">O produto <?= $name ?>, não foi adicionado. Motivo: <?= $msg?></p>
<?php
}
?>

<?php include("footer.php"); ?>


