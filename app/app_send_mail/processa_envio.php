<?php

 print_r($_POST);

class Mensagem {
  private $para = null;
  private $assunto = null;
  private $mensagem = null;

  public function __get($atributo) {
    return $this->$atributo;
  }

  public function __set($atributo, $valor) {
    $this->$atributo = $valor;
  }

  public function mensagemValida(){
    //
  }
}

$mensagem = new Mensagem();
$mesangem->__set('para', $_POST['para']);
$mensagem-> __set('assunto', $_POST['assunto']);
$mensagem->__set('mensagem', $_POST['mensagem']);

?>