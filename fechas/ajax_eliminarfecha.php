<?php
 	header('Content-Type: application/json');

	require_once('../config/web.config');
	require_once(CFG_PATH.'/data.config');
	require_once(INC_PATH.'/pear.inc');
	require_once(INC_PATH.'/comun.php');

	$do_fecha_eliminar = DB_DataObject::factory('calendario');
	$do_fecha_eliminar -> calendario_id = $_POST['id'];
	$do_fecha_eliminar -> find(true);
	$do_fecha_eliminar -> delete();

	require_once('public/modales/editar_fecha.html');
	exit;
?>