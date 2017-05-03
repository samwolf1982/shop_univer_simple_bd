<?php 

//Структура таблицы `client`

$sql_create_table="CREATE TABLE IF NOT EXISTS `client` (`client_code` int(11) NOT NULL AUTO_INCREMENT, `surname` varchar(255) NOT NULL, `name` varchar(255) NOT NULL, `patronymic` varchar(255) NOT NULL, `phone` varchar(15) NOT NULL, PRIMARY KEY (`client_code`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";

mysql_query($sql_create_table) or die(mysql_error().__LINE__);
echo nl2br("Таблица client создана\n");


 ?>	