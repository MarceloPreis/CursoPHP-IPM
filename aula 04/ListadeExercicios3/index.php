<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include_once("functions.php"); ?>
</head>

<body>

    <?php
    // 2)
    $ops = [0 => 'Banana', 'Maçã', 'Abacaxi', 'Tomate', 'Morango', 'Pastel', 'Limão', 'Abacate', 'Melão'];
    $name = "fruta";
    $key = true;
    montaSelect($ops, $name, $key);
    ?>

    <br><br>

    <?php
    // 3)
    $ops = [0 => 'Banana', 'Maçã', 'Abacaxi', 'Tomate', 'Morango', 'Pastel', 'Limão', 'Abacate', 'Melão'];
    $name = "fruta";
    $key = true;
    montaRadio($ops, $name, $key, 3);
    ?>

    <br><br>

    <?php
    // 3)
    $ops = [0 => 'Banana', 'Maçã', 'Abacaxi', 'Tomate', 'Morango', 'Pastel', 'Limão', 'Abacate', 'Melão'];
    $name = "fruta";
    $key = true;
    montaCheckBox($ops, $name, $key, 3);
    ?>

    <br><br>

    <h2>Pizzaria</h2>
    <?php
    //5

    ?>

    <form>
        <h1> Marchello"s Pizzaria </h1>

        <fieldset>
            <legend>Informações e Endereço</legend>

            <label for="name"> Nome:</label>
            <?php montaInput("text", "name", "name", "", "") ?>
            <!-- <input type="text" id="name"> -->

            <label for="name"> Sobrenome:</label>
            <?php montaInput("text", "sobrenome", "sobrenome", "", "") ?>
            <!-- <input type="text" id="name"> -->

            <label for="tel"> Telefone: </label>
            <?php montaInput("tel", "tel", "tel", "", "") ?>
            <!-- <input type="tel" id="tel"> -->
            </div>

            <br><br>
            <div>

                <label for="rua"> Rua: </label>
                <?php montaInput("text", "rua", "rua", "", "") ?>
                <!-- <input type="text" id="rua"> -->

                <label for="bairro"> Bairro: </label>
                <?php montaInput("text", "bairro", "bairro", "", "") ?>
                <!-- <input type="text" id="bairro"> -->

                <label for="nr"> Número: </label>
                <?php montaInput("number", "n", "n", "", "") ?>
                <!-- <input type="number" id="nr"> -->
            </div>
        </fieldset>
        <fieldset>
            <legend>Como quer sua pizza? </legend>
            Tamanho: <br>
            <div class="campo">
                <?php montaRadio([0 => 'pequena', 'media', 'grande'], "tam", true, 0) ?>
                <!-- <input type="radio" id="low" value="baixo" name="xp"> -->
            </div>
            <br><br>
            </div>
            Sabores: <br>
            <?php
            $ops = [0 => 'Sabor', '4 Queijos', 'Pepperoni', 'strogonoff', 'mexicana', 'calabresa', 'chocolate branco', 'chocolate preto'];
            montaSelect($ops, "sabor1", true);
            montaSelect($ops, "sabor2", true);
            montaSelect($ops, "sabor3", true);
            montaSelect($ops, "sabor4", true);
            ?>
            <div>

            </div>
            <br><br>
            Observações: <br>
            <textarea rows="5" type="radio" id="info" name="info" style="width: 30cm;"></textarea>
        </fieldset>
        <fieldset>
            <legend>Pagamento</legend>
            <?php montaSelect(['Cartão', 'Dinheiro', 'Cheque'], 'pagamento', true)?>
        </fieldset>
        <br />
        <?php montaInput("submit", '', '', 'Enviar', '')?> 
    </form>

</body>

</html>