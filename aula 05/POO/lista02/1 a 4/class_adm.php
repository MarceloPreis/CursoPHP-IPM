<?php
class Adm extends Usuario {
    public function hello(){
        echo "Olá administrado: $this->nome";
    }
}