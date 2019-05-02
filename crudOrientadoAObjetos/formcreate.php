<?php 
require_once 'classes/usuarios.php';


$nome = $_POST['nome'];
$email = $_POST['email'];

echo $nome;

echo $email;

if(!empty($nome) && !empty($email)):

    $usuarios = new usuarios();

    $usuarios->setNome($nome);

    $usuarios->setEmail($email);

    $usuarios->insert();

  endif;

?>