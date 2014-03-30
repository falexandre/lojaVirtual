<?php
ini_set('display_errors', 1);
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
require ROOT.'vendor/autoload.php';
require ROOT.'autoload.php';
require ROOT.'connection.php';
require ROOT.'functions/functions.php';

\app\classes\session::sessionStart();
\app\classes\session::criarSessao(array('nome' => 'cursos', 'valor' => 'lojaVirtual'));

$app = new \Slim\Slim(array(
	'debug' => true,
	'templates.path' => ROOT.'app/views'
));