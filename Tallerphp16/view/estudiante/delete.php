<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/tallerphp16/routes.php');
    require_once(CONTROLLER_PATH.'estudiantecontroller.php');
    $object = new estudiantecontroller();

    $idEstudiante = $_REQUEST['id'];
    $object->delete($idEstudiante);
?>