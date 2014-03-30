<?php

function autoloader($classe){
	$path=str_replace('\\', '/', $classe);
	require ROOT.$path.'.php';
}
spl_autoload_register('autoloader');