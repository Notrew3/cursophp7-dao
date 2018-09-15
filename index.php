<?php
require_once("config.php");

//Carrega um usuario
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Cerrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("ma");
//echo json_encode($search);

//Carrega um usuario usuando o login e a senha
//$usuario = new Usuario();
//$usuario->login("Mario", "12");
//echo $usuario;

//Insere dados no banco
//$usuario = new Usuario();
//$usuario->setDeslogin("Juan");
//$usuario->setDessenha("14123");
//$usuario->insert();

//Altera dados
//$usuario = new Usuario();
//$usuario->loadById(5);
//$usuario->update("Hail", "231452");
//echo $usuario;

//Deletar dados
$usuario = new Usuario();
$usuario->loadById(5);
$usuario->delete();
echo $usuario;

?>