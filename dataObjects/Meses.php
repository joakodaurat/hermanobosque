<?php
/**
 * Table Definition for meses
 */
require_once 'DB/DataObject.php';

class DataObjects_Meses extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'meses';               // table name
    public $id;                              // int(11)  not_null group_by
    public $numero;                          // int(11)  group_by
    public $mes;                             // varchar(155)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Meses',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE


    function getNombremes($numero) {
        $do_meses = DB_DataObject::factory('meses');
        if($numero) {
            $do_meses -> numero = $numero;
            $do_meses -> find(true);
            $resp = $do_meses -> mes;
        } else {
            $resp = '';
        }

        return $resp ;
    }
}
