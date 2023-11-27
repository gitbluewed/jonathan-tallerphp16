<?php 
    include_once($_SERVER['DOCUMENT_ROOT'].'/tallerphp16/routes.php');
    require_once(CONTROLLER_PATH.'estudiantecontroller.php');
    $object = new estudiantecontroller();

    $idEstudiante= $_REQUEST['id'];
    $nombre= $_REQUEST['nombre'];
    $apellido= $_REQUEST['apellido'];
    $idCurso= $_REQUEST['idCurso'];
    
    $registro = $object->update($idEstudiante,$nombre, $apellido,$idCurso);
?>