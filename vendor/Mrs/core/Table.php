<?php
namespace Mrs\core;

interface Table
{
	
	public function save($dados);
	
	public function update($dados);
	
	public function delete($dados);
	
	public function listar($dados = null);
	
}