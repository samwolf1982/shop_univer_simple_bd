<?php 






// Ограничения внешнего ключа таблицы `orders`

$sql_add_ref="ALTER TABLE `orders` ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`client_code`) REFERENCES `client` (`client_code`) ON DELETE NO ACTION ON UPDATE NO ACTION, ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`studiya_code`) REFERENCES `studia` (`studiya_code`) ON DELETE NO ACTION ON UPDATE NO ACTION, ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`fotograf_code`) REFERENCES `fotograf` (`fotograf_code`) ON DELETE NO ACTION ON UPDATE NO ACTION; ";
mysql_query($sql_add_ref) or die(mysql_error().__LINE__);
echo nl2br("Связь client.client_code --- orders.client_code создана\n");
echo nl2br("Связь fotograf.fotograf_code --- orders.fotograf_code создана\n");
echo nl2br("Связь orders.studiya_code --- studia.studiya_code создана\n");





 ?>