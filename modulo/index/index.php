<?php
include_once '../../autoload.php';


use system\core\FormController;

$Controller = new FormController();
$Controller->setForm('../../forms/login')
           ->getForm();

?>