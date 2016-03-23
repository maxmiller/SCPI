<?php
include_once 'class.planejamentodao.php';

use \IFRN\PlanejamentoDao;


session_start();

print_r($_POST);

$dao = new PlanejamentoDao();

$dao->save($_POST);

?>