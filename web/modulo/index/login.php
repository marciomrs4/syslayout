<?php
include_once '../../../app/configGlobal.php';


//sleep(2);

if($_POST['usuario'] == 'marcio' or $_POST['usuario'] == 'clay'){
	echo "<script>
			window.document.location.href = '/{$configGlobal['path']}/web/modulo/demo';
		  </script>";
//	header('location: /sgp/modulo/portaria');
}else{

    echo '<div class="alert alert-danger" role="alert">
            Seu usuario esta incorreto!
          </div>';
}

?>