<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>

    <style>
        form {
            padding: 20px;
            ;
        }
    </style>

</head>

<body>

    <form action="" method="get">
        <h2>1)</h2>
        <input type="number" name="ex1">
        <br>
        <input type="submit">
        <?php echo ex1() ?>

    </form>

    <form action="" method="get">
        <h2>2)</h2>
        <input type="number" name="ex2n1">
        <input type="number" name="ex2n2">
        <br>
        <input type="submit">
        <?php echo ex2() ?>
    </form>

    <form action="" method="get">
        <h2>3)</h2>
        <input type="text" name="ex3">
        <br>
        <input type="submit">
        <?php echo ex3(); ?>
    </form>

    <form action="" method="get">
        <h2>4)</h2>
        <input type="text" name="ex4n1">
        <input type="text" name="ex4n2">
        <br>
        <input type="submit">
        <?php echo ex4(); ?>
    </form>

    <form action="" method="get">
        <h2>5)</h2>
        <input type="text" name="ex5n1">
        <input type="text" name="ex5n2">
        <input type="text" name="ex5n3">
        <input type="text" name="ex5n4">
        <br>
        <input type="submit">
        <?php echo ex5(); ?>
    </form>

    <form action="" method="get">
        <h2>6)</h2>
        <input type="number" name="comp" placeholder="Comprimeto">
        <input type="number" name="larg" placeholder="Largura">
        <input type="submit">
        <?php echo ex6() ?>
    </form>

    <form action="" method="get">
        <h2>7)</h2>
        <input type="text" name="peso" placeholder="Peso">
        <input type="text" name="altura" placeholder="Altura">
        <input type="submit">
        <?php echo ex7() ?>
    </form>

    <form action="" method="post">
        <h2>8)</h2>
        <input type="text" name="nome" placeholder="Nome">
        <input type="password" name="senha" placeholder="Senha">
        <input type="submit">
        <?php echo ex8() ?>
    </form>

    <form action="" method="post">
        <h2>9)</h2>
        <input type="checkbox" name="carro"> Carro
        <input type="checkbox" name="moto"> Moto
        <input type="checkbox" name="Bike"> Bike
        <input type="checkbox" name="Trem"> Trem
        <input type="submit">
        <?php echo ex9() ?>
    </form>

    <form action="" method="post">
        <h2>10)</h2>
        <input type="radio" name="radio" value="-18"> -18 <br>
        <input type="radio" name="radio" value="+18 -35"> +18 -35 <br>
        <input type="radio" name="radio" value="+35 -65"> +35 -65 <br>
        <input type="radio" name="radio" value="65+"> 65+ <br>
        <input type="submit">
        <?php echo ex10() ?>
    </form>

    <form action="" method="get">
        <h2>11)</h2>
        <select name="select" id="">
            <?php
            for ($i = 0; $i < 10; $i++) {
                echo "<option value=$i>$i</option>";
            }
            ?>
        </select>
        <input type="submit">
        <?php echo ex11() ?>
    </form>

    <form action="" method="get">
        <h2>12)</h2>
        <input type="text" name="raio" placeholder="Raio">
        <input type="submit">
        <?php echo ex12() ?>
    </form>

    <form action="" method="get">
        <h2>13)</h2>
        <input type="text" name="ex13" placeholder="Numeros separado por ,">
        <input type="submit">
        <?php echo ex13() ?>
    </form>

    <form action="" method="get">
        <h2>14)</h2>
        <input type="text" name="nomeEx14" placeholder="Nome">
        <input type="password" name="senhaEx14" placeholder="Senha">
        <input type="submit">
        <?php echo ex14() ?>
    </form>

    <h2>15</h2>
    <?php echo ex15() ?>

    <form action="" method="get">
        <h2>16)</h2>
        <input type="text" name="nomeEx16" placeholder="Nome"><br>
        <input type="number" name="sal_hr" placeholder="Salário por hora"><br>
        Data de Nascimento: <br>
        <input type="date" name="data_nasc"><br>
        <input type="text" name="aluguel" placeholder="Aluguel">
        <input type="submit"><br>
        <?php echo ex16() ?>
    </form>

    <?php

    function ex1()
    {
        if (isset($_GET['ex1'])) {
            $n = $_GET['ex1'];
            echo " Resultado Ex1 = ";
            for ($i = 0; $i <= $n; $i++) {
                echo $i;
            }
        } else {
            echo "preencha os campos";
        }
    }


    function ex2()
    {
        if (isset($_GET['ex2n1']) && isset($_GET['ex2n2'])) {
            $n1 = $_GET['ex2n1'];
            $n2 = $_GET['ex2n2'];
            echo "Resultado Ex2 = ";
            for ($i = $n1; $i <= $n2; $i++) {
                echo  $i;
            }
        } else {
            echo "preencha os campos";
        }
    }

    function ex3()
    {
        if (isset($_GET['ex3'])) {
            $str = $_GET['ex3'];
            for ($i = 1; $i <= strlen($str); $i++) {
                echo $i;
            }
        } else {
            echo "Preencha os campos";
        }
    }

    function ex4()
    {
        if (isset($_GET['ex4n1']) && isset($_GET['ex4n1'])) {
            $str1 = $_GET['ex4n1'];
            $str2 = $_GET['ex4n2'];
            $soma = 0;
            for ($i = 1; $i < strlen($str1); $i++) {
                if ($str1[$i] == $str2) $soma++;
            }
            echo "Resultado = " . $soma;
        } else {
            echo "Preencha os campos";
        }
    }

    function ex5()
    {
        if (((isset($_GET['ex5n1']) && isset($_GET['ex5n2']) && (isset($_GET['ex5n3']))))) {
            $soma = $_GET['ex5n1'];
            $soma += $_GET['ex5n2'];
            $soma += $_GET['ex5n3'];
            $soma += $_GET['ex5n4'];

            echo "Resultado = " . $soma / 4;
        }
    }

    function ex6()
    {
        if (isset($_GET['comp']) && isset($_GET['larg'])) {
            $comp = $_GET['comp'];
            $larg = $_GET['larg'];
            echo "Área = " . $comp * $larg;
            echo "  Perímetro = " . ($comp * 2) + ($larg * 2);
        }
    }

    function ex7()
    {
        if ((isset($_GET['peso']) && (isset($_GET['altura'])))) {
            $peso = (float) $_GET['peso'];
            $altura = (float) $_GET['altura'];
            $imc = $peso / (($altura * $altura) / 10000);
            if ($imc > 25) {
                echo "Você está acima do peso - $imc";
            } else {
                echo "Você está saudável - $imc";
            }
        }
    }

    function ex8()
    {
        if (isset($_POST['senha']) && isset($_POST['nome'])) {
            $senha = $_POST['senha'];
            $nome = $_POST['nome'];
            if ($nome == 'matheus' && $senha == 'pastel') {
                echo "Autenticação realizada com sucesso";
            } else {
                echo "Você não tem permissão de visualizar essa página";
            }
        }
    }

    function ex9()
    {
        if (isset($_POST['carro'])) echo "Carro ";
        if (isset($_POST['moto'])) echo "Moto ";
        if (isset($_POST['bike'])) echo "Bike ";
        if (isset($_POST['trem'])) echo "Trem ";
    }

    function ex10()
    {
        if (isset($_POST['radio'])) {
            $op = $_POST['radio'];
            echo $op;
        } else {
            echo "Selecione uma opção";
        }
    }

    function ex11()
    {
        if (isset($_GET['select'])) {
            $qtd = ($_GET['select']);
            for ($i = 0; $i < $qtd; $i++) echo "&#9835;";
        }
    }

    function ex12()
    {
        if (isset($_GET['raio'])) {
            $pi = 3.14159;
            $r = $_GET['raio'];

            echo $pi * ($r * $r);
        }
    }

    function ex13()
    {
        if (isset($_GET['ex13'])) {
            $input = $_GET['ex13'];
            $array = [];
            $str = str_replace(",", "", $input);
            for ($i = 0; $i < strlen($str); $i++) {
                $array[$i] = ($str[$i] * $str[$i] * $str[$i]);
            }
            echo "Resultado = " . implode(", ", $array);
        }
    }

    function ex14()
    {
        if (isset($_GET['nomeEx14']) && isset($_GET['senhaEx14'])) {
            $nome = $_GET['nomeEx14'];
            $senha = $_GET['senhaEx14'];

            if ($nome === $senha) echo "Nome e senha inválidos";
            else echo "Show";
        }
    }

    function ex15($array = ['a', 'b', 'c', 'd', 'a', 'a', 'a', 'a', 'a', 'a'])
    {
        $max = count($array);
        $soma = 0;
        for ($i = 0; $i < $max; $i++) {
            if ($array[$i] == 'a') $soma++;
        }
        echo "Array: " . implode(",", $array) . "<br>";
        echo "Qtd de a = $soma";
    }

    function ex16()
    {
        if (isset($_GET['nomeEx16']) && isset($_GET['nomeEx16']) && isset($_GET['nomeEx16']) && isset($_GET['nomeEx16'])) {
            define("SAL_HR", 200);
            $nome = $_GET['nomeEx16'];
            $data = $_GET['data_nasc'];
            $sal = $_GET['sal_hr'];
            $aluguel = $_GET['aluguel'];

            $data = date('Y', strtotime($data));
            $idade = date("Y") - $data;

            $sal =  SAL_HR * $sal;

            echo "Olá $nome, você tem $idade anos, você ganha R$ $sal por mês. Sabendo que seu aluguel é de R$ $aluguel, lhe resta R$" . $sal - $aluguel . ".";
        }
    }

    ?>





</body>

</html>