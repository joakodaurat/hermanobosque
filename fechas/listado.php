<?php
	require_once('../config/web.config');
	require_once(AUTHFILE);
	require_once(CFG_PATH.'/data.config');
	require_once(INC_PATH.'/pear.inc');
	require_once(INC_PATH.'/comun.php');

	// traigo todas las fechas ya cargadas


    $do_calendario = DB_DataObject::factory('calendario');
    $do_calendario->find();



 	if($_POST['add_fecha']) {
 		$do_fecha_add = DB_DataObject::factory('calendario');
		$do_fecha_add -> calendario_lugar = $_POST['input_lugar'];
		$do_fecha_add -> calendario_fecha_numero = $_POST['input_fechanumero'];
		$do_fecha_add -> calendario_diahora = $_POST['input_diahora'];
		$do_fecha_add -> calendario_detalle = $_POST['input_detalle'];

		$id_fecha_add = $do_fecha_add -> insert();


		header("Location: listado.php");
		}
		
 	if($_POST['edit_fecha']) {
 		$do_fecha_editar = DB_DataObject::factory('calendario');
 		$do_fecha_editar -> calendario_id = $_POST['edit_fecha'];
		$do_fecha_editar -> find(true);
		$do_fecha_editar -> calendario_lugar = $_POST['input_edit_lugar'];
		$do_fecha_editar -> calendario_fecha_numero = $_POST['input_edit_fechanumero'];
		$do_fecha_editar -> calendario_diahora = $_POST['input_edit_diahora'];
		$do_fecha_editar -> calendario_detalle = $_POST['input_edit_detalle'];

		$id_fecha_editar = $do_fecha_editar -> update();


		header("Location: listado.php");
		}
		
	


	require_once('public/listado_fechas.html');
	exit;
?>
