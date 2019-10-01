<?php

class Pessoa {
    private $nome, $email;

    public function setNome ($nome){
      $this -> nome = $nome;
    }
    public function setEmail ($email){
      $this -> emai = $email;
    }
    public function getNome (){
      return $this -> nome;
    }
    public function getEmail (){
      return $this -> email;
    }
    public function listar(){
      echo "Nome: " . $this->nome;
      echo "<br>E-mail: " . $this->email;
}
}
 ?>
