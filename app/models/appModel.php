<?php

namespace app\models;

abstract class appModel extends \ActiveRecord\Model implements \app\interfaces\iSql{

	public function listar(){
		return parent::find('all');
	}

	public function cadastrar($attributes){
		$cadastrar = parent::create($attributes);
		return $cadastrar;
	}

	public function atualizar($id,$attributes){
		$atualizar = parent::find($id);
		$atualizar->update_attributes($attributes);
	}

	public function deletar($id){
		$deletar = parent::find($id);
		$deletar->delete();
	}

	public function pegarPeloId($id){
		
	}

}