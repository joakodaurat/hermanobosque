<?php
	require_once('../config/web.config');
	require_once(AUTHFILE);
	require_once(CFG_PATH.'/data.config');
	require_once(INC_PATH.'/pear.inc');
	require_once(INC_PATH.'/comun.php');



    $do_mensajes = DB_DataObject::factory('mensajes');


 
    $do_mensajes->find();
		

	require_once('public/mensajes.html');
	exit;
?>
