<?php 

//Структура таблицы `order`


$sql_create_table="CREATE TABLE IF NOT EXISTS `order` (`order_code` int(11) NOT NULL AUTO_INCREMENT, `date_order` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, `client_code` int(11) NOT NULL, `fotos_code` int(11) NOT NULL, `studia_code` int(11) NOT NULL, `total_price` decimal(10,2) NOT NULL, PRIMARY KEY (`order_code`), KEY `order_ibfk_1` (`client_code`), KEY `fotografiyi_code` (`fotos_code`), KEY `studia_code` (`studia_code`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";

 mysql_query($sql_create_table) or die(mysql_error().__LINE__);
echo nl2br("Таблица order создана\n");
 ?>