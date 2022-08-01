<?php 

// recuperar o ip do docker usando 
//docker inspect containerId --format='{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}'
$host_database      = "172.19.0.1";
$user_database      = "root";
$passwd_database    = "rootpasswd";


$conn = mysqli_connect($host_database, $user_database, $passwd_database);


if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "<br>Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "<br>Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
echo "Conexão realizada com sucesso!";


?>