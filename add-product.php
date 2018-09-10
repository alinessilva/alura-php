<?php include("header.php"); ?>

<?php
    $name = $_GET['name'];
    $price = $_GET['price'];
?>

    <p class="alert-sucess">Produto, <?= $name; ?>, <?= $price ?> adicionado com sucesso!</p>

<?php include("footer.php"); ?>


