<?php
include_once '../../../configGlobal.php';

use Mrs\core\FormController;
$Form = new FormController();
$Form->setForm('../../modulo/index/forms/login')
     ->getForm();

?>