<?php
	require_once('../config/web.config');
	require_once(AUTHFILE);
	require_once(CFG_PATH.'/data.config');
	require_once(INC_PATH.'/pear.inc');
	require_once(INC_PATH.'/comun.php');
	


 	if($_POST['nuevo_contenido']) {
 		$do_contenido = DB_DataObject::factory('contenido_pagina');
 		$do_contenido  -> contenido_clave = "weare";
		$do_contenido  -> find(true);
		$do_contenido -> contenido_valor = $_POST['weare'];
		$do_contenido -> update();
		$do_contenido = DB_DataObject::factory('contenido_pagina');
 		$do_contenido  -> contenido_clave = "music";
		$do_contenido  -> find(true);
 		$do_contenido -> contenido_valor = $_POST['music'];
 		$do_contenido -> update();

	 }
	 if($_POST['vide1actualizar']) {
 		$do_contenido = DB_DataObject::factory('contenido_pagina');
 		$do_contenido  -> contenido_clave = "youtube1";
		$do_contenido  -> find(true);
		$do_contenido -> contenido_valor = $_POST['link1'];
		$do_contenido -> update();
		}
	if($_POST['vide2actualizar']) {
 		$do_contenido = DB_DataObject::factory('contenido_pagina');
 		$do_contenido  -> contenido_clave = "youtube2";
		$do_contenido  -> find(true);
		$do_contenido -> contenido_valor = $_POST['link2'];
		$do_contenido -> update();
		}	
	if($_POST['newreleseactualizar']) {

 		$do_contenido = DB_DataObject::factory('contenido_pagina');
 		$do_contenido  -> contenido_clave = "newreleaseyoutube";
		$do_contenido  -> find(true);
		$do_contenido -> contenido_valor = $_POST['newreleseyoutube'];
		$do_contenido -> update();
		$do_contenido = DB_DataObject::factory('contenido_pagina');
 		$do_contenido  -> contenido_clave = "newrelesesound";
		$do_contenido  -> find(true);
		$do_contenido -> contenido_valor = $_POST['newrelesesoundcloud'];
		$do_contenido -> update();
		}
	if($_POST['edit_imagslide1']) {
		$do_contenido = DB_DataObject::factory('contenido_pagina');
		$do_contenido -> editar_imagen("slide1",$_FILES);
		}
	if($_POST['edit_imagslide2']) {
		$do_contenido = DB_DataObject::factory('contenido_pagina');
		$do_contenido -> editar_imagen("slide2",$_FILES);
		}
	if($_POST['edit_imagslide3']) {
		$do_contenido = DB_DataObject::factory('contenido_pagina');
		$do_contenido -> editar_imagen("slide3",$_FILES);
		}
    if($_POST['edit_imagslide4']) {
		$do_contenido = DB_DataObject::factory('contenido_pagina');
		$do_contenido -> editar_imagen("slide4",$_FILES);
		}
	if($_POST['edit_imagslide5']) {
		$do_contenido = DB_DataObject::factory('contenido_pagina');
		$do_contenido -> editar_imagen("slide5",$_FILES);
		}

	$do_contenido = DB_DataObject::factory('contenido_pagina');
	$do_contenido -> find();
	$contenido = array();
	while ($do_contenido -> fetch()) { 
		$contenido[$do_contenido -> contenido_clave] = $do_contenido -> contenido_valor;

	}


	require_once('public/contenido.html');
	exit;
?>
