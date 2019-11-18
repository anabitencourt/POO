<?php
class gasto{
  private $renda, $descricao, $data, $despesas;


  public function setRenda($nomeRenda){
    $this->renda = $renda;
  }
  public function setDescricao($Descricao){
    $this->Descricao = $descricaodescr
  }
  public function setData ($data){
    $this ->data= $data;
  }
  public function setdespesas ($despesas){
    $this ->despesas= $despesas;
  }

  public function getRenda(){
    return $this->renda;
  }
  public function getDescricao(){
    return $this->Descrica;
  }
  public function getData(){
    return $this ->data;
  }
  public function getDespesas(){
    return $this ->despesas;
  }

  public function cadastrar($renda, $descricao, $data, $despesas){
    $this->setRenda($renda);
    $this->setDescricao($descricao);
    $this->setData($data);
    $this->setDespesas($despesas);
    //query de consulta para inclusão
    echo $sqlInsert = "insert into gasto
    (renda, descricao, data, despesas)
    values
    ('{$this->getRenda()}','{$this->getDescricao()}','{$this->getData()}','{$this->getDespesas()}')";
    //executar a query
    include("Conexao.php");
    $conectar = new conexao();
    if($retornoInsert = $conectar->getConectar()->query($sqlInsert)){
      return 1;//retorna 1 caso seja gravado
    }else {
      return 0;//retorna 0 caso não seja gravado
    }
  }
  public function listar(){
    $lista = "select * from gasto";
    include ("Conexao.php");
    $objetoListar = new conexao();
    $retornoBanco = $objetoListar->getConectar()->query($lista);
    $dados = array();
    while($temp = $retornoBanco->fetch_array()) {
      $dados[]=$temp;
    }
    echo "Foram encontrados " . count($dados) . " registros.";//verifica quantos registros tem no vetor
    if (count($dados) > 0){
      ?>
      <table border=1>
        <tr>
          <td>Id</td>
          <td>Renda</td>
          <td>Descrição</td>
          <td>Data</td>
          <td>Despesas</td>
        </tr>
        <?php
        foreach ($dados as $key => $value) {
          echo "<tr><td>" . $value["id"];
          echo "</td><td>" . $value["renda];
          echo "</td><td>" . $value["descricao"];
          echo "</td><td>" . $value["data"];
          echo "</td><td>" . $value["despesas"];
          echo "</td></tr>";
        }
        ?>
      </table>
      <?php
    }
  }
}
?>
