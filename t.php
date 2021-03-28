<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'themes/default_theme/page_elem/table.php';



$th = array('Id', 'head-1','head-1','head-1','head-1');




    
$t = new _table_();
// array_push($t->table_classes, 'table-dark');
echo $t->tableOut();
// unset($t->table_classes, [$c1, $c2]);
$t->table_classes = array('table','table-striped','table-sm');
echo $t->tableOut();
