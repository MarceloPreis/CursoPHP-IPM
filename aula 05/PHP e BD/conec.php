<?php
    $sHost='localhost';
    $sPort='5432';
    $dbName='postgres';
    $sUser='postgres';
    $sPassword='celo';
    
    $sConexao= "host=$sHost
                port=$sPort
                dbname=$dbName
                user=$sUser
                password=$sPassword";
    $oConexao= pg_connect($sConexao);
?>