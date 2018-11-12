CREATE TABLE `cooper`.`Pessoa` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `cpf` VARCHAR(45) NULL,
  `data_nascimento` DATE NULL,
  `email` VARCHAR(45) NULL,
  `habilidades` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));
