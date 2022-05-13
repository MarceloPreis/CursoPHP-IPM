<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <?php
    include_once 'conec.php';
    include_once 'acao.php'
    ?>


    <style>
        textarea:focus,
        input:focus,
        select:focus {
            outline: 0;
        }

        td {
            border: solid 1px black;
        }

        fieldset,
        hr,
        table {
            margin: 1em;
        }
    </style>

</head>

<body>
    <h2>Formulários de cadastro</h2>

    <fieldset>
        <legend>Cadastro de categoria</legend>
        <form action="acao.php" method="get">
            <label for="catdescricao">Decrição da categoria</label>
            <input type="text" id="catdescricao" name="catdescricao">
            <button type="submit">Eviar <span class="material-icons">send</span></button>
        </form>
    </fieldset>

    <!-- Tabela --> 
    <?php
    $table = 'MERCADO.TBCATEGORIA';
    $sSelect = "SELECT * FROM $table";
    $oResult = pg_query($oConexao, $sSelect);

    echo '<table>';
    while ($aResultado = pg_fetch_assoc($oResult)) {
        echo "<form action=acao.php method=get>  
                <tr>
                    <input type=hidden name=tabela value=$table></input>
                    <input type=hidden name=coluna value=catcodigo></input>
                    <td><input type=text name=codigo value=$aResultado[catcodigo] readonly></td>
                    <td><input type=text value=$aResultado[catdescricao] readonly></td>
                    <td><input type=submit name=submit value=excluir></td>
                </tr>
            </form>
        ";
    }
    echo '</table>';
    ?>
    <fieldset>
        <legend>Cadastro de Departamento</legend>
        <form action="acao.php" method="get">
            <label for="dptdescricao">Decrição do Departamento</label>
            <input type="text" id="dptdescricao" name="dptdescricao">
            <input type="submit">
        </form>
    </fieldset>

    <?php
    $sSelect = "SELECT * FROM MERCADO.TBDEPARTAMENTO";
    $oResult = pg_query($oConexao, $sSelect);

    echo '<table>';
    while ($aResultado = pg_fetch_assoc($oResult)) {
        echo "
            <form action=acao.php method=get>  
            <tr>
                <td><input type=hidden name=tabela value=MERCADO.TBDEPARTAMENTO></input></td>
                <td><input type=hidden name=coluna value=dptcodigo></input></td>
                <td><input type=text name=codigo value=$aResultado[dptcodigo] readonly></td>
                <td><input type=text value=$aResultado[dptdescricao] readonly></td>
                <td><input type=submit name=submit value=excluir></td>
            </tr>
            </form>
            ";
    }
    echo '</table>';
    ?>

    <fieldset>
        <legend>Cadastro de Cidade</legend>
        <form action="acao.php" method="get">
            <label for="cidnome">Nome da cidade</label>
            <input type="text" id="cidnome" name="cidnome">
            <input type="submit">
        </form>
    </fieldset>

    <?php
    $table = 'MERCADO.TBCIDADE';
    $sSelect = "SELECT * FROM $table";
    $oResult = pg_query($oConexao, $sSelect);

    echo '<table>';
    while ($aResultado = pg_fetch_assoc($oResult)) {
        echo "<form action=acao.php method=get>  
                <tr>
                    <td><input type=hidden name=tabela value=$table></input></td>
                    <td><input type=hidden name=coluna value=cidcodigo></input></td>
                    <td><input type=text name=codigo value=$aResultado[cidcodigo] readonly></td>
                    <td><input type=text value=$aResultado[cidnome] readonly></td>
                    <td><input type=submit name=submit value=excluir></td>
                </tr>
            </form>
            ";
    }
    echo '</table>';
    ?>
    <hr>

    <fieldset>
        <legend>Cadastro de clientes</legend>
        <form action="acao.php" method="get">
            <label for="clinome">Nome</label>
            <input type="text" id="clinome" name="clinome"><br>
            <label for="clicpf">CPF</label>
            <input type="text" id="clicpf" name="clicpf"><br>
            <label for="cidade">Cidade</label>
            <select name="clicidade" id="clicidade">

                <?php
                $sSelect = "SELECT * FROM MERCADO.TBCIDADE";
                $oResult = pg_query($oConexao, $sSelect);
                while ($aResultado = pg_fetch_assoc($oResult)) {
                    echo "<option value=$aResultado[cidcodigo]>$aResultado[cidnome]</option>";
                }

                ?>

            </select>
            <input type="submit">
        </form>
    </fieldset>

    <?php
    $table = 'MERCADO.TBCLIENTE';
    $sSelect = "SELECT clicodigo, clinome, clicpf, cidnome FROM mercado.tbcliente
                INNER JOIN mercado.tbcidade ON tbcidade.cidcodigo = tbcliente.cidcodigo
                ";
    $oResult = pg_query($oConexao, $sSelect);

    echo '<table>';
    while ($aResultado = pg_fetch_assoc($oResult)) {
        echo "<form action=acao.php method=get>  
                <tr>
                    <td><input type=hidden name=tabela value=$table></input></td>
                    <td><input type=hidden name=coluna value=clicodigo></input></td>
                    <td><input type=text name=codigo value=$aResultado[clicodigo] readonly></td>
                    <td><input type=text value=$aResultado[clinome] readonly></td>
                    <td><input type=text value=$aResultado[clicpf] readonly></td>
                    <td><input type=text value=$aResultado[cidnome] readonly></td>
                    <td><input type=submit name=submit value=excluir></td>
                </tr>
            </form>
            ";
    }
    echo '</table>';
    ?>

    <fieldset>
        <legend>Cadastro de Funcionarios</legend>
        <form action="acao.php" method="get">
            <label for="fcnnome">Nome</label>
            <input type="text" id="fcnnome" name="fcnnome"><br>
            <label for="fcndepartamento">Cidade</label>
            <select name="dptcodigo" id="fcndepartamento">

                <?php
                $sSelect = "SELECT * FROM MERCADO.TBDEPARTAMENTO";
                $oResult = pg_query($oConexao, $sSelect);
                while ($aResultado = pg_fetch_assoc($oResult)) {
                    echo "<option value=$aResultado[dptcodigo]>$aResultado[dptdescricao]</option>";
                }

                ?>

            </select>
            <input type="submit">
        </form>
    </fieldset>
    <?php
    $sSelect = "SELECT  fcncodigo, fcnnome, dptdescricao from mercado.tbfuncionario
                    inner join mercado.tbdepartamento ON tbdepartamento.dptcodigo = tbfuncionario.dptcodigo
                ";
    $oResult = pg_query($oConexao, $sSelect);

    echo '<table>';
    while ($aResultado = pg_fetch_assoc($oResult)) {
        echo "<form action=acao.php method=get>  
                <tr>
                    <td><input type=hidden name=tabela value=mercado.tbfuncionario></input></td>
                    <td><input type=hidden name=coluna value=fcncodigo></input></td>
                    <td><input type=text name=codigo value=$aResultado[fcncodigo] readonly></td>
                    <td><input type=text value=$aResultado[fcnnome] readonly></td>
                    <td><input type=submit name=submit value=excluir></td>
                </tr>
            </form>
            ";
    }
    echo '</table>';
    ?>

    <fieldset>
        <legend>Cadastro de Fornecedor</legend>
        <form action="acao.php" method="get">
            <label for="fornome">Nome do Fornecedor</label>
            <input type="text" id="fornome" name="fornome"><br>
            <label for="fcndepartamento">Cidade</label>
            <select name="dptcodigo" id="fcndepartamento">

                <?php
                $sSelect = "SELECT * FROM MERCADO.TBCIDADE";
                $oResult = pg_query($oConexao, $sSelect);
                while ($aResultado = pg_fetch_assoc($oResult)) {
                    echo "<option value=$aResultado[cidcodigo]>$aResultado[cidnome]</option>";
                }

                ?>

            </select>
            <input type="submit">
        </form>
    </fieldset>




</body>

</html>