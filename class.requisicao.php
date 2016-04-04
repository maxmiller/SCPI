<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 04/04/16
 * Time: 16:25
 */
namespace IFRN;

class RequisicaoMaterial
{
    protected $id;
    protected $siape;
    protected $material;
    protected $especificacao;
    protected $servidor;
    protected $status;

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSiape()
    {
        return $this->siape;
    }

    /**
     * @param mixed $siape
     */
    public function setSiape($siape)
    {
        $this->siape = $siape;
    }

    /**
     * @return mixed
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * @param mixed $material
     */
    public function setMaterial($material)
    {
        $this->material = $material;
    }

    /**
     * @return mixed
     */
    public function getEspecificacao()
    {
        return $this->especificacao;
    }

    /**
     * @param mixed $especificacao
     */
    public function setEspecificacao($especificacao)
    {
        $this->especificacao = $especificacao;
    }

    /**
     * @return mixed
     */
    public function getServidor()
    {
        return $this->servidor;
    }

    /**
     * @param mixed $servidor
     */
    public function setServidor($servidor)
    {
        $this->servidor = $servidor;
    }

    

    function __construct($array = null)
    {
        if ($array != null) {
            foreach ($array as $k => $v) {
                $this->{$k} = $v;
            }
        }
    }


}