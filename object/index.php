<?php 


class Pessoa {

    public $nome ="paloma";
    
    public function falar (){
        echo "ola ";
   
    }
}


$paloma = new Pessoa;
echo $paloma->nome;

echo "<br>";

$paloma->falar();



