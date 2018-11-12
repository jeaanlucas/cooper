<?php

require_once "php/config/conexao.php";
require_once "php/controllers/pessoa.php";

class CadastroModel {

  public function salvar(PessoaController $pessoa) {
    try {
      return !empty($pessoa->getId() ? $this->atualizaRegistro($pessoa) : $this->insereRegistro($pessoa));
    } catch (Exception $e) {
       die($e->getMessage());
    }
  }

  public function listarUnico($id = "") {
    $sql = "SELECT nome,
                   cpf,
                   data_nascimento,
                   email,
                   habilidades
            FROM pessoa
            WHERE id = :id";
    $conn = Conexao::getInstance()->prepare($sql);
    $conn->bindValue(":id", $id);

    return $conn->execute();
  }

  public function listarTodos() {
    $sql = "SELECT nome,
                   cpf,
                   data_nascimento,
                   email,
                   habilidades
            FROM pessoa";
    $conn = Conexao::getInstance()->prepare($sql);

    return $conn->execute();
  }

  private function atualizaRegistro(PessoaController $pessoa) {
    $sql = "UPDATE pessoa SET nome = :nome,
                              cpf = :cpf,
                              data_nascimento = :data_nascimento,
                              email = :email,
                              habilidades = :habilidades
            WHERE id = :id";
    $conn = Conexao::getInstance()->prepare($sql);

    $conn->bindValue(":nome", $pessoa->getNome());
    $conn->bindValue(":cpf", $pessoa->getCpf());
    $conn->bindValue(":data_nascimento", $pessoa->getDataNascimento());
    $conn->bindValue(":email", $pessoa->getEmail());
    $conn->bindValue(":habilidades", implode(',', $pessoa->getHabilidades()));
    $conn->bindValue(":id", $pessoa->getId());

    return $conn->execute();
  }

  private function insereRegistro(PessoaController $pessoa) {
    $sql = "INSERT INTO pessoa (nome,
                                cpf,
                                data_nascimento,
                                email,
                                habilidades
                               ) VALUES (
                                :nome,
                                :cpf,
                                :data_nascimento,
                                :email,
                                :habilidades)";
    $conn = Conexao::getInstance()->prepare($sql);

    $conn->bindValue(":nome", $pessoa->getNome());
    $conn->bindValue(":cpf", $pessoa->getCpf());
    $conn->bindValue(":data_nascimento", $pessoa->getDataNascimento());
    $conn->bindValue(":email", $pessoa->getEmail());
    $conn->bindValue(":habilidades", implode(',', $pessoa->getHabilidades()));

    return $conn->execute();
  }

}

?>
