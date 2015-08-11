<?php

namespace app\demo\app;


use Mrs\core\IGrid;
use Mrs\core\FormController;
/**
 *
 * @author marcio.santos
 *        
 */
class GraficoPainel extends FormController implements IGrid
{
	
	public function show($true=true)
	{
		$this->getForm();
	}

}

?>