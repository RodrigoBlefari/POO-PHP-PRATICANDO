<?php

 class Pessoa {
  const PLANETA = 'Terra';
  public $nome;

  function __construct($nome = 'Sem nome')
  {
    $this->nome = $nome;
    echo 'Constante ' . __CLASS__ . '<br>'; 
  }
  public function setNome($nome)
  {
    $this->nome = $nome;
  }

  public function getNome()
  {
    return $this->nome;
  }
  
  public function clearNome()
 {
   $this->nome = 'Nome Limpo';
 }
}