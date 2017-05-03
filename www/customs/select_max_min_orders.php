<?php 

$sql_max="SELECT * FROM  `client` INNER JOIN orders where client.`client_code` = orders.`client_code` and orders.total_price=(SELECT max(`total_price`) FROM `orders` WHERE 1) LIMIT 1";
$result =mysql_query($sql_max) or die(mysql_error().__LINE__);
$obj= mysql_fetch_object($result);
mysql_free_result($result);

  echo nl2br("Максимальный заказ  на сумму {$obj->total_price}  от  {$obj->surname} {$obj->name} создан {$obj->create_date} \n\n");   



  $sql_max="SELECT * FROM  `client` INNER JOIN orders where client.`client_code` = orders.`client_code` and orders.total_price=(SELECT min(`total_price`) FROM `orders` WHERE 1) LIMIT 1";
$result =mysql_query($sql_max) or die(mysql_error().__LINE__);
$obj= mysql_fetch_object($result);
mysql_free_result($result);

 echo nl2br("Минимальный  заказ  на сумму {$obj->total_price}  от  {$obj->surname} {$obj->name} создан {$obj->create_date} \n\n");  
 


 ?>