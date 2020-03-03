<?php
class Programador extends Pessoa {
  public $linguagem;

  function construct($linguagem)
  {
    $this->linguagem = $linguagem;
  }

  public function setLinguagem($linguagem)
  {
    $this->linguagem = $linguagem;
  }

  public function getLinguagem()
  {
    return $this->linguagem;
  }
  
  public function  clearLinguagem()
  {
    $this->linguagem = '';
  }
}