<?php
/**
 * Table Definition for contenido_pagina
 */
require_once 'DB/DataObject.php';

class DataObjects_Contenido_pagina extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'contenido_pagina';    // table name
    public $contenido_clave;                 // varchar(255)  
    public $contenido_valor;                 // varchar(255)  
    public $contenido_id;                    // int(11)  not_null primary_key auto_increment group_by

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Contenido_pagina',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
function editar_imagen($imagenvieja,$imagen=null){
    
    $do_contenido= DB_DataObject::factory('contenido_pagina');
    $do_contenido  -> contenido_clave = $imagenvieja;
    $do_contenido  -> find(true);
    $borrar = @unlink($do_contenido-> contenido_valor);
   
 
    function compressImage($source, $destination, $quality) { 
        $imgInfo = getimagesize($source); 
        $mime = $imgInfo['mime']; 
// Create a new image from file 
        switch($mime){ 
            case 'image/jpeg': 
            $image = imagecreatefromjpeg($source); 
            imagejpeg($image, $destination, $quality);
            break; 
            case 'image/png': 
            $image = imagecreatefrompng($source); 
            imagepng($image, $destination, $quality);
            break;  
            case 'image/gif': 
            $image = imagecreatefromgif($source); 
            imagegif($image, $destination, $quality);
            break; 
            default: 
            $image = imagecreatefromjpeg($source); 
            imagejpeg($image, $destination, $quality);
        } 


// Return compressed image 
        return $destination; 
    } 


    if ($imagen) {
// File upload path 

        $uploadPath = "../img/slider/"; 

// If file upload form is submitted 
        $status = $statusMsg = ''; 

        $status = 'error'; 
        if(!empty($imagen["imagen"]["name"])) { 
 
            $fileName = basename($imagen["imagen"]["name"]);
            $ahora = date("YmdHis"); 
            $imageUploadPath = $uploadPath . $ahora . $fileName ;
            $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION); 
               

// Allow certain file formats 
            $allowTypes = array('jpg','png','jpeg','gif','PNG'); 
            if(in_array($fileType, $allowTypes)){ 
    // Image temp source 
                $imageTemp = $imagen["imagen"]["tmp_name"]; 

    // Compress size and upload image 
                $tamaño = $imagen["imagen"]["size"];
                if($tamaño > 1000000) {$ubicacion = compressImage($imageTemp, $imageUploadPath, 9);} else {
                    move_uploaded_file($imageTemp, $imageUploadPath);
                }
                $do_contenido  -> contenido_valor = $imageUploadPath;


            }else{ 
                $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
            } 
        }else{ 
            $statusMsg = 'Please select an image file to upload.'; 
        } 



    } 


    $do_contenido -> update();
    return $id;
}
}
