<?php

class Conexao {

  public static $db;

  public static function getInstance() {
    if (!isset(self::$db)) {
      self::$db = new PDO('mysql:host=localhost;dbname=cooper', 'cooper', 'cooper',
      array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
      self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      self::$db->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
    }

    return self::$db;
  }

}

?>
