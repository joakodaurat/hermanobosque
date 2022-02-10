<?php
/**
 * Table Definition for caja
 */
require_once 'DB/DataObject.php';

class DataObjects_Caja extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'caja';                // table name
    public $caja_id;                         // int(11)  not_null primary_key auto_increment group_by
    public $caja_fh_inicio;                  // datetime(19)  not_null
    public $caja_fh_cierre;                  // datetime(19)  
    public $caja_monto_inicio;               // float(9)  not_null group_by
    public $caja_monto_cierre;               // float(9)  group_by
    public $caja_usua_inicio;                // int(11)  not_null group_by
    public $caja_usua_cierre;                // int(11)  group_by
    public $caja_estado;                     // int(11)  not_null group_by
    public $caja_pagos_ft;                   // float(11)  group_by
    public $caja_monto_dolar_inicio;         // float(9)  not_null group_by
    public $caja_monto_dolar_cierre;         // float(9)  not_null group_by
    public $caja_valor_dolar;                // float(9)  group_by
    public $caja_pagos_dolar;                // float(9)  group_by
    public $caja_pagos_efectivo;             // float(9)  group_by
    public $caja_pagos_tarjeta;              // float(9)  group_by

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Caja',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
