<?php
include ("pessoa.php");
$pessoa1 = new Pessoa();
$pessoa1->setNome($_POST["nome"]);
$pessoa1->getEmail($_POST["email"]);
$pessoa1->listar();
 ?>
