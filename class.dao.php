<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 18/03/16
 * Time: 09:21
 */

namespace IFRN;


abstract class Dao
{
  

    abstract function save($object);
    abstract function update($object);
    abstract function delete($object);
    abstract function findById($id);
    abstract function findAll();


    public function sqlGenerate($array){
        $sql_values="";
        if($array!=null){
            foreach ($array as $k=> $v) {
                if($k != "id") {
                    $sql_values .= "$k = '$v' ,";
                }
            }
        }
        $sql_values= substr($sql_values,0,strlen($sql_values)-1);
        return $sql_values;
    }
}