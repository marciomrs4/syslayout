<?php

namespace Mrs\app;

use Respect\Validation\Validator as v;
use Mrs\core\PostController;
use Mrs\model\TbUsuario;
use Mrs\entity\Doca;

class AcceptForm extends PostController
{
	public function cadastrarComercial()
	{

		try {
			
 			v::string()->notEmpty()
					   ->setName('Doca')
					   ->setTemplate('O campo {{name}} � obrigat�rio')
					   ->assert($this->post['doca']);

			try {
				
				$tbUser = new TbUsuario();
				
				$doca = new Doca();
				$doca->setName($this->post['doca']);
				
				
				return $tbUser->save($doca);
				
				
			} catch (Exception $e) {
				
				throw new \Exception();
			}		   
					   
		} catch (Exception $e) {
			
			throw new Exception();				
			
		}
		
	}
	
	public function alterarDoca()
	{
	   try {

	   		$this->post['doca'] = filter_var($this->post['doca'],FILTER_SANITIZE_STRIPPED);
	   	
	   		
	   		
	       v::string()->notEmpty()
	                  ->email()
	                  ->setName('Doca')
	                  ->setTemplate('O valor {{name}} � obrigat�rio')
	                  ->assert($this->post['doca']);
	                  
            $Doca = new Doca();
            $Doca->setName($this->post['doca'])
                 ->setId($this->post['cod_doca']);
	                  
            $tbUser = new TbUsuario();
            $tbUser->update($Doca);
	                  
	                  
	   	return $this;
	   } catch (Exception $e) {
	       
	   }   throw new \Exception();
	}
	
}