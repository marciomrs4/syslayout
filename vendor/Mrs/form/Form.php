<?php

namespace Mrs\app;

use Mrs\core\IGrid;
use Mrs\core\FormController;
/**
 *
 * @author marcio.santos
 *        
 */
class Form extends FormController implements IGrid
{

	public function show($true=true)
	{
		$this->getForm();
	}

}

?>