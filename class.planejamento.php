<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 18/03/16
 * Time: 09:23
 */

namespace IFRN;


class Planejamento
{
    protected $nome_evento;
    protected $cidade_evento;
    protected $data_inicio_evento;
    protected $data_fim_evento;
    protected $valor_passagem;
    protected $justificativa_evento_relevancia;
    protected $sitio_evento;
    protected $relevancia_evento;
    protected $projeto_institucional;
    protected $estudando;
    protected $titulacao;
    protected $tipo_evento_capacitacao;
    protected $tempo_servico;
    protected $numero_evento_nacional;
    protected $numero_evento_internacional;
    protected $id;
    protected $inscricao;
    protected $total_diarias;
    protected $total_pontos;
    protected $siape;
    protected $status;
    protected $prioridade;

    /**
     * @return mixed
     */
    public function getPrioridade()
    {
        return $this->prioridade;
    }

    /**
     * @param mixed $prioridade
     */
    public function setPrioridade($prioridade)
    {
        $this->prioridade = $prioridade;
    }


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


    function __construct($array=null)
    {
        if($array!=null){
            foreach ($array as $k=> $v) {
                $this->{$k} = $v;
            }
        }
    }


    /**
     * @return mixed
     */
    public function getNomeEvento()
    {
        return $this->nome_evento;
    }

    /**
     * @param mixed $nome_evento
     */
    public function setNomeEvento($nome_evento)
    {
        $this->nome_evento = $nome_evento;
    }

    /**
     * @return mixed
     */
    public function getCidadeEvento()
    {
        return $this->cidade_evento;
    }

    /**
     * @param mixed $cidade_evento
     */
    public function setCidadeEvento($cidade_evento)
    {
        $this->cidade_evento = $cidade_evento;
    }

    /**
     * @return mixed
     */
    public function getDataInicioEvento()
    {
        return $this->data_inicio_evento;
    }

    /**
     * @param mixed $data_inicio_evento
     */
    public function setDataInicioEvento($data_inicio_evento)
    {
        $this->data_inicio_evento = $data_inicio_evento;
    }

    /**
     * @return mixed
     */
    public function getDataFimEvento()
    {
        return $this->data_fim_evento;
    }

    /**
     * @param mixed $data_fim_evento
     */
    public function setDataFimEvento($data_fim_evento)
    {
        $this->data_fim_evento = $data_fim_evento;
    }

    /**
     * @return mixed
     */
    public function getValorPassagem()
    {
        return $this->valor_passagem;
    }

    /**
     * @param mixed $valor_passagem
     */
    public function setValorPassagem($valor_passagem)
    {
        $this->valor_passagem = $valor_passagem;
    }

    /**
     * @return mixed
     */
    public function getJustificativaEventoRelevancia()
    {
        return $this->justificativa_evento_relevancia;
    }

    /**
     * @param mixed $justificativa_evento_relevancia
     */
    public function setJustificativaEventoRelevancia($justificativa_evento_relevancia)
    {
        $this->justificativa_evento_relevancia = $justificativa_evento_relevancia;
    }

    /**
     * @return mixed
     */
    public function getSitioEvento()
    {
        return $this->sitio_evento;
    }

    /**
     * @param mixed $sitio_evento
     */
    public function setSitioEvento($sitio_evento)
    {
        $this->sitio_evento = $sitio_evento;
    }

    /**
     * @return mixed
     */
    public function getRelevanciaEvento()
    {
        return $this->relevancia_evento;
    }

    /**
     * @param mixed $relevancia_evento
     */
    public function setRelevanciaEvento($relevancia_evento)
    {
        $this->relevancia_evento = $relevancia_evento;
    }

    /**
     * @return mixed
     */
    public function getProjetoInstitucional()
    {
        return $this->projeto_institucional;
    }

    /**
     * @param mixed $projeto_institucional
     */
    public function setProjetoInstitucional($projeto_institucional)
    {
        $this->projeto_institucional = $projeto_institucional;
    }

    /**
     * @return mixed
     */
    public function getEstudando()
    {
        return $this->estudando;
    }

    /**
     * @param mixed $estudando
     */
    public function setEstudando($estudando)
    {
        $this->estudando = $estudando;
    }

    /**
     * @return mixed
     */
    public function getTitulacao()
    {
        return $this->titulacao;
    }

    /**
     * @param mixed $titulacao
     */
    public function setTitulacao($titulacao)
    {
        $this->titulacao = $titulacao;
    }

    /**
     * @return mixed
     */
    public function getTipoEventoCapacitacao()
    {
        return $this->tipo_evento_capacitacao;
    }

    /**
     * @param mixed $tipo_evento_capacitacao
     */
    public function setTipoEventoCapacitacao($tipo_evento_capacitacao)
    {
        $this->tipo_evento_capacitacao = $tipo_evento_capacitacao;
    }

    /**
     * @return mixed
     */
    public function getTempoServico()
    {
        return $this->tempo_servico;
    }

    /**
     * @param mixed $tempo_servico
     */
    public function setTempoServico($tempo_servico)
    {
        $this->tempo_servico = $tempo_servico;
    }

