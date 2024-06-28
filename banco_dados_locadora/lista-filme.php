<?php

    $conn = new PDO('mysql:host=localhost;dbname=dbLocadora',$username="root",$password="");

  
    $sth=$conn->$prepare("SELECT * FROM tbfilmes");
    $sth->execute();

    $result=$sth->fectchAll();
    print_r($result);

foreach (tbfilmes as $value) {
  echo "$value <br>";
},git add 

?>