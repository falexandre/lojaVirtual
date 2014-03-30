<?php

namespace app\classes;

class session{

	public static function sessionStart(){
		if(session_status() == PHP_SESSION_NONE){
			session_start();
			return false;
		}else{
			return true;
		}
	}

	public static function criarSessao(Array $dadosSessao){
		if(self::sessionStart()){
			$_SESSION[$dadosSessao['nome']] = $dadosSessao['valor'];
		}
	}

	public static function recuperarSessao($nome){
		if(self::sessionStart()){
			return $_SESSION[$nome];
		}
	}

}