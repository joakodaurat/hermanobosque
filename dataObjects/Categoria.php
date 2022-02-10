<?php
/**
 * Table Definition for categoria
 */
require_once 'DB/DataObject.php';

class DataObjects_Categoria extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'categoria';           // table name
    public $cat_id;                          // int(11)  not_null primary_key auto_increment group_by
    public $cat_nombre;                      // varchar(128)  not_null
    public $cat_baja;                        // tinyint(1)  not_null group_by

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Categoria',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
