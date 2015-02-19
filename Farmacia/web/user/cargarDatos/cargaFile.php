<?php 

include("../php/conexionDB.php)";
LOAD DATA INFILE ‘Inventario.csv’ 
INTO TABLE ‘Productos1’

FIELDS TERMINATED BY ‘,’
LINES TERMINATED BY ‘\n';


echo "Base de datos inicializada.";


?>
