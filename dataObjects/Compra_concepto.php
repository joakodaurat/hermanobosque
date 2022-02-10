<?php
/**
 * Table Definition for compra_concepto
 */
require_once 'DB/DataObject.php';

class DataObjects_Compra_concepto extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'compra_concepto';     // table name
    public $cc_id;                           // int(11)  not_null primary_key auto_increment group_by
    public $cc_compra_id;                    // int(11)  not_null group_by
    public $cc_tipo;                         // int(11)  not_null group_by
    public $cc_observacion;                  // varchar(245)  
    public $cc_fh;                           // datetime(19)  
    public $cc_monto;                        // float(11)  group_by

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Compra_concepto',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
