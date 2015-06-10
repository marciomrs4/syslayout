<?php

namespace Mrs\app;

use Respect\Validation\Validator as v;
use Mrs\core\PostController;
use Mrs\model\TbUsuario;
use Mrs\entity\Doca;

class AcceptFormAdministracao extends PostController
{
	public function cadastrarAdmin()
	{

		try {
			
			v::string()->email()
					   ->notEmpty()
					   ->setName('E-mail')
					   ->setTemplate('O campo {{name}} � obrigat�rio')
					   ->assert($this->post['doca']);
					   
			try {

			  /*   $Doca = new Doca();
			    $Doca->setName($this->post['doca']);
			    
 				$tbUser = new TbUsuario();
				$dados = $tbUser->save($Doca); */
				return $this;
			   } catch (Exception $e) {
			   }
					   
		} catch (Exception $e) {
			
			throw new Exception();				
			
		}

	return $this;
		
	}
	
}