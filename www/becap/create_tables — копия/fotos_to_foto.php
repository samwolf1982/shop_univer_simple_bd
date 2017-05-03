<?php 

//Структура таблицы `fotos_to_foto`

$sql_create_table="CREATE TABLE IF NOT EXISTS `fotos_to_foto` (`fotos_code` int(11) NOT NULL, `foto_code` int(11) NOT NULL, KEY `fotos_id` (`fotos_code`), KEY `foto_id` (`foto_code`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8;"; mysql_query($sql_create_table) or die(mysql_error().__LINE__);
echo  nl2br("Таблица fotos_to_foto создана\n");


 ?>	