<?php 
$cnx= new PDO ('mysql:host;dbname=students','root','');
$rep= $cnx -> query ('SELECT * from students  ');
?>