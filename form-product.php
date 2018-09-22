<?php include("header.php"); ?>

    <h1>Formulário de Produto</h1>
    <form action="add-product.php">
        <table class="table">
            <tr>
                <td>Nome</td>
                <td><input class="form-control" type="text" name="name"></td>
            </tr>
            <tr>
                <td>Preço</td>
                <td><input class="form-control" type="number" name="price"></td>
            </tr> 
            <tr>
                <td><button class="btn btn-primary"type="submit">Cadastrar</button></td>
            </tr>
        </table>    
    </form>

<?php include("footer.php"); ?>