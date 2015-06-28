<?php

namespace usuario\app;

/**
 *
 * @author marcio.santos
 *        
 */
class Validador
{

	private $text;
	
	public function __construct($text)
	{
		$this->text = $text;
	}
	
	
	public function writer()
	{
	    echo 'Escreveu: ', $this->text;
	}
	

}

?>