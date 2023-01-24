<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'cadastro');

    $conn = new MySQLI(HOST, USER, PASS, BASE);

    if(mysqli_connect_errno()) trigger_error(mysqli_connect_error());
    echo mysqli_connect_error();

?>