    /**
     * @return mixed
     */
    public function getNumeroEventoNacional()
    {
        return $this->numero_evento_nacional;
    }

    /**
     * @param mixed $numero_evento_nacional
     */
    public function setNumeroEventoNacional($numero_evento_nacional)
    {
        $this->numero_evento_nacional = $numero_evento_nacional;
    }

    /**
     * @return mixed
     */
    public function getNumeroEventoInternacional()
    {
        return $this->numero_evento_internacional;
    }

    /**
     * @param mixed $numero_evento_internacional
     */
    public function setNumeroEventoInternacional($numero_evento_internacional)
    {
        $this->numero_evento_internacional = $numero_evento_internacional;
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
    public function getInscricao()
    {
        return $this->inscricao;
    }

    /**
     * @param mixed $inscricao
     */
    public function setInscricao($inscricao)
    {
        $this->inscricao = $inscricao;
    }

    /**
     * @return mixed
     */
    public function getTotalDiarias()
    {
        return $this->total_diarias;
    }

    /**
     * @param mixed $total_diarias
     */
    public function setTotalDiarias($total_diarias)
    {
        $this->total_diarias = $total_diarias;
    }

    /**
     * @return mixed
     */
    public function getTotalPontos()
    {
        return $this->total_pontos;
    }

    /**
     * @param mixed $total_pontos
     */
    public function setTotalPontos($total_pontos)
    {
        $this->total_pontos = $total_pontos;
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

    public function getTipoEventoTexto(){
        $evento = null;
        switch ($this->tipo_evento_capacitacao) {
            case 0:
                $evento = "CONNEPI & CONGIC";
                break;
            case 1:
                $evento = "Eventos Internacionais sediados no Brasil";
                break;
            case 2:
                $evento = "Eventos Nacionais sediados no Nordeste";
                break;
            case 3:
                $evento = "Eventos Nacionais em outras regiões";
                break;
            case 4:
                $evento = "Eventos Internacionais sediados na América do Sul";
                break;
            case 5:
                $evento = "Eventos Internacionais sediados fora da América do Sul";
                break;
            case 6:
                $evento = "Eventos Regionais sediados no Nordeste";
                break;
            case 7:
                $evento = "Curso VOLTADO PARA AS ATIVIDADES específicas da área de atuação do servidor no Campus";
                break;
            case 8:
                $evento = "Demais eventos/capacitaçõe";
                break;
            default:
                $evento = "Indefinido";
                break;
        }
        return $evento;
    }

    public function getTotalRecurso(){
        return $this->calcular_diarias()+$this->valor_passagem+$this->inscricao;
    }


    public function calcular_diarias()
    {
        $valor = 0.0;
        // $d1 = new DateTime($data_fim);
        // $d2 = new DateTime($data_inicio);

        $diff = abs(strtotime($this->data_fim_evento) - strtotime($this->data_inicio_evento));
        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24) / (60*60*24));
        $dias = $days + 0.5;

        switch ($this->tipo_evento_capacitacao) {
            case 1:
                $valor = 250 * 4.00 * $dias;
                break;
            default:
                $valor = 210 * $dias;
                break;
        }
        return $valor;
    }

    public function calcular_pontos()
    {
        $total_pontos = 0.0;
        $total_pontos = $total_pontos + ($this->relevancia_evento == 1 ? 10.0 : 0.0);
        $total_pontos = $total_pontos + ($this->projeto_institucional == 1 ? 10.0 : 0.0);
        $total_pontos = $total_pontos + ($this->estudando == 1 ? 10.0 : 0.0);
        switch ($this->titulacao) {
            case 0:
                $total_pontos = $total_pontos + 20.0;
                break;
            case 1:
                $total_pontos = $total_pontos + 15.0;
                break;
            case 2:
                $total_pontos = $total_pontos + 10.0;
                break;
            default:
                break;
        }
        switch ($this->tipo_evento_capacitacao) {
            case 0:
                $total_pontos = $total_pontos + 15.0;
                break;
            case 1:
                $total_pontos = $total_pontos + 10.0;
                break;
            case 2:
                $total_pontos = $total_pontos + 09.0;
                break;
            case 3:
                $total_pontos = $total_pontos + 08.0;
                break;
            case 4:
                $total_pontos = $total_pontos + 06.0;
                break;
            case 5:
                $total_pontos = $total_pontos + 04.0;
                break;
            case 6:
                $total_pontos = $total_pontos + 04.0;
                break;
            case 7:
                $total_pontos = $total_pontos + 10.0;
                break;
            case 8:
                $total_pontos = $total_pontos + 03.0;
                break;

            default:
                break;
        }
        $total_pontos = $total_pontos + ($this->tempo_servico >= 8 ? (8 * 2.5) : ($this->tempo_servico * 2.5));
        $total_pontos = $total_pontos + ($this->numero_evento_nacional== 0 ? 15 : (10 / $this->numero_evento_nacionall));
        $total_pontos = $total_pontos + ($this->numero_evento_internacional== 0 ? 15 : (10 / ($this->numero_evento_internacional * 2)));
        return $total_pontos;

    }



}