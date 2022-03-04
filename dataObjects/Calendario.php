<?php
/**
 * Table Definition for calendario
 */
require_once 'DB/DataObject.php';

class DataObjects_Calendario extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'calendario';          // table name
    public $calendario_id;                   // int(11)  not_null primary_key auto_increment group_by
    public $calendario_lugar;                // varchar(255)  
    public $calendario_fecha_numero;         // varchar(255)  
    public $calendario_diahora;              // varchar(255)  
    public $calendario_detalle;              // varchar(255)  
    public $calendario_mes;                  // int(11)  group_by
    public $calendario_numero;               // varchar(255)  group_by
    public $calendario_anio;                 // int(11)  group_by

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Calendario',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
