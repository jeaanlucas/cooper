<?php

class PessoaController {

  private $id;
  private $nome;
  private $cpf;
  private $dataNascimento;
  private $email;
  private $habilidades = [];

  public function setId($id) {
    $this->id = $id;
  }

  public function getId() {
    return $this->id;
  }

  public function setNome($nome) {
    $this->nome = $nome;
  }

  public function getNome() {
    return $this->nome;
  }

  public function setCpf($cpf) {
    $this->cpf = $cpf;
  }

  public function getCpf() {
    return $this->cpf;
  }

  public function setDataNascimento($dataNascimento) {
    $this->dataNascimento = $dataNascimento;
  }

  public function getDataNascimento() {
    return $this->dataNascimento;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setHabilidades($habilidades) {
    $this->habilidades = $habilidades;
  }

  public function getHabilidades() {
    return $this->habilidades;
  }

}

?>
