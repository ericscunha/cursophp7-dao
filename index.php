<?php  

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

/* Carrega um usuário
$root = new Usuario();

$root->loadbyId(3);

echo $root; */

/* Carrega uma lista de usuario 

$lista = Usuario::getList();

echo json_encode($lista); */

/* Carrega uma lista de usuários buscando pelo login (like) 
$search = Usuario::search("jo");
echo json_encode($search); */

/* Carrega um usuário usando o login e a senha 
$usuario = new Usuario();
$usuario->login("root", "#t=$");
echo $usuario;*/

/* Insert de usuário novo */
//$aluno = new Usuario();
/* obs.: Pode criar um metódo cosntrutor (__construct($login = "", $password = "")) na classe passando os campos como parametros não obrigatórios, e chamando setDeslogin e setDessenha no corpo o
que eliminaria a necessidade de chamar abaixo 
$aluno->setDeslogin("aluno");
$aluno->setDessenha("@lun0");
$aluno->insert();
echo $aluno;*/
$usuario = new Usuario();
$usuario->loadbyId(6);
$usuario->update("professor","!@#$&");
echo $usuario;
?>