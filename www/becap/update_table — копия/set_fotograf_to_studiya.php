<?php 
// include_once '..\conect.php';
// mysql_select_db("foto_agency") or die(mysql_error());
// берем все id студий и фотографов и в случайном порядке связываем их
// Выполняем SQL-запрос
$sql_studiya_codes="SELECT `studiya_code` FROM `studia` WHERE 1";

$result = mysql_query($sql_studiya_codes) or die('Запрос не удался: ' . mysql_error());
//все id студий
$studiya_codes = array();
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    foreach ($line as $col_value) {
        $studiya_codes[]=$col_value;    
    }
}
// Освобождаем память от результата
mysql_free_result($result);



$sql_fotograf_codes="SELECT `fotograf_code` FROM `fotograf` WHERE 1";

$result = mysql_query($sql_fotograf_codes) or die('Запрос не удался: ' . mysql_error());
//все id фотографов
$fotograf_codes = array();
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    foreach ($line as $col_value) {
        $fotograf_codes[]=$col_value;    
    }
}
// Освобождаем память от результата
mysql_free_result($result);
// var_dump($fotograf_codes);
// проход по всем фотографам и запись в студию  случайно
 

	 for ($i=0; $i < count($fotograf_codes); $i++) { 
	 	  shuffle($studiya_codes);
           $count_studia=rand(1,count($studiya_codes));
           for ($j=0; $j < $count_studia; $j++) { 
           	  $fotograf_cd=$fotograf_codes[$i];
           	  $studia_cd=$studiya_codes[$j];
         $result = mysql_query("INSERT INTO `studiya_to_fotograf`(`studiya_code`, `fotograf_code`) VALUES ({$studia_cd},{$fotograf_cd})  ") or die('Запрос не удался: ' . mysql_error());   
        
      
                     }
}

echo nl2br("\n------------------------\n");

echo nl2br("Фотографы размещени по студиям\n");


//18








echo nl2br("\n------------------------\n");




 ?>