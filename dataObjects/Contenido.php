<?php
/**
 * Table Definition for contenido
 */
require_once 'DB/DataObject.php';

class DataObjects_Contenido extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'contenido';           // table name
    public $contenido_id;                    // int(11)  not_null primary_key group_by
    public $weare;                           // varchar(255)  
    public $music;                           // varchar(255)  
    public $linkyoutube1;                    // varchar(255)  
    public $linkyoutube2;                    // varchar(255)  
    public $img1;                            // varchar(255)  
    public $img2;                            // varchar(255)  
    public $img3;                            // varchar(255)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Contenido',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE


function editar_imagen($imagenvieja,$imagen=null){
    print_r($imagen);exit;
    $do_producto_edit = DB_DataObject::factory('producto');
    $do_producto_edit -> prod_id = $id;
    $do_producto_edit -> find(true);

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
        $uploadPath = "../imagenes/"; 

// If file upload form is submitted 
        $status = $statusMsg = ''; 

        $status = 'error'; 
        if(!empty($imagen["imagen"]["name"])) { 
// File info 
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
                if($tamaño > 1000000) {$ubicacion = compressImage($imageTemp, $imageUploadPath, 50);} else {
                    move_uploaded_file($imageTemp, $imageUploadPath);
                }
                $do_producto_edit -> prod_img1 = $imageUploadPath;


            }else{ 
                $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
            } 
        }else{ 
            $statusMsg = 'Please select an image file to upload.'; 
        } 



    } 


    $do_producto_edit -> update();
    return $id;
}
}
