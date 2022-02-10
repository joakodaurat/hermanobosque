<?php
/**
 * Table Definition for producto
 */
require_once 'DB/DataObject.php';

class DataObjects_Producto extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'producto';            // table name
    public $prod_id;                         // int(11)  not_null primary_key auto_increment group_by
    public $prod_nombre;                     // varchar(255)  not_null
    public $prod_codigo;                     // bigint(20)  not_null group_by
    public $prod_marca_id;                   // int(11)  not_null group_by
    public $prod_cat_id;                     // int(11)  not_null group_by
    public $prod_baja;                       // tinyint(1)  not_null group_by
    public $prod_precio;                     // float(11)  not_null group_by
    public $prod_img1;                       // varchar(255)  not_null
    public $prod_img2;                       // varchar(255)  not_null
    public $prod_img3;                       // varchar(255)  not_null
    public $prod_img4;                       // varchar(255)  not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Producto',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
