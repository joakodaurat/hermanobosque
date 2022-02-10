<?php
/**
 * Table Definition for proveedor
 */
require_once 'DB/DataObject.php';

class DataObjects_Proveedor extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'proveedor';           // table name
    public $prov_id;                         // int(11)  not_null primary_key auto_increment group_by
    public $prov_nombre;                     // varchar(256)  not_null
    public $prov_email;                      // varchar(256)  
    public $prov_tel1;                       // varchar(128)  
    public $prov_dni;                        // varchar(128)  
    public $prov_observacion;                // blob(65535)  blob
    public $prov_direccion;                  // varchar(256)  
    public $prov_fh_alta;                    // datetime(19)  not_null
    public $prov_baja;                       // tinyint(1)  not_null group_by

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Proveedor',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
