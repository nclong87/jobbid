<?php
defined('_JEXEC') or die();
require_once(JPATH_COMPONENT . DS . 'controllers' . DS . 'controller.php');
$controller =   new DatchoControllerDatcho();
$controller->execute( JRequest::getVar( 'task' ) );    
$controller->redirect();
?>