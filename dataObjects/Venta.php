<?php
/**
 * Table Definition for venta
 */
require_once 'DB/DataObject.php';

class DataObjects_Venta extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'venta';               // table name
    public $venta_id;                        // int(11)  not_null primary_key auto_increment group_by
    public $venta_fh;                        // datetime(19)  not_null
    public $venta_cliente_id;                // int(11)  not_null group_by
    public $venta_forma_pago_id;             // int(11)  not_null group_by
    public $venta_estado_id;                 // int(11)  not_null group_by
    public $venta_monto_total;               // float(11)  not_null group_by
    public $venta_usuario_id;                // int(11)  not_null group_by
    public $venta_monto_sindescuento;        // float(11)  not_null group_by
    public $venta_observacion;               // blob(65535)  blob
    public $venta_baja_fh;                   // datetime(19)  
    public $venta_cobro_id;                  // int(11)  group_by

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Venta',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
