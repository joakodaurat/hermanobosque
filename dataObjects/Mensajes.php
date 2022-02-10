<?php
/**
 * Table Definition for mensajes
 */
require_once 'DB/DataObject.php';

class DataObjects_Mensajes extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'mensajes';            // table name
    public $mensajes_id;                     // int(11)  not_null primary_key auto_increment group_by
    public $mensajes_mail;                   // varchar(256)  not_null
    public $mensajes_fh;                     // datetime(19)  
    public $mensajes_mensaje;                // varchar(256)  not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Mensajes',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
