<?php

$app->get('/', function() use($app) {

    $dados = array(
        'pagina' => 'home'
    );
    $app->render('layout.php', $dados);
});