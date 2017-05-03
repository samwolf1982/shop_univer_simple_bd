<?php 

//Структура таблицы `orders`


$sql_create_table="CREATE TABLE IF NOT EXISTS `orders` (`order_code` int(11) NOT NULL AUTO_INCREMENT, `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, `client_code` int(11) NOT NULL, `fotograf_code` int(11) NOT NULL, `studiya_code` int(11) NOT NULL, `total_price` decimal(10,2) NOT NULL, PRIMARY KEY (`order_code`), KEY `client_code` (`client_code`), KEY `fotograf_code` (`fotograf_code`), KEY `studiya_code` (`studiya_code`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ; ";

 mysql_query($sql_create_table) or die(mysql_error().__LINE__);
echo nl2br("Таблица orders создана\n");
 ?>