<?php

     $bdd = new PDO('mysql:host=localhost;dbname=dsi21_g1_2019;charset=utf8', 'root','');   
     $id= $_POST['id'];   
     $firstname=$_POST['firstname'];
     $lastname=$_POST['lastname'] ;   
     $email=$_POST['email'];
     $phone=$_POST['phone'];
     $bdd->exec("INSERT INTO students(id,firstname,lastname,email,phone) VALUES ('$id','$firstname','$lastname','$email','$phone')"); 
  ?>