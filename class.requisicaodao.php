<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 18/03/16
 * Time: 09:22
 */

namespace IFRN;

require_once 'class.dao.php';
require_once 'class.requisicao.php';
require_once 'class.conexao.php';

use PDO;

class RequisicaoDao extends Dao
{
    function save($object)
    {

        $data = $this->sqlGenerate($object);
        $sql = "INSERT INTO requisicao_material SET {$data}";
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
        $sql = "UPDATE requisicao_material SET {$data} where id = {$object['id']}";

      //  echo $sql;
        try {
            $stmt = Conexao::getInstance()->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            throw $e;
        }
    }

    function aprovar($object)
    {
        $sql = "UPDATE requisicao_material SET status = '2'  where id = $object ";

        echo $sql;
        try {
            $stmt = Conexao::getInstance()->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            throw $e;
        }
    }
    function rejeitar($object)
    {
        $sql = "UPDATE requisicao_material SET status = '1'  where id = $object ";

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
            $sql = "delete from requisicao_material where id = $object";
            $stmt = Conexao::getInstance()->prepare($sql);
            $stmt->execute();
        }catch (PDOException $e){
           throw $e;
        }
    }

    function findById($id)
    {
        $stmt = Conexao::getInstance()->prepare('
            SELECT requisicao_material.*
             FROM requisicao_material
             WHERE id = :id
        ');
        $stmt->bindParam(':id', $id);
        $stmt->execute();


        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Requisicao');
        return $stmt->fetch();
    }

    function findAll()
    {
        $stmt = Conexao::getInstance()->prepare('
            SELECT  requisicao_material.*, servidor.nome FROM requisicao_material,servidor where requisicao_material.siape = servidor.siape order by siape,prioridade
        ');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Requisicao');


        return $stmt->fetchAll();
    }

    function findBySiape($siape)
    {
        $stmt = Conexao::getInstance()->prepare('
            SELECT requisicao_material.*
             FROM requisicao_material
             WHERE siape = :siape order by prioridade, siape
        ');
        $stmt->bindParam(':siape', $siape);
        $stmt->execute();


        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Requisicao');
        return $stmt->fetchAll();
    }


}