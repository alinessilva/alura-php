<?php include("header.php");
include("connection.php");
include("bd-products.php");?>

<table class="table table-striped table-bordered">
    <?php
        $products = listProducts($connection);
        foreach($products as $product) :
    ?>
    <tr>
        <td><?= $product['name']?></td>
        <td><?= $product['price']?></td>
    </tr>
    <?php
        endforeach
    ?>
</table>

<?php include("footer.php"); ?>