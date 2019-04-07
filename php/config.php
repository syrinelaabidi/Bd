<?php
function connect()
{
    $server = "localhost";
$base = "isg";
$username ="root";
$pass = "";

try
{
$con = new PDO("mysql:host=$server;dbname=$base",$username,$pass);
return $con;
}catch (PDOExeption $e)

?>{
die ("Erreuuuur :".$e->getMessage());
}
}