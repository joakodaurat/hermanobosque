<?php
/**
 * Table Definition for cobro_cliente
 */
require_once 'DB/DataObject.php';

class DataObjects_Cobro_cliente extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'cobro_cliente';       // table name
    public $cobro_id;                        // int(11)  not_null primary_key auto_increment group_by
    public $cobro_fh;                        // datetime(19)  not_null
    public $cobro_cliente_id;                // int(11)  not_null group_by
    public $cobro_monto_total;               // float(11)  not_null group_by
    public $cobro_usuario_id;                // int(11)  not_null group_by
    public $cobro_forma_pago;                // int(11)  not_null group_by
    public $cobro_cheque_id;                 // int(11)  group_by
    public $cobro_bono_id;                   // int(11)  group_by
    public $cobro_observacion;               // varchar(512)  
    public $cobro_baja_fh;                   // datetime(19)  
    public $cobro_transferencia_id;          // int(11)  group_by
    public $cobro_deposito_id;               // int(11)  group_by
    public $cobro_monto_total_dolar;         // float(11)  not_null group_by
    public $cobro_vuelto_dolar;              // float(11)  group_by
    public $cobro_vuelto_pesos;              // float(11)  group_by
    public $cobro_pago_dolar;                // float(11)  group_by
    public $cobro_pago_pesos;                // float(11)  group_by

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Cobro_cliente',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
