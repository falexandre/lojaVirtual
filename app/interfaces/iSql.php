<?php

namespace app\interfaces;

interface iSql{
	public function cadastrar($attributes);
	public function listar();
	public function atualizar($id,$attributes);
	public function deletar($id);
	public function pegarPeloId($id);
}