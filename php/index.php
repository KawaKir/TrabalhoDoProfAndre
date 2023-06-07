<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/index.css">
  <title>Cadastro de Usuário</title>
</head>
<body>
  <form action="CRUD/CadUser.php" method="post" style="text-align:center">
  <div class="login-box">
    <h2>Cadastro de Usuário</h2>
    
      <div class="box-usuario">
        <input type="text" name="nome" required>
        <label>Nome</label>
      </div>

      <br>

      <div class="box-usuario">
      
        <input type="text" name="sobrenome" required>
          <label>Sobrenome</label>
      </div>
      
      <br>
      <div class="box-usuario"> 
        <input type="text" name="email" required>
       <label>Email</label>
      </div>

      <br>
      <div class="box-usuario">
        <input type="date" name="data_nasc">
        <label>data de Nascimento</label>
      </div>

      <br>
      <div class="box-usuario">
        <input type="password" name="senha" required>
        <label>Senha</label>
      </div>

      <br>

      <div class="box-usuario">
        <input type="password" name="confirme_senha" min="1" required>
        <label>Confirmar senha</label>
        
      </div>
      <br>
      <div class="Cadastrar">
        <button type="submit" class="btn btn-primary"> Cadastrar
          <!-- <span></span>
          <span></span>
          <span></span>
          <span></span>
          Cadastrar -->
         </button>
        </div>
<br>
        <a href="tabela.php" class="btn btn-success">Ver Registro</a>
    </div>
  </div>
  
  
 </form>
</body>
</html>