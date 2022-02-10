<?php
/**
 * Table Definition for gasto
 */
require_once 'DB/DataObject.php';

class DataObjects_Gasto extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'gasto';               // table name
    public $gasto_id;                        // int(11)  not_null primary_key auto_increment group_by
    public $gasto_fh;                        // datetime(19)  not_null
    public $gasto_concepto;                  // varchar(255)  not_null
    public $gasto_monto_total;               // float(11)  not_null group_by
    public $gasto_usuario_id;                // int(11)  not_null group_by
    public $gasto_caja_id;                   // int(11)  not_null group_by

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Gasto',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
