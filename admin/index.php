<?php
	require_once('../config/web.config');
	require_once(AUTHFILE);
	require_once(CFG_PATH.'/data.config');
	require_once(INC_PATH.'/pear.inc');
	require_once(INC_PATH.'/comun.php');



    $do_comunidad = DB_DataObject::factory('comunidad');


 
    $do_comunidad->find();
		

	require_once('public/comunidad.html');
	exit;
?>
