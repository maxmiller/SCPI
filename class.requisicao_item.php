<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 04/04/16
 * Time: 16:25
 */
namespace IFRN;

class RequisicaoMaterialItem
{
    protected $id;
    protected $id_requisicao;
    protected $nome_empresa;
    protected $preco;
    protected $cnpj;
    protected $site;
    protected $anexo;

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
    public function getIdRequisicao()
    {
        return $this->id_requisicao;
    }

    /**
     * @param mixed $id_requisicao
     */
    public function setIdRequisicao($id_requisicao)
    {
        $this->id_requisicao = $id_requisicao;
    }

    /**
     * @return mixed
     */
    public function getNomeEmpresa()
    {
        return $this->nome_empresa;
    }

    /**
     * @param mixed $nome_empresa
     */
    public function setNomeEmpresa($nome_empresa)
    {
        $this->nome_empresa = $nome_empresa;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param mixed $preco
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    /**
     * @return mixed
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @param mixed $site
     */
    public function setSite($site)
    {
        $this->site = $site;
    }

    /**
     * @return mixed
     */
    public function getAnexo()
    {
        return $this->anexo;
    }

    /**
     * @param mixed $anexo
     */
    public function setAnexo($anexo)
    {
        $this->anexo = $anexo;
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