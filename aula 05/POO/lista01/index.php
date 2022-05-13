<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
    <?php 
    include_once "class_cliente.php";
    include_once "class_contaBancaria.php" 
    ?>
</head>
<body>
    <?php 
        $p1 = new Cliente();
        $p1->setNome('Marcelo');
        $p1->setEmail('marcelo@email.com');
        $p1->setTelefone('47996042480');

        $contaP1 = new ContaBancaria();
        $contaP1->setCliente($p1);
        $contaP1->dataCriacao = '20-06-2006';
        $contaP1->saldoAtual = 8000;
        $contaP1->saldoInicial = 8000;

        $contaP1->sacar(500);
        $contaP1->sacar(300);
        $contaP1->deposito(100);
        
        $contaP1->extrato();
    ?>
</body>
</html>