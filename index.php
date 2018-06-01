<?php

try {
    $pdo = new PDO("mysql:dbname=blog;host=localhost","admin","admin");
} catch (PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}

?>

<table border="1" width=400>
  <tr>
    <th>Nome</th>
    <th>Idade</th>
  </tr>
  
  <?php 
    $sql = "SELECT * FROM usuarios";
    
  ?>
  <tr>
    <td>Row 1: Col 1</td>
    <td>Row 1: Col 2</td>
  </tr>
</table>

