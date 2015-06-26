<?php
namespace Mrs\core;

class GridOption implements IOption
{
	
    protected $url = array();
	protected $action = array();
	protected $type = array();
	private $value = array();
	private $nameText = array();

    private $nameButton = 'Opções';

	private $atribuition;
	
	public function __construct($atribuition='=')
	{
		$this->atribuition = $atribuition;
	}
	
	public static function newOption($atribuition='=')
	{
		return new GridOption($atribuition);
	}
		
	public function setIco($ico)
	{
	    $this->type[] = $ico;
	    return $this;
	}
	
	private function getType()
	{
		$type = '';
		foreach ($this->type as $types){
			$type = $types;
		}
	    return $type;
	}
	
	public function setUrl($url)
	{
	    $this->url[] = $url;
	    return $this;
	}
	
	private function getUrl()
	{
		$url = '';
		foreach ($this->url as $urls){
			$url = $urls;
		}
	   return $url;   
	}
	
	protected function setValue($value)
	{
	    $this->value[] = $value;
	    return $this;
	}
	
	private function getValue()
	{
	    $value = 0;
	    foreach ($this->value as $values){
	    	$value = $values;
	    }
		return $value;
	}
	
	public function setName($name)
	{
		$this->nameText[] = $name;
		return $this;	
	}
	
	private function getName()
	{
		$nameText = '';
		
		foreach ($this->nameText as $nameTexts){
			$nameText = $nameTexts;	
		}
		
		return $nameText;
		
	}

    public function setNameButton($name)
    {
        $this->nameButton = $name;
        return $this;
    }

    public function getNameButton()
    {
        return $this->nameButton;
    }


    public function createOption($value)
	{
	   $this->setValue($value);

	   $buttonList =
	   "<li>
		    <a href='{$this->getUrl()}{$this->atribuition}{$this->getValue()}'>
	   		    <span class='glyphicon glyphicon-{$this->getType()}'>
	   			</span>
	   				{$this->getName()}
	   		</a>
	   </li>";
	   
	   return $buttonList;		       
	}
	
	
}