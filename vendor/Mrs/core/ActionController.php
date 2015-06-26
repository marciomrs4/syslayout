<?php
namespace Mrs\core;

class ActionController
{
	protected $path;
	protected $modulo;
	protected $action;
	protected $value;
	
	
	protected $controler = 'FrontControler.php';

	
	public static function actionUrl()
	{
        return  new ActionController();
	}
	
	public function setProjectPath($path)
	{

		$this->path = '/'.strtolower($path).'/'.$this->controler;
		return $this;
	}

	public function setModulo($modulo)
	{
		$this->modulo = '?urlModulo='.strtolower($modulo);
		return $this;
	}
	
	public function setAction($action)
	{
		$this->action = '&urlAction='.strtolower($action);
		return $this;
	}
	
	public function setValue($value=null)
	{
	    if($value){
	        settype($value, 'int');
	    }

		$this->value = '&urlValue='.$value;
		return $this;
	}
	
	public function __get($propName)
	{
	    return $this->$propName;
	}
	
	public function getUrl()
	{
	  return $this->__get('path').
		     $this->__get('modulo').
		     $this->__get('action').
		     $this->__get('value');
		     
		
	}
	
}