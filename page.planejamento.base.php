
 <form method="post" action="script.planejamento.cadastrar.php">
        <h2 class="form-planejamento-heading">Planejamento 2016</h2>

        <div class="row form-group">
            <div class="form-group col-md-12">
                <label for="inputNome">Nome do Evento:</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $planejamento->getId(); ?>"/>
                <input type="hidden" name="siape" class="form-control" value="<?php echo $planejamento->getSiape(); ?>"/>
                <input type="text" name="nome_evento" class="form-control" id="inputNome" placeholder="Nome" required  value="<?php echo $planejamento->getNomeEvento(); ?>"
                       autofocus/>
            </div>

        </div>

        <div class="row form-group">
            <div class="form-group col-md-8">

                <label for="inputPassword">Cidade do Evento:</label>
                <input type="text" name="cidade_evento" class="form-control" placeholder="Cidade/UF/Pais" value="<?php echo $planejamento->getCidadeEvento(); ?>" required/>
            </div>

            <div class="form-group col-md-4">
                <label for="inputPassword">Prioridade do evento</label>
                <input name="prioridade" class="form-control"
                       placeholder="Prioridade do evento(numeros apenas)." type="number" value="<?php echo $planejamento->getPrioridade();?>"
                />

            </div>
        </div>


        <div class="row form-group">
            <div class="form-group col-md-6">

                <label for="inputPassword">Data estimada de inicio do evento</label>
                <input type="date" name="data_inicio_evento" class="form-control" placeholder="Data de Inicio" value="<?php echo $planejamento->getDataInicioEvento(); ?>" required/>


            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword">Data estimada de término do evento</label>
                <input type="date" name="data_fim_evento" class="form-control" placeholder="Data de Fim"  value="<?php echo $planejamento->getDataFimEvento(); ?>"required/>

            </div>
        </div>

        <div class="row form-group">
            <div class="form-group col-md-6">
                <label for="inputPassword">Valor da passagem área</label>
                <input type="number" name="valor_passagem" class="form-control"
                       placeholder="Estimativa de valor de passagem (numeros apenas)"  value="<?php echo $planejamento->getValorPassagem();?>"
                       required/>


            </div>
            <div class="form-group col-md-6">

                <label for="inputPassword">Valor da inscrição</label>
                <input type="number" name="inscricao" class="form-control" value="<?php echo $planejamento->getInscricao();?>"
                       placeholder="Estimativa de valor (numeros apenas)"
                />


            </div>
        </div>
        <div class="row form-group">
            <div class="form-group col-md-12">
                <label for="inputPassword">Justificativa de participação do evento/capacitação</label>
                <textarea name="justificativa_evento_relevancia" class="form-control" rows="3"> <?php echo $planejamento->getJustificativaEventoRelevancia();?></textarea>

            </div>

        </div>

        <div class="row form-group">
            <div class="form-group col-md-12">
                <label for="inputPassword">Site do evento</label>
                <input name="sitio_evento" class="form-control"
                       placeholder="Site do evento caso já exista." type="url" pattern="https?://.+" value="<?php echo $planejamento->getSitioEvento();?>"
                />

            </div>

        </div>

        <div class="row form-group">
            <div class="form-group col-md-6">
                <label>Relevância do Evento para área de atuação:</label>
                <select name="relevancia_evento" class="form-control" id="relevancia">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label>Possui projetos institucionais(pesquisa, extensão, etc..):</label>
                <select name="projeto_institucional" class="form-control" id="projeto">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
        </div>

        <div class="row form-group">
            <div class="form-group col-md-6">
                <label>Esta estudando?</label>
                <select name="estudando" class="form-control" id="estudo">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label> Titulação</label>
                <select name="titulacao" class="form-control" id="titulacao">
                    <option value="0">Até graduação</option>
                    <option value="1">Especialização/Mestrado</option>
                    <option value="2">Doutorado/Pós-Doutorado</option>
                </select>
            </div>
        </div>

        <div class="row form-group">
            <div class="form-group col-md-6">
                <label> Tipo de evento/capacitação</label>
                <select name="tipo_evento_capacitacao" class="form-control" id="tipo_evento">
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
                       placeholder="Tempo de serviço em semestres (numeros apenas)" value="<?php echo $planejamento->getTempoServico();?>"
                       required/>
            </div>
        </div>

        <div class="row form-group">
            <div class="form-group col-md-6">
                <label> Eventos/Capacitações nacionais:</label>
                <input type="number" name="numero_evento_nacional" class="form-control"
                       placeholder="Quantidade de eventos/capacitações financiados pelo IFRN em 2014 e 2015" value="<?php echo $planejamento->getNumeroEventoNacional();?>"
                       required/>
            </div>
            <div class="form-group col-md-6">
                <label> Eventos/Capacitações internacionais:</label>
                <input type="number" name="numero_evento_internacional" class="form-control"
                       placeholder="Quantidade de eventos/capacitações financiados pelo IFRN em 2014 e 2015" value="<?php echo $planejamento->getNumeroEventoInternacional();?>"
                       required/>
            </div>
        </div>
        <div class="row form-group">
            <div class="form-group col-md-12">

                <input class="btn btn-lg btn-primary btn-block" type="submit" value="Cadastrar"/>
            </div>
        </div>
    </form>


<script>
    $(document).ready(function () {

        $("#relevancia").val(<?php echo $planejamento->getRelevanciaEvento(); ?>).trigger('chosen:updated');
        $("#estudo").val(<?php echo $planejamento->getEstudando(); ?>).trigger('chosen:updated');
        $("#titulacao").val(<?php echo $planejamento->getTitulacao(); ?>).trigger('chosen:updated');
        $("#projeto").val(<?php echo $planejamento->getProjetoInstitucional(); ?>).trigger('chosen:updated');
        $("#tipo_evento").val(<?php echo $planejamento->getTipoEventoCapacitacao(); ?>).trigger('chosen:updated');


    })

</script>


