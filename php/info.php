<?php 
if(isset($_POST['produtoNome']) && isset($_POST['categoriaproduto']) && isset($_POST['marcaProduto']) && isset($_POST['qntProduto'])   && isset($_POST['fornecedoraProduto']) && isset($_POST['dataCompra'])){
    $produtoNome = $_POST['produtoNome'];
    $categoriaProduto = $_POST['categoriaproduto'];
    $marcaProduto = $_POST['marcaProduto'];
    $qntProduto = $_POST['qntProduto'];
    $fornecedor = $_POST['fornecedoraProduto'];
    $dataCompra = $_POST['dataCompra'];
}
else
{
    echo 'Erro';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        *{
            padding: 0%;
            margin:  0%;
            box-sizing:border-box;
            font-family: 'Roboto', sans-serif;
        }
        body
        {

            background : rgb(28, 94, 216);
            text-align : center;
            color : white;

        

        }

        .title{
            background-color : black;

        }
        
    </style>
</head>
<body>
        
        <div class = "title">
        <h1> Informação Do Produto Cadastro </h1>
        <br>
        </div>

        <br>
        <h2> Nome Do Produto : <? echo $produtoNome; ?> </h2> 
        <br>
        <h2> Categoria : <? echo $categoriaProduto; ?> </h2> 
        <br>
        <h2> Marca  : <? echo $marcaProduto; ?> </h2>
        <br> 
        <h2> Fornecedor :  <? echo $fornecedor; ?> </h2> 
        <br>
        <h2> Data Da Compra :  <? echo $dataCompra; ?> </h2> 

    
</body>
</html>

