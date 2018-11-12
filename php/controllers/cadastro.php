<?php

require_once "php/controllers/pessoa.php";
require_once "php/models/pessoa.php";

class CadastroController extends Pessoa {

  function salvar() {
    $pessoa = new Pessoa();
    $pessoa->setId($_POST['id']);
    $pessoa->setNome($_POST['nome']);
    $pessoa->setCpf($_POST['cpf']);
    $pessoa->setDataNascimento($_POST['dataNascimento']);
    $pessoa->setEmail($_POST['email']);
    $pessoa->setHabilidades($_POST['habilidades']);

    return (new CadastroModel())->salvar($pessoa);
  }

  function listarUnico() {
    return (new CadastroModel())->listarUnico($_POST['id']);
  }

  function listarTodos() {
    return (new CadastroModel())->listarTodos();
  }
}

?>
