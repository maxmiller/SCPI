<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 18/03/16
 * Time: 09:31
 */

namespace IFRN;

use PDO;

class Conexao
{
   // private $host = 'localhost';
  //  private $database = 'copeinca';
  //  private $user = 'copeinca';
   // private $password = '@#2kC57JfhL9osU!';
 //   private $con;
    public static $instance;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {

            self::$instance = new PDO("mysql:host=localhost;dbname=copeinca", 'copeinca', '@#2kC57JfhL9osU!', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        }
        return self::$instance;


    }
}