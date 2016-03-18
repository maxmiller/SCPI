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
}