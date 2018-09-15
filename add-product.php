<?php include("header.php"); ?>

<?php
    $name = $_GET['name'];
    $price = $_GET['price'];
    $connection = mysqli_connect('localhost', 'root', 'dev@1234', 'loja');
    // $query = "insert into products (name, price) values ('" . $name . "', " . $price . ")"; concatenação
    $query = "insert into products (name, price) values ('{$name}', {$price})"; // interpolação
    
    mysqli_query($connection, $query);
    mysqli_close($connection);
?>

    <p class="alert-sucess">Produto, <?= $name; ?>, <?= $price ?> adicionado com sucesso!</p>

<?php include("footer.php"); ?>


