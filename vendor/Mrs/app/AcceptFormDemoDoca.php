<?php

namespace Mrs\app;

use Mrs\core\PostController;


class AcceptFormDemoDoca extends PostController
{
	public function validateArquivo()
	{

		try {
			
			$arquivoEntity = new Arquivo();
			$arquivoEntity->setNumercao($this->post['arq_numeracao']);			

				
			} catch (Exception $e) {
				
				throw new Exception();
			}

		return $this;
		
	}
	
	
}