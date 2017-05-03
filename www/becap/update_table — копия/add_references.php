<?php 


// Ограничения внешнего ключа таблицы `fotos_to_foto`

$sql_add_ref="ALTER TABLE `fotos_to_foto` ADD CONSTRAINT `fotos_to_foto_ibfk_1` FOREIGN KEY (`foto_code`) REFERENCES `foto` (`foto_code`) ON DELETE NO ACTION ON UPDATE NO ACTION; ";
 mysql_query($sql_add_ref) or die(mysql_error().__LINE__);
echo nl2br("Связь fotos_to_foto --- foto_code создана\n");




// Ограничения внешнего ключа таблицы `order`
$sql_add_ref="ALTER TABLE `order` ADD CONSTRAINT `order_ibfk_4` FOREIGN KEY (`fotos_code`) REFERENCES `fotos_to_foto` (`fotos_code`) ON DELETE NO ACTION ON UPDATE NO ACTION, ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`client_code`) REFERENCES `client` (`client_code`) ON DELETE NO ACTION ON UPDATE NO ACTION, ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`studia_code`) REFERENCES `studia` (`studiya_code`) ON DELETE NO ACTION ON UPDATE NO ACTION; ";


 mysql_query($sql_add_ref) or die(mysql_error().__LINE__);
echo nl2br("Связь order.client_code --- client.client_code создана\n");
echo nl2br("Связь order.fotos_code --- fotos_to_foto.fotos_code создана\n");
echo nl2br("Связь order.studia_code --- studia.studiya_code создана\n");



// Ограничения внешнего ключа таблицы `studiya_to_fotograf`
$sql_add_ref="ALTER TABLE `studiya_to_fotograf` ADD CONSTRAINT `studiya_to_fotograf_ibfk_2` FOREIGN KEY (`fotograf_code`) REFERENCES `fotograf` (`fotograf_code`) ON DELETE NO ACTION ON UPDATE NO ACTION, ADD CONSTRAINT `studiya_to_fotograf_ibfk_1` FOREIGN KEY (`studiya_code`) REFERENCES `studia` (`studiya_code`) ON DELETE NO ACTION ON UPDATE NO ACTION; ";

 mysql_query($sql_add_ref) or die(mysql_error().__LINE__);
echo nl2br("Связь studiya_to_fotograf.fotograf_code --- fotograf.fotograf_code создана\n");
echo nl2br("Связь studiya_to_fotograf.studiya_code --- studia.studiya_code создана\n");




 ?>