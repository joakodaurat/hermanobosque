<?php
/**
 * Table Definition for pago_proveedor
 */
require_once 'DB/DataObject.php';

class DataObjects_Pago_proveedor extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'pago_proveedor';      // table name
    public $pago_id;                         // int(11)  not_null primary_key auto_increment group_by
    public $pago_fh;                         // datetime(19)  not_null
    public $pago_prov_id;                    // int(11)  not_null group_by
    public $pago_compra_id;                  // int(11)  group_by
    public $pago_monto_total;                // float(11)  not_null group_by
    public $pago_usuario_id;                 // int(11)  not_null group_by
    public $pago_forma_pago;                 // int(11)  not_null group_by
    public $pago_observacion;                // varchar(256)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Pago_proveedor',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
