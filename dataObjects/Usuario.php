<?php
/**
 * Table Definition for usuario
 */
require_once 'DB/DataObject.php';

class DataObjects_Usuario extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'usuario';             // table name
    public $usua_id;                         // int(11)  not_null primary_key auto_increment group_by
    public $usua_usrid;                      // varchar(50)  not_null
    public $usua_nombre;                     // varchar(100)  
    public $usua_pwd;                        // varchar(32)  not_null
    public $usua_email;                      // varchar(100)  not_null
    public $usua_tel1;                       // varchar(45)  
    public $usua_tel2;                       // varchar(45)  
    public $usua_baja;                       // tinyint(1)  not_null group_by

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Usuario',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
