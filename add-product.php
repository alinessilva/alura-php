<?php include("header.php"); ?>

<?php

function addProduct($connection, $name, $price){
    $query = "insert into products (name, price) values ('{$name}', {$price})";
    return mysqli_query($connection, $query);
}
    $name = $_GET['name'];
    $price = $_GET['price'];
    $connection = mysqli_connect('localhost', 'root', 'dev@1234', 'loja');
    
    //mysqli_close($connection);

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


