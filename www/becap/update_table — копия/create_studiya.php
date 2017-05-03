<?php 

$studia_names_arr = array('СЕМЕЙНАЯ ФОТОСЪЕМКА','ДЕТСКАЯ ФОТОСЪЕМКА','LOVE STORY' );


echo nl2br("\n------------------------\n");
foreach ($studia_names_arr as $key => $value) {
	$count_decoration=rand(8,47);
	$price=rand(100,100)+rand(1, 10) / 10;
	$sql_drop_db = "INSERT INTO `studia`(`name`, `count_decoration`, `price`) VALUES ('{$value}',{$count_decoration},{$price});";
mysql_query($sql_drop_db) or die(mysql_error().__LINE__);

echo nl2br("Категория {$value} создана\n");
}



 ?>