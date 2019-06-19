<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// Соединение с сервером 4D SQL
$db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');
  $table = "clients1";
try {
     $db = new PDO("mysql:dbname=mydatabase;host=localhost", "root");
     $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );//Error Handling
     $sql ="CREATE table $table(
 id INT NOT NULL AUTO_INCREMENT,
 first_name VARCHAR(45) NOT NULL,
 last_name VARCHAR(45) NOT NULL,
email VARCHAR(45) NOT NULL,
company_name VARCHAR(45) NOT NULL,
is_active INT(11) NULL DEFAULT 0,
age INT(11) NULL,
PRIMARY KEY (id))";
     $db->exec($sql);
  print("Created $table Table.\n");

} catch(PDOException $e) {
    echo $e->getMessage();
}
$sql = "INSERT INTO clients1 (first_name, last_name, email, company_name, "
        . "is_active,age) VALUES ('Thom', 'Vial', 'thom.v@some.com',"
        . "Comfy, 1, 25)";