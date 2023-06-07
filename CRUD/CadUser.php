<?php 

require('../conn.php');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$data_nasc = $_POST['data_nasc'];
$senha = $_POST['senha'];
$confirme_senha = $_POST['confirme_senha'];

if(empty($email)||empty($nome)||empty($sobrenome)||empty($data_nasc)||empty($senha)||empty($confirmSenha)){

header('../index.html?Refill=1');

;}else if($senha == $confirme_senha){


    $cadUser=$pdo->prepare('INSERT into users_tb(nome_user,sobrenome_user,email_user,senha_user,DataNasc_user) values (:a,:b,:c,:d,:e)');
    $cadUser->execute([':a'=>$nome,':b'=>$sobrenome,':c'=>$email,':d'=>$senha,':e'=>$data_nasc]);

Header('location: ../Usuarios.html')

;}else{

header('../index.html?Refill=1');
    
}

?>