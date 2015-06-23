<?php
namespace Mrs\core;

abstract class PostController
{
		
	protected $post;

	public function validarPost($post)
	{ 
		if($post)
		{
			$this->setpost($post);
			$_SESSION['post'] = $post;

		}elseif($_SESSION['post'])
		{
			$this->setpost($_SESSION['post']);
		}

        return $this;
		
	}
	
	public function setPost($post)
	{
		$this->post = $post;
		return $this;
	}
	
	public function getPost()
	{
		return($this->post);
	}

	public function setValueGet($get,$getname)
	{
		foreach ($get as $chaves => $valor){break 1;}
		
		$this->post[$getname] = $valor;
		
		return $this;
	}
	
	public function getValueGet($getname)
	{
		return(base64_decode($this->post[$getname]));
	}

	public function listarpost()
	{
        $array  = '<br/>';
		foreach ($this->post as $campo => $valor)
		{
			$array .= "
					    [ Campo:<font color='blue'> ( {$campo} )</font> ]
							- 
				  	    [ Valor:<font color='red'> ( {$valor} )</font> ]
				  <br />
				";
		}

        return $array;
	}

	#Metodo para facilitar obter os nomes dos campos
	public function criarCampos()
	{
		foreach ($this->post as $campo => $valor)
		{
			echo('$this->post[\''.$campo.'\']<br />');
		}
	}

	public function criarArray($post)
	{
		$Array = explode(',', $post);
		
		return($Array);
	}

    public function clearPost($message = 'Cadastrado com sucesso !', $rota = null)
    {
        $_SESSION['message'] = $message;

        $rota = ($rota == null) ? $_SERVER['HTTP_REFERER'] : $rota;

        header("location: $rota");
    }
	
	public function router($location=null)
	{
		if($location==null){
			header('location: '.$_SERVER['HTTP_REFERER']);
		}

		header('location: '.$location);
	}
	
	
}