<?php

header("content-type:application/json");
spl_autoload_register(function ($class)
{
    include_once("$class.php");
}); 


include_once("../php/Database.php");
include_once("../php/QueryClass.php");
$db=new Database();
$qc=new QueryClass();
$field=$_GET['field'];
$value=$_GET['value'];

$array=$qc->getUser($field,$value);

echo $array;


?>