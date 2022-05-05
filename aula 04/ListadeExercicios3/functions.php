<?php

// 2)
function montaSelect($ops, $name, $key){
    echo "<select name=$name id=''>";
    for ($i = 0; $i<count($ops); $i++){
        $op = ($key) ? $i : $ops[$i];
        echo "<option value=$op>$ops[$i]</option>";
    }
    echo "</select>";
}

function montaRadio($ops, $name, $key, $selected){
     
    for ($i = 0; $i<count($ops); $i++){
        $op = ($key) ? $i : $ops[$i];
        $checked = $i == $selected ? "checked" : "";
        echo "<input type='radio' value=$op name='$name' $checked>$ops[$i]</input></br>";
    }
}

function montaCheckBox($ops, $name, $key, $selected){

       for ($i = 0; $i<count($ops); $i++){
        $op = ($key) ? $i : $ops[$i];
        $checked = $i == $selected ? "checked" : "";
        echo "<input type='checkbox' value=$op name='$name' $checked>$ops[$i]</input></br>";
    }
}

function montaInput($type, $name, $id, $value, $info){
    echo "<input type=$type name=$name id=$id value=$value>$info</input>";
}
