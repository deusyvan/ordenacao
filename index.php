<?php

try {
    $pdo = new PDO("mysql:dbname=blog;host=localhost","admin","admin");
} catch (PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}

?>
<form method="GET">
	<select name="ordem" onchange="this.form.submit()">
		<option></option>
		<option value="nome">Pelo nome</option>
		<option value="idade">Pela idade</option>
	</select>
</form>
<table border="1" width=400>
  <tr>
    <th>Nome</th>
    <th>Idade</th>
  </tr>
  
  <?php 
  if (isset($_GET['ordem']) && empty($_GET['ordem']) == FALSE){
      
  }
    $sql = "SELECT * FROM usuarios ORDER BY idade";
    $sql = $pdo->query($sql);
    if ($sql->rowCount() > 0){
        foreach ($sql->fetchAll() as $usuario):    
        ?>
          <tr>
            <td><?php echo $usuario['nome']; ?></td>
            <td><?php echo $usuario['idade']; ?></td>
          </tr>
          
         <?php 
         endforeach;     
    }
    ?>
</table>