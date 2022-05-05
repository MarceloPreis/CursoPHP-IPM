<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    function ex1()
    {
        if (isset($_GET['qtd_luz'])) {
            $qtd = $_GET['qtd_luz'];
            if ($qtd <= 50) $valor = 3.5;
            if ($qtd > 50 && $qtd <= 150) $valor = 4.0;
            if ($qtd > 150 && $qtd <= 250) $valor = 5.3;
            if ($qtd > 250) $valor = 6.7;

            echo "R$ " . $qtd * $valor;
        }
    }

    function ex2()
    {
        if (isset($_GET['mes'])) {
            $mes = $_GET['mes'];

            $meses = [
                1 => 'Janeiro',
                'Fevereiro',
                'Março',
                'Abril',
                'Maio',
                'Junho',
                'Julho',
                'Agosto',
                'Setembro',
                'Outubro',
                'Novembro',
                'Dezembro'
            ];

            echo $meses[$mes];
        }
    }

    function ex3()
    {
        if (isset($_GET['nomes'])) {
            $nomes = $_GET['nomes'];
            $arr_nomes = [];
            $arr_nomes = explode(",", $nomes);

            sort($arr_nomes);
            echo "Resultado = " . implode(", ", $arr_nomes);
        }
    }

    function ex4()
    {
        if (isset($_GET['n'])) {
            $n = ($_GET['n']);

            define("PREMIO", "Saco de batata");

            $sorted =  rand(0, 20);

            if ($sorted == $n) {
                echo "GANHOU! Foi sorteado ($sorted) - VOCÊ GANHOU" . PREMIO . "!";
            } else {
                echo "Você perdeu! Foi sorteado o número ($sorted), e você escolheu o número ($n).";
            }
        }
    }

    function ex5()
    {
        define("TAM", 6);
        $alfa = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pos = strlen($alfa);
        for ($i = 0; $i < TAM; $i++) {
            $n = rand(0, $pos);
            $senha[] = $alfa[$n];
        }

        return "Sua senha é " . implode("", $senha);
    }

    function ex6()
    {
        if (isset($_GET['text'])) {
            $txt = $_GET['text'];

            $arr = explode(" ", $txt);

            return count($arr);
        }
    }
    ?>
</head>

<body>
    <h2>1)</h2>
    <form action="" method="get">
        <input type="number" name="qtd_luz" placeholder="Quantidade Luz">
        <input type="submit">
        <?php ex1() ?>
    </form>

    <h2>2)</h2>
    <form action="" method="get">
        <input type="number" name="mes" placeholder="Numero do Mês">
        <input type="submit">
        <?php ex2() ?>
    </form>

    <h2>3)</h2>
    <form action="" method="get">
        <input type="text" name="nomes" placeholder="Nomes separados por ,">
        <input type="submit">
        <?php ex3() ?>
    </form>

    <h2>4)</h2>
    <form action="" method="get">
        <input type="text" name="n" placeholder="Numero para soreteio">
        <input type="submit">
        <?php ex4() ?>
    </form>

    <h2>5)</h2>
    <form action="" method="get">
        <input type="submit">
        <?php ex5() ?>
    </form>

    <h2>6)</h2>
    <form action="" method="get">
        <textarea name="text" id="" cols="30" rows="10"></textarea><br>
        <input type="submit">
        <?php "Total de plavras = " . ex6() ?>
    </form>


</body>

</html>