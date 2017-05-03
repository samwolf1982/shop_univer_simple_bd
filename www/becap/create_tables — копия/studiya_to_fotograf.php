<?php 

// Структура таблицы `studiya_to_fotograf`
$sql_create_table="CREATE TABLE IF NOT EXISTS `studiya_to_fotograf` (`studiya_code` int(11) NOT NULL, `fotograf_code` int(11) NOT NULL, KEY `studiya_code` (`studiya_code`), KEY `fotograf_code` (`fotograf_code`), KEY `fotograf_code_2` (`fotograf_code`), KEY `studiya_code_2` (`studiya_code`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8;"; 





 mysql_query($sql_create_table) or die(mysql_error().__LINE__);
echo nl2br("Таблица studiya_to_fotograf создана\n");
 ?>