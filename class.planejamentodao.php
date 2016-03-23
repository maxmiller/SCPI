<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 18/03/16
 * Time: 09:22
 */

namespace IFRN;

require_once 'class.dao.php';
require_once 'class.planejamento.php';
require_once 'class.conexao.php';

use PDO;

class PlanejamentoDao extends Dao
{
    function save($object)
    {

        $data = $this->sqlGenerate($object);
        $sql = "INSERT INTO planejamento SET {$data}";
        try {
            $stmt = Conexao::getInstance()->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            throw $e;
        }
      //  echo $sql;
    }

  

    function update($object)
    {
        $data = $this->sqlGenerate($object);
        $sql = "UPDATE planejamento SET {$data} where id = {$object['id']}";

      //  echo $sql;
        try {
            $stmt = Conexao::getInstance()->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            throw $e;
        }
    }

    function delete($object)
    {
        try {
            $sql = "delete from planejamento where id = $object";
            $stmt = Conexao::getInstance()->prepare($sql);
            $stmt->execute();
        }catch (PDOException $e){
           throw $e;
        }
    }

    function findById($id)
    {
        $stmt = Conexao::getInstance()->prepare('
            SELECT planejamento.*
             FROM planejamento
             WHERE id = :id
        ');
        $stmt->bindParam(':id', $id);
        $stmt->execute();


        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Planejamento');
        return $stmt->fetch();
    }

    function findAll()
    {
        $stmt = Conexao::getInstance()->prepare('
            SELECT  planejamento.* FROM planejamento
        ');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Planejamento');


        return $stmt->fetchAll();
    }

    function findBySiape($siape)
    {
        $stmt = Conexao::getInstance()->prepare('
            SELECT planejamento.*
             FROM planejamento
             WHERE siape = :siape order by prioridade, siape
        ');
        $stmt->bindParam(':siape', $siape);
        $stmt->execute();


        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Planejamento');
        return $stmt->fetchAll();
    }


}