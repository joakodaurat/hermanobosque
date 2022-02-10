<?php
/**
 * Table Definition for talle
 */
require_once 'DB/DataObject.php';

class DataObjects_Talle extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'talle';               // table name
    public $talle_id;                        // int(11)  not_null primary_key auto_increment group_by
    public $talle_nombre;                    // varchar(256)  not_null
    public $talle_baja;                      // int(11)  not_null group_by

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Talle',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
