<?php

define('SERVIDOR','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DATABASE','dbtaskmanager');

$servidor= "mysql:dbname=".DATABASE.";host=".SERVIDOR;

try {
    $pdo = new PDO($servidor, USERNAME, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
        //echo "La conexión a la base de datos fue exitosa";
        echo "<script>alert('Welcome a Task Manager')</script>";
} catch (PDOException $e) {
    echo "<script>alert('Error en la conexión a la base de datos')</script>";
}

$URL ='http://localhost/vector/';

?>
?>