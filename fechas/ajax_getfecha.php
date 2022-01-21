<?php
 	header('Content-Type: application/json');

	require_once('../config/web.config');
	require_once(CFG_PATH.'/data.config');
	require_once(INC_PATH.'/pear.inc');
	require_once(INC_PATH.'/comun.php');

	$do_fecha_editar = DB_DataObject::factory('calendario');
	$do_fecha_editar -> calendario_id = $_POST['id'];
	$do_fecha_editar -> find(true);


	require_once('public/modales/editar_fecha.html');
	exit;
?>