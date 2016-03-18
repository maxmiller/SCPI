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
        $sql = "INSERT INTO PLANEJAMENTO( {$data[0]}) SET {$data[1]}";
        try {
            $stmt = Conexao::getInstance()->prepare($sql);
            $i = 1;
            foreach ($object as $k=>$v){
                $stmt->bindParam($i,$v);
                $i++;
            }

            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    private function sqlGenerate($array){
        $sql_column="";
        $sql_values="";
        if($array!=null){
            foreach ($array as $k=> $v) {
                $sql_column.="$k,";
                $sql_values.= "$k = ? ,";
            }
        }
        $sql_column = substr($sql_column,0,strlen($sql_column)-1);
        $sql_values= substr($sql_values,0,strlen($sql_values)-1);
        $data[0]=$sql_column;
        $data[1]=$sql_values;
        return $data;
    }
    function update($object)
    {
        // TODO: Implement update() method.
    }

    function delete($object)
    {
        // TODO: Implement delete() method.
    }

    function findById($id)
    {
        $stmt = Conexao::getInstance()->prepare('
            SELECT "Planejamento", planejamento.*
             FROM planejamento
             WHERE id = :id
        ');
        $stmt->bindParam(':id', $id);
        $stmt->execute();


        $stmt->setFetchMode(PDO::FETCH_CLASS, Planejamento::class);
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
             WHERE siape = :siape
        ');
        $stmt->bindParam(':siape', $siape);
        $stmt->execute();


        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Planejamento');
        return $stmt->fetchAll();
    }


}