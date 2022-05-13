<?php
if (isset($_GET['submit'])) {
    $acao = $_GET['submit'];
    if ($acao == 'excluir'){
        montaDelete($_GET['codigo'], $_GET['coluna'], $_GET['tabela']);
    }
    header("location: index.php");
}

function montaDelete($codigo, $col, $tabela){
    include 'conec.php';
    $sDelete = "DELETE FROM $tabela WHERE $col = $codigo";
    pg_query($oConexao, $sDelete);
    return 'Deletado com sucesso';
}

if (isset($_GET['catdescricao'])) {
    include 'conec.php';
    $catDescricao = $_GET['catdescricao'];
    $sInsert = "INSERT INTO MERCADO.tbcategoria (catdescricao) VALUES ('$catDescricao')";
    pg_query($oConexao, $sInsert);
    header("location: index.php");
}

if (isset($_GET['dptdescricao'])) {
    include 'conec.php';
    $dptdescricao = $_GET['dptdescricao'];
    $sInsert = "INSERT INTO MERCADO.tbdepartamento (dptdescricao) VALUES ('$dptdescricao')";
    pg_query($oConexao, $sInsert);
    header("location: index.php");
}

if (isset($_GET['cidnome'])) {
    include 'conec.php';
    $cidnome = $_GET['cidnome'];
    $sInsert = "INSERT INTO MERCADO.tbcidade (cidnome) VALUES ('$cidnome')";
    pg_query($oConexao, $sInsert);
    header("location: index.php");
}

if (isset($_GET['clinome']) && isset($_GET['clicpf'])){
    include 'conec.php';
    $clinome = $_GET['clinome'];
    $clicpf = $_GET['clicpf'];
    $clicidade = $_GET['clicidade'];
    $sInsert = "INSERT INTO MERCADO.tbcliente (clinome, clicpf, cidcodigo) VALUES ('$clinome', '$clicpf', '$clicidade')";

    pg_query($oConexao, $sInsert);
    header("location: index.php");

}
if (isset($_GET['fcnnome'])){
    include 'conec.php';
    $fcnome = $_GET['fcnnome'];
    $dptcodigo = $_GET['dptcodigo'];
    $sInsert = "INSERT INTO MERCADO.tbfuncionario (fcnnome, dptcodigo) VALUES ('$fcnome', '$dptcodigo')";
    // echo "$sInsert";
    pg_query($oConexao, $sInsert);
    header("location: index.php");

}

?>


