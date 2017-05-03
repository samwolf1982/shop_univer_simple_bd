<?php 
// SELECT `fotograf_code`, COUNT( `fotograf_code` )
// FROM `orders`
// GROUP BY `fotograf_code`
// ORDER BY COUNT( `fotograf_code` ) DESC
// LIMIT 1

//---------

// SELECT * FROM `fotograf` WHERE `fotograf_code`=(SELECT `fotograf_code`
// FROM `orders`
// GROUP BY `fotograf_code`
// ORDER BY COUNT( `fotograf_code` ) DESC
// LIMIT 1)

 $sql_max="SELECT * FROM `fotograf` WHERE `fotograf_code`=(SELECT `fotograf_code` FROM `orders` GROUP BY `fotograf_code` ORDER BY COUNT( `fotograf_code` ) DESC LIMIT 1)"; $result =mysql_query($sql_max) or die(mysql_error().__LINE__);
       $obj= mysql_fetch_object($result);
             mysql_free_result($result);

   
   $result =mysql_query("SELECT sum(`total_price`) as `sum` FROM `orders` WHERE `fotograf_code` ={$obj->fotograf_code}") or die(mysql_error().__LINE__);
       $fotograf= mysql_fetch_object($result);
             mysql_free_result($result);
           


  echo nl2br("Наибольшее   КОЛИЧЕСТВО заказов у {$obj->surname}    {$obj->name} на суму {$fotograf->sum}  \n\n");   



//   $sql_max="SELECT * FROM  `client` INNER JOIN orders where client.`client_code` = orders.`client_code` and orders.total_price=(SELECT min(`total_price`) FROM `orders` WHERE 1) LIMIT 1";
// $result =mysql_query($sql_max) or die(mysql_error().__LINE__);
// $obj= mysql_fetch_object($result);
// mysql_free_result($result);

//   echo nl2br("Минимальный  заказ  на сумму {$obj->total_price}  от  {$obj->surname} {$obj->name} создан {$obj->create_date} \n\n");  
 



 ?>