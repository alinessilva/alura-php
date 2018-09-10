<?php include("header.php"); ?>

    <h1>Formulário de Produto</h1>
    <form action="add-product.php">
        <label for="">Nome</label>
        <input type="text" name="name"><br/>
        <label for="">Preço</label>
        <input type="number" name="price"><br/>
        <input type="submit" value="Cadastrar">
    </form>

<?php include("footer.php"); ?>