<?php
/**
 * Table Definition for comunidad
 */
require_once 'DB/DataObject.php';

class DataObjects_Comunidad extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'comunidad';           // table name
    public $comunidad_id;                    // int(11)  not_null primary_key auto_increment group_by
    public $comunidad_mail;                  // varchar(256)  not_null
    public $comunidad_fh;                    // datetime(19)  
    public $comunidad_nombre;                // varchar(256)  not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Comunidad',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
