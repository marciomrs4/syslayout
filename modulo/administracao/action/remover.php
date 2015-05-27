<?php
require_once '../../../autoload.php';


$_SESSION['variavel'] = $_GET['seila'];

header('location: '.$_SERVER['HTTP_REFERER']);