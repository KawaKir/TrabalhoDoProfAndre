

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/tabela.css">
  <title>Cadastro de Usuário</title>
</head>
<body>
  <div class="login-box">
    <h2>Registro</h2>
    <form>

<table style="color:white">



  <?php
require ('conn.php');

$x = $pdo -> prepare("SELECT * FROM USERS_TB");
$x->execute();

$y=$x->fetchall();


foreach($y as $usuario){
echo '<tr>
<th>'.$usuario['nome_user'].'<th>

<th>'.$usuario['sobrenome_user'].'<th>

<th>'.$usuario['email_user'].'<th>

<th>'.$usuario['DataNasc_user'].'<th>

</tr>

';}


?>
</table>








        <div class="Cadastrar">
        <a href="index.php">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
           Voltar
        
        </div>
      </div>
    </div>
  </div>
</body>
</html>