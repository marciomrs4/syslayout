<?php
include_once '../../../app/configGlobal.php';

use Mrs\core\FormController;
$Form = new FormController();
$Form->setForm('../../modulo/index/forms/login')
     ->getForm();

?>