<?php 

// $studia_names_arr = array('СЕМЕЙНАЯ ФОТОСЪЕМКА','ДЕТСКАЯ ФОТОСЪЕМКА','LOVE STORY' );
$names_arr = array('Воислав','Алёна','Лариса','Жанна');
$surnames_arr = array('Матвеев','Боженова','Титова','Красильникова');
$patronymik_arr = array('Русланович','Викторовна','Зиновьевна','Титова');


shuffle($names_arr);
shuffle($surnames_arr);
shuffle($patronymik_arr);


// все ид студий и фотографов (только для тестового заполнения)
$result = mysql_query("SELECT `studiya_code` FROM `studia` WHERE 1") or die('Запрос не удался: ' . mysql_error());
//все id студий
$studiya_codes = array();
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    foreach ($line as $col_value) {
        $studiya_codes[]=$col_value;    
    }
}
// Освобождаем память от результата
mysql_free_result($result);


$result = mysql_query("SELECT `fotograf_code` FROM `fotograf` WHERE 1") or die('Запрос не удался: ' . mysql_error());
//все id студий
$fotografs_codes = array();
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    foreach ($line as $col_value) {
        $fotografs_codes[]=$col_value;    
    }
}
// Освобождаем память от результата
mysql_free_result($result);


  for ($i=0; $i <count($names_arr) ; $i++) { 
 // for ($i=0; $i <1 ; $i++) {
 $tel="+89"; 
 	for ($j=0; $j <9 ; $j++) { 
 		$tel.=rand(0,9);
 	}
	mysql_query("INSERT INTO `client`( `surname`, `name`, `patronymic`, `phone`) VALUES ('{$surnames_arr[$i]}','{$names_arr[$i]}','{$patronymik_arr[$i]}','{$tel}');") or die(mysql_error().__LINE__);


  echo nl2br("Клиент:  {$surnames_arr[$i]} {$names_arr[$i]} {$patronymik_arr[$i]} добавлен\n");   
  // созадем заказ     
$result =mysql_query("SELECT MAX( `client_code` ) as id FROM  `client` WHERE 1") or die(mysql_error().__LINE__);
$obj= mysql_fetch_object($result);
mysql_free_result($result);
// var_dump($obj->id);
$client_id=$obj->id;
$fotograf_cd=$fotografs_codes[rand(0,count($fotografs_codes)-1)];
$studiya_cd=$studiya_codes[rand(0,count($studiya_codes)-1)];


// берем даные из студий 
$result =mysql_query("SELECT (`count_decoration`*`price`) as total_price FROM `studia` WHERE `studiya_code` ={$studiya_cd}") or die(mysql_error().__LINE__);
$obj= mysql_fetch_object($result);
mysql_free_result($result);
$studiya_price=$obj->total_price;

 $result =mysql_query("SELECT  `price` FROM  `fotograf` WHERE  `fotograf_code` ={$fotograf_cd}") or die(mysql_error().__LINE__); 
 $obj= mysql_fetch_object($result);
 $fotograf_price=$obj->price;
 $total_price=$studiya_price+$fotograf_price;

mysql_query("INSERT INTO `orders`(`client_code`, `fotograf_code`, `studiya_code`, `total_price`) VALUES ({$client_id},{$fotograf_cd},{$studiya_cd},{$total_price})") or die(mysql_error().__LINE__);



  echo nl2br("Заказ  на сумму {$total_price} создан\n\n");   



}




//все id фотографов
// $fotograf_codes = array();
// while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
//     foreach ($line as $col_value) {
//         $fotograf_codes[]=$col_value;    
//     }
// }
// Освобождаем память от результата

// echo nl2br("\n------------------------\n");
// foreach ($studia_names_arr as $key => $value) {
// 	$count_decoration=rand(8,47);
// 	$price=rand(500,1000)+rand(1, 10) / 10;
// 	$sql_drop_db = "INSERT INTO `studia`(`type_name`, `count_decoration`, `price`) VALUES ('{$value}',{$count_decoration},{$price})";
// mysql_query($sql_drop_db) or die(mysql_error().__LINE__);

// echo nl2br("Категория {$value} создана\n");
// }

 ?>