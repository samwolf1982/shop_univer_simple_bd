<?php 

// Структура таблицы `fotograf`
$sql_create_table="CREATE TABLE IF NOT EXISTS `fotograf` (`fotograf_code` int(11) NOT NULL AUTO_INCREMENT, `surname` varchar(255) NOT NULL, `name` varchar(255) NOT NULL, `patronymic` varchar(255) NOT NULL, `date_begin_todo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, `price` decimal(10,2) NOT NULL, PRIMARY KEY (`fotograf_code`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";






 mysql_query($sql_create_table) or die(mysql_error().__LINE__);
echo nl2br("Таблица fotograf создана\n");
 ?>