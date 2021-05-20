<?php

require_once("config.php");

// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM FE_tb_usuarios");
// echo json_encode($usuarios);

//* * * * * * * Carrega um usuário
// $root = new Usuario();
// $root->loadbyId(3);
// echo $root;

//* * * * * * * Carrega a lista
// $lista = Usuario::getList();
// echo json_encode($lista);

//* * * * * * * Carrega a lista de usuários buscando pelo login
// $search = Usuario::search("jo");
// echo json_encode($search);

 //* * * * * * * Carrega um usuário usando o login e a senha
//  $usuario = new Usuario;
//  $usuario->login("felipe","12345");
//  echo $usuario;


//* * * * * * * Insere um usuário usando o login e a senha
// $aluno = new Usuario();
// $aluno->setDeslogin("aluno2");
// $aluno->setDessenha("@luno");
// $aluno->insert();
// echo $aluno;

//* * * * * * * Atualiza um usuário usando o login e a senha
// $update = new Usuario();
// $update->loadById(4);
// $update->update("test3","senhateste");
// echo $update;

//* * * * * * * Deleta um usuário usando o login e a senha

$usuario = new Usuario();
$usuario->loadById(4);
$usuario->delete();

echo $usuario;
?>