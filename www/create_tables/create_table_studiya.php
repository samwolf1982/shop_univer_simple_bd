<?php 

//Структура таблицы `studia`
$sql_create_table="CREATE TABLE IF NOT EXISTS `studia` (`studiya_code` int(11) NOT NULL AUTO_INCREMENT, `type_name` varchar(255) NOT NULL, `count_decoration` int(11) NOT NULL, `price` decimal(10,2) NOT NULL, PRIMARY KEY (`studiya_code`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";
 mysql_query($sql_create_table) or die(mysql_error().__LINE__);
echo nl2br("Таблица studia создана\n");
 ?>