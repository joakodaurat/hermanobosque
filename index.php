<?php
	require_once('config/web.config');
	//require_once(AUTHFILE);
	require_once(CFG_PATH.'/data.config');
	// PEAR
	require_once(INC_PATH.'/pear.inc');
	require_once(INC_PATH.'/comun.php');
	session_start();

	$do_calendario = DB_DataObject::factory('calendario');
    $do_calendario->find();

	if($_POST['add_comunidad']) {
		//print_r($_POST);exit;
		$do_comunidad = DB_DataObject::factory('comunidad');
		$do_comunidad -> find();
		$do_comunidad -> comunidad_nombre = $_POST['name'];
		$do_comunidad -> comunidad_mail = $_POST['email'];
		$do_comunidad -> comunidad_fh = date('Y-m-d H:i:s');
		$id_comunidad= $do_comunidad-> insert();
		header("Location: index.php?id_comunidad=".$id_comunidad); 
	}
	if($_POST['add_mensaje']) {
		//print_r($_POST);exit;
		$do_mensajes = DB_DataObject::factory('mensajes');
		$do_mensajes -> find();
		$do_mensajes -> mensajes_mensaje = $_POST['mensaje'];
		$do_mensajes -> mensajes_mail = $_POST['email'];
		$do_mensajes -> mensajes_fh = date('Y-m-d H:i:s');
		$id_mensajes= $do_mensajes-> insert();
		header("Location: index.php?id_mensaje=".$id_mensajes); 
	}
	require_once('index.html');

	exit;
?>

