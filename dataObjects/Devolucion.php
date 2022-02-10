<?php
/**
 * Table Definition for devolucion
 */
require_once 'DB/DataObject.php';

class DataObjects_Devolucion extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'devolucion';          // table name
    public $d_id;                            // int(11)  not_null primary_key auto_increment group_by
    public $d_venta_id;                      // int(11)  not_null group_by
    public $d_usr_id;                        // int(11)  not_null group_by
    public $d_fh;                            // datetime(19)  not_null
    public $d_diferencia;                    // float(11)  not_null group_by
    public $d_pago_id;                       // int(11)  group_by
    public $d_nota_id;                       // int(11)  group_by

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Devolucion',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
