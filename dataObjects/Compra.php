<?php
/**
 * Table Definition for compra
 */
require_once 'DB/DataObject.php';

class DataObjects_Compra extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'compra';              // table name
    public $compra_id;                       // int(11)  not_null primary_key auto_increment group_by
    public $compra_fh;                       // datetime(19)  not_null
    public $compra_prov_id;                  // int(11)  not_null group_by
    public $compra_monto_total;              // float(11)  not_null group_by
    public $compra_usuario_id;               // int(11)  not_null group_by
    public $compra_observacion;              // blob(65535)  blob
    public $compra_tipo_operacion;           // varchar(256)  
    public $compra_lugar;                    // varchar(256)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Compra',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
