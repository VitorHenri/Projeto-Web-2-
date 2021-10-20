<!DOCTYPE html>
<html>

<head>
    <title>ProjetoWeb</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
<header>
    <h1>Biblioteca Online</h1>
</header>

<?php
require_once('conexao.php');
if(!isset($_POST['titulo'])&& !isset($_POST['autor'])){
    $_POST['titulo'] = "padrão";
    $_POST['autor'] = "padrão";
}
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$sql = "INSERT INTO livros (id,nome,autor) values(null,'$titulo','$autor')";
try{ 
if($_POST['titulo']!="padrão"){
$con->exec($sql);
echo "<script>alert('Cadastro Realizado')</script>";
}
}catch(PDOException $e)
{
echo $sql . "<br>" . $e->getMessage();
}

?>

<div class="menu">
<form aciton="confirmação" method="post">
<input type="text" name="titulo" placeholder="Insira o nome do livro">
<input type="text" name="autor" placeholder="Digite o autor"><br>
<input type="submit" value="Cadastrar">
</form>
</div>


</div>
</body>

</html>