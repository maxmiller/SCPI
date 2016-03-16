<?php

include 'topo.php';

?>

<form class="form-signin" method="post" action="login_planejamento.php" enctype="application/x-www-form-urlencoded" >
    <h2 class="form-signin-heading">Planejamento 2016</h2>
    <label for="inputEmail" class="sr-only">SIAPE</label>
    <input type="text" name="siape" class="form-control" placeholder="SIAPE" required autofocus/>
    <br>
    <label for="inputPassword" class="sr-only">SENHA</label>
    <input type="password" name="senha" class="form-control" placeholder="Password" required/>

    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Login"/>
</form>


<?php
include 'base.php';

?>
