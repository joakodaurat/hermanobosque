<?php
/**
 * Table Definition for color
 */
require_once 'DB/DataObject.php';

class DataObjects_Color extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'color';               // table name
    public $color_id;                        // int(11)  not_null primary_key auto_increment group_by
    public $color_nombre;                    // varchar(256)  not_null
    public $color_codigo;                    // varchar(256)  
    public $color_baja;                      // int(11)  not_null group_by

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Color',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
