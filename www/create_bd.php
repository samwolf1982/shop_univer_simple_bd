<?php
header('Content-Type: text/html; charset=utf-8');
 include_once 'conect.php';



$db_name="foto_agency";

$nl="<br/>";



$sql_drop_db = "DROP DATABASE IF EXISTS {$db_name};";
mysql_query($sql_drop_db) or die(mysql_error().__LINE__);


$sql_create_db = "CREATE DATABASE  {$db_name};";
mysql_query($sql_create_db) or die(mysql_error().__LINE__);

// print nl2br ( "База даных {$db_name} создана\n");

echo  nl2br("База даных {$db_name} создана\n");
mysql_select_db("{$db_name}") or die(mysql_error());
echo nl2br("База даных {$db_name} выбрана\n");

// создаем табичку client
include_once 'create_tables\create_table_client.php';

// создаем табичку create_table_fotograf
include_once 'create_tables\create_table_fotograf.php';

// создаем табичку order
include_once 'create_tables\create_table_order.php';
// создаем табичку студия
include_once 'create_tables\create_table_studiya.php';


// добавляем связи
include_once 'update_table\add_references.php';


// создаем студии 3 шт
 include_once 'update_table\create_studiya.php';

// // создаем фотографов 4 шт
 include_once 'update_table\create_fotograf.php';

// // создаем клиента и заказ
 include_once 'update_table\create_client_orders.php';



// макс мин  заказ
 include_once 'customs\select_max_min_orders.php';


// 
// макс мин  заказ у фотографа
 include_once 'customs\select_max_min_orders_in_fotograf.php';
 

 // самый дорогой и дешевий фоторгаф
 include_once 'customs\select_most_expensive_fotograf.php';

// ---------------------------------------------------------------------




include_once 'close.php';
echo nl2br("Работа с базой даных {$db_name} закончена\n");

?>

