<?php 

// Структура таблицы `fotograf`
$sql_create_table="CREATE TABLE IF NOT EXISTS `fotograf` (`fotograf_code` int(11) NOT NULL AUTO_INCREMENT, `name` varchar(255) NOT NULL, `path_to_phote` text NOT NULL, `info` text NOT NULL, PRIMARY KEY (`fotograf_code`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";
// Структура таблицы `fotograf`





 mysql_query($sql_create_table) or die(mysql_error().__LINE__);
echo nl2br("Таблица fotograf создана\n");
 ?>