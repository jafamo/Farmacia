<?php
//define varibles for server
define('DB_SERVER', 'localhost');
define('DB_USER', 'user1');
define('DB_PASSWORD', 'user1');
define('DB_NAME', 'Farmacos');


if (isset($_GET['term'])){
    $return_arr = array();

//create connection with databas PDO
    try {
        $conn = new PDO("mysql:host=".DB_SERVER.";port=3306;dbname=".DB_NAME, DB_USER, DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $conn->prepare('SELECT descripcion,precio FROM Productos WHERE descripcion LIKE :term');
        $stmt->execute(array('term' => '%'.$_GET['term'].'%'));
        
        while($row = $stmt->fetch()) {
           $return_arr[] =  $row['descripcion']."           Precio:     ".$row['precio']." €";
        }

    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }


    //Toss back results as json encoded array.
    echo json_encode($return_arr);
}

?>