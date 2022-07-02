<?php

  $nom = $_GET["Nom"];
  $email = $_GET["Email"];
  $Mdp = $_GET["Mots_de_passe"];
  
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "compte";
  
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO utilisateurs (Nom, Email, Mots_de_passe)
    VALUES ('$nom', '$email', '$Mdp')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
  } 
  catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
?>