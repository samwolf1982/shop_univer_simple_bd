<?php 

//18
// $names_arr = array('Воислав Чернов','Алёна Зайцева','Лариса Гурьева','Жанна Турова','Астра Игнатова','Харитон Матвеев','Станислав Зиновьев','Александра Боженова','Юлия Титова','Евпраксия Антонова','Людмила Красильникова','Алина Исаева','Зоя Волокитина','Ульяна Никифорова','Стелла Евдокимова','Надежда Кулакова','Леонид Алефанов','Антуан Калашников' );

$names_arr = array('Воислав','Алёна','Лариса','Жанна');
$surnames_arr = array('Матвеев','Боженова','Титова','Красильникова');
$patronymik_arr = array('Русланович','Викторовна','Зиновьевна','Титова');
// ,'Астра Игнатова','Харитон Матвеев','Станислав Зиновьев','Александра Боженова','Юлия Титова','Евпраксия Антонова','Людмила Красильникова','Алина Исаева','Зоя Волокитина','Ульяна Никифорова','Стелла Евдокимова','Надежда Кулакова','Леонид Алефанов','Антуан Калашников' );





// INSERT INTO `fotograf`( `name`, `path_to_phote`, `info`, `surname`, `patronymik`) VALUES ("Bob","Bob","Bob","Bob","Bob")

echo nl2br("\n------------------------\n");

// foreach ($names_arr as $key => $value) {
for ($i=0; $i <count($names_arr) ; $i++) { 
$path="/images/1 ({$i}).jpg";

$info="Lorem ipsum dolor sit amet, pro cu molestiae honestatis ullamcorper. Ne debitis convenire mei. Civibus detraxit sed ea, no nonumy ignota verear nam. Dolore repudiare nec et, probatus deserunt eu nec. Ei pri soluta signiferumque, diam sapientem has id. Ius et recteque scribentur, cu has veri viris. Pri malorum laoreet inimicus no, per choro noster adipiscing te, sea ne oporteat phaedrum. Vero choro accusamus his ex. Sonet suavitate vituperata ea eam, cu ius aperiam quaestio delicata, vidit aeque adversarium at ius. Usu ut congue voluptua constituto. Semper admodum sea ex. Vel omittam periculis ad, accommodare interpretaris ei quo. Idque atqui quando ius ea, ut convenire molestiae delicatissimi sit. Stet scripta ne eum. Eam id nusquam electram signiferumque. Graeci mollis docendi cum ne, quo mutat phaedrum ocurreret ex, ea doming maiorum vim. Ignota ornatus mandamus ad quo, an sea noster regione legimus. Ne error ancillae has, eam eligendi deleniti te. Ut sea amet dolore, oblique hendrerit abhorreant duo an, mel reque porro labores an. Ius in liber scaevola accusata, ut vim disputationi necessitatibus, esse latine ea cum. Propriae adolescens eos ei. Sea feugait invidunt adipisci ex, eam ex omnium postulant.";


 // $sql_drop_db = "INSERT INTO `fotograf`(`name`, `path_to_phote`, `info`) VALUES ('{$value}','{$path}','{$info}')";
  $sql_drop_db = " INSERT INTO `fotograf`( `name`, `path_to_phote`, `info`, `surname`, `patronymik`) VALUES ('{$names_arr[$i]}','{$path}','{$info}','{$surnames_arr[$i]}','$patronymik_arr[$i]')";

mysql_query($sql_drop_db) or die(mysql_error().__LINE__);

echo nl2br("Фотограф {$value} добавлен\n");
}



 ?>