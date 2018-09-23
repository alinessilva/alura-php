<?php include("header.php");
include("connection.php");
include("bd-products.php");?>

<?php if (array_key_exists("removed", $_GET) && $_GET["removed"]==true){?>
    <p class="alert-success">Produto removido com sucesso!</p>
<?php } ?>


<table class="table table-striped table-bordered">
    <?php
        $products = listProducts($connection);
        foreach($products as $product) :
    ?>
    <tr>
        <td><?=$product['name']?></td>
        <td><?=$product['price']?></td>
        <td>
            <a href="remove-product.php?products_id=<?=$product['products_id']?>" class="text-danger">Remover</a>
        </td>
    </tr>
    <?php
        endforeach
    ?>
</table>

<?php include("footer.php"); ?>