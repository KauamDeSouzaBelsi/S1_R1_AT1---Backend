<?php 
require_once 'Produtos.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $prod = new Produto($_POST['nome'], $_POST['preco']); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de produtos</title>
</head>
<body>
    <h1>cadastre o produto</h1>
    <form action="" method="post">
        <label for="nome">nome: </label>
        <input type="text" name="nome" id="">

        <label for="preço">preço: </label>
        <input type="number" name="preco" id="" step="0.01">

        <input type="submit" value="cadastrar">
        <input type="reset" value="resetar">
    </form>
    <?php 
    if(isset($prod)) {
        $prod -> mostrarDados();
    }
    ?>
</body>
</html>