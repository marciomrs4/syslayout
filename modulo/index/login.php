<?php
include_once '../../autoload.php';


sleep(2);

if($_POST['usuario'] == 'marcio' or $_POST['usuario'] == 'clay'){
	echo "<script>
			window.document.location.href = '../demo';
		  </script>";
//	header('location: /sgp/modulo/portaria');
}else{
	echo 'Seu usuario esta incorreto!';
}

?>