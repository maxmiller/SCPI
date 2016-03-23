<?php
session_start();
//include 'script.planejamento.buscar.php';


require_once 'class.planejamentodao.php';

if (!isset($_SESSION["siape"])) {
    echo "<script>
        alert('Usuário não logado');
        window.location=(ppage.login.php </script>";
} else {
    $dao = new \IFRN\PlanejamentoDao();
    $planejamento = new \IFRN\Planejamento($dao->findById($_GET['id']));
   
    include 'topo.php';
    include 'page.planejamento.base.php';
    include 'base.php';
}
?>


<!--<form method="post" action="script.atualizar.planejamento.php">
    <h2 class="form-planejamento-heading">Planejamento 2016</h2>

    <div class="row form-group">
        <div class="form-group col-md-8">
            <label for="inputNome">Nome do Evento:</label>
            <input type="hidden" name="id" class="form-control" id="inputNome" placeholder="Nome"
                   value="<?php /*echo $id; */ ?>"/>
            <input type="text" name="nome_evento" class="form-control" id="inputNome" placeholder="Nome" required
                   value="<?php /*echo $nome_evento; */ ?>"
                   autofocus/>
        </div>
        <div class="form-group col-md-4"></div>
    </div>

    <div class="row form-group">
        <div class="form-group col-md-8">

            <label for="inputPassword">Cidade do Evento:</label>
            <input type="text" name="cidade_evento" class="form-control" placeholder="Cidade/UF/Pais" required
                   value="<?php /*echo $cidade_evento; */ ?>"/>
        </div>

        <div class="form-group col-md-4"></div>
    </div>


    <div class="row form-group">
        <div class="form-group col-md-6">

            <label for="inputPassword">Data estimada de inicio do evento</label>
            <input type="date" name="data_inicio" class="form-control" placeholder="Data de Inicio" required
                   value="<?php /*echo $data_inicio; */ ?>"/>


        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword">Data estimada de término do evento</label>
            <input type="date" name="data_fim" class="form-control" placeholder="Data de Fim" required
                   value="<?php /*echo $data_fim; */ ?>"/>

        </div>
    </div>

    <div class="row form-group">
        <div class="form-group col-md-6">
            <label for="inputPassword">Valor da passagem área</label>
            <input type="number" name="valor_passagem" class="form-control"
                   placeholder="Estimativa de valor de passagem"
                   required value="<?php /*echo $valor_passagem; */ ?>"/>


        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword">Valor da inscrição</label>
            <input type="number" name="valor_inscricao" class="form-control"
                   placeholder="Estimativa de valor de inscrição" value="<?php /*echo $inscricao; */ ?>"
            />


        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-md-12">
            <label for="inputPassword">Justificativa de participação do evento/capacitação</label>
            <textarea name="justificativa" class="form-control" rows="3"> <?php /*echo $justificativa; */ ?> </textarea>

        </div>

    </div>

    <div class="row form-group">
        <div class="form-group col-md-12">
            <label for="inputPassword">Site do evento</label>
            <input type="text" name="sitio" class="form-control"
                   placeholder="Site do evento caso já exista." value="<?php /*echo $sitio_evento; */ ?>"
            />

        </div>

    </div>

    <div class="row form-group">
        <div class="form-group col-md-6">
            <label>Relevância do Evento para área de atuação docente:</label>
            <select id="relevancia" name="relevancia" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label>Possui projetos institucionais(pesquisa, extensão, etc..):</label>
            <select name="projetos" id="projeto" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
    </div>

    <div class="row form-group">
        <div class="form-group col-md-6">
            <label>Esta estudando?</label>
            <select name="estudo" id="estudo" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label> Titulação</label>
            <select name="titulacao" id="titulacao" class="form-control">
                <option value="0">Até graduação</option>
                <option value="1">Especialização/Mestrado</option>
                <option value="2">Doutorado/Pós-Doutorado</option>
            </select>
        </div>
    </div>

    <div class="row form-group">
        <div class="form-group col-md-6">
            <label> Tipo de evento/capacitação</label>
            <select name="tipo_evento" id="tipo_evento" class="form-control">
                <option value="0">CONNEPI & CONGIC</option>
                <option value="1">Eventos Internacionais sediados no Brasil</option>
                <option value="2">Eventos Nacionais sediados no Nordeste</option>
                <option value="3">Eventos Nacionais em outras regiões</option>
                <option value="4">Eventos Internacionais sediados na América do Sul</option>
                <option value="5">Eventos Internacionais sediados fora da América do Sul</option>
                <option value="6">Eventos Regionais sediados no Nordeste</option>
                <option value="7">Curso VOLTADO PARA AS ATIVIDADES específicas da área de atuação do servidor no
                    Campus
                </option>
                <option value="8">Demais eventos/capacitações</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label> Tempo de serviço no Campus Caicó</label>
            <input type="number" name="tempo_servico" class="form-control"
                   placeholder="Tempo de serviço em semestres"
                   required value="<?php /*echo $tempo_servico; */ ?>"/>
        </div>
    </div>

    <div class="row form-group">
        <div class="form-group col-md-6">
            <label> Eventos/Capacitações nacionais:</label>
            <input type="number" name="nacional" class="form-control"
                   placeholder="Quantidade de eventos/capacitações financiados pelo IFRN em 2014 e 2015"
                   required value="<?php /*echo $nacional; */ ?>"/>
        </div>
        <div class="form-group col-md-6">
            <label> Eventos/Capacitações internacionais:</label>
            <input type="number" name="internacional" class="form-control"
                   placeholder="Quantidade de eventos/capacitações financiados pelo IFRN em 2014 e 2015"
                   required value="<?php /*echo $internacional; */ ?>"/>
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-md-12">

            <input class="btn btn-lg btn-primary btn-block" type="submit" value="Atualizar"/>
        </div>
    </div>
</form>

<script>
    $(document).ready(function () {

        $("#relevancia").val(<?php /*echo $relevancia; */ ?>).trigger('chosen:updated');
        $("#estudo").val(<?php /*echo $estudo; */ ?>).trigger('chosen:updated');
        $("#titulacao").val(<?php /*echo $titulacao; */ ?>).trigger('chosen:updated');
        $("#projeto").val(<?php /*echo $projeto; */ ?>).trigger('chosen:updated');
        $("#tipo_evento").val(<?php /*echo $tipo_evento; */ ?>).trigger('chosen:updated');


    })

</script>-->
