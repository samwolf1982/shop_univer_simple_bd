<?php 


// SELECT *
// FROM   `fotograf`
// WHERE  price=(SELECT MAX(price) FROM `fotograf`)
$sql_max="SELECT * FROM   `fotograf` WHERE  price=(SELECT MAX(price) FROM `fotograf`)  limit 1"; $result =mysql_query($sql_max) or die(mysql_error().__LINE__);
$obj= mysql_fetch_object($result);
mysql_free_result($result);

  echo nl2br("Самый дорогой фотограф {$obj->surname} {$obj->name}  цена:  {$obj->price} \n\n"); 


  $sql_max="SELECT * FROM   `fotograf` WHERE  price=(SELECT min(price) FROM `fotograf`)  limit 1"; $result =mysql_query($sql_max) or die(mysql_error().__LINE__);
$obj= mysql_fetch_object($result);
mysql_free_result($result);

  echo nl2br("Самый дешевый фотограф {$obj->surname} {$obj->name}  цена:  {$obj->price} \n\n");   





 ?>