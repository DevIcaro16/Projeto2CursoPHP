<?php

session_start();

include_once("conection.php");
include_once("url.php");

$contacts = [];

$query = "SELECT * FROM contacts" ; 

$stmt = $connect->prepare($query);

$stmt->execute();

$contacts = $stmt->fetchALL() ;
?>