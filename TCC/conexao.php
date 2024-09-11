<?php
$host = 'localhost';
$usuario = 'root';
$password = '';
$banco = 'agendamento';

$conn = new mysqli ($host, $usuario, $password, $banco);
if($conn->connect_errno){
    printf("Connect failed: %s\n" , $conn->connect_errno);
    exit();
}
?>