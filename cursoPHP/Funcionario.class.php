<?php
class Funcionario {
    var $nome, $salario;

    function __construct($nome, $salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    function aumentoSalario($valor){
        $this->salario += $valor;
    }

    function roubar($func, $roubo){
        $func->salario-=$roubo;
        $this->salario+=$roubo;
    }
}


?>