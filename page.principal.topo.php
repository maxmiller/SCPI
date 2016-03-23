<?php
include_once 'script.sessao.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Coordenação de Pesquisa e Inovação - Campus Caicó</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

    <link href="css/style.css" rel="stylesheet">


   

</head>
<body>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">Navbar Link</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>
<div class="container">
    <header class="row">

        <nav class="navbar navbar-default " role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#">
                    <img src="img/logo.png" alt="" width="130" height="50">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li> <a href="page.login.php">Planejamento Diárias e Passagens 2016</a></li>
                    <li>
                        <a href="#">Solicitação de Materiais</a>
                    </li>
                    <li>
                        <a href="#">Portal de Eventos</a>
                    </li>

                    <?php

                    if($siape!=null){
                        echo "  <li>
                            <a href='script.logout.php' >Sair</a>
                        </li>";
                    }
                    ?>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>


    </header>
    <div class="row">
        <div role="main">