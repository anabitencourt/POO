<?php
  $id = new gasto ();
  $renda = $_POST["renda"];
  $descricao = $_POST["descricao"];
  $despesas = $_POST["despesas"];
  $data = $_POST["data"];

  $inserir = $id->cadastrar ($renda, $descricao, $despesas, $data);
    if ($inserir) {
      echo "sucesso!";
    }else{
      echo "Erro!";
    }
?>

//include("../model/pessoa.php");
//$pessoa1 = new pessoa();
//$nome = $_POST["nome"];
//$email =$_POST["email"];
//$dataNascimento = $_POST["dataNascimento"];

//$inserir = $pessoa1->cadastrar($nome, $email, $dataNascimento);
//if ($inserir==1){
  //echo "Dados gravados com sucesso";
//}else{
  //echo "Erro ao gravar os dados";}
//$pessoa1->listar();
