<?php

$host="localhost"; //servidor usado
$user="root";//usuario do banco
$pass="";//senha do banco se tiver senha e esta 147258369
$dbname="loccar";//nome do banco


$conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);