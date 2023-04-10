<?php
  if(isset($_POST['cadastrar'])){
    require_once $_SERVER['DOCUMENT_ROOT'].'/GerenciadorDeTarefas/DAO/TarefasDAO.php';
    $trf = new Tarefa();
    $trf->setNome($_POST['nome']);
    $trf->setDescricao($_POST['descricao']);
    $trf->setPrazo($_POST['prazo']);
    $trf -> setStatus('0');
   TarefasDAO::getInstance()->adicionartarefa($trf);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
    <style>
        body {background-color: #F3FCE3}
        h1 {color: #6F8F62}
        ul {
         list-style: none;
         padding: 0;
         margin: 0;
         text-align:center;
         margin-top: 15px;
        }
        li {
          border: 1px solid #ccc;
          border-radius: 5px;
          padding: 10px;
          margin-bottom: 10px;
          display: inline-block;
          width: 80%;
          background-color: #6F8F62;
        }
        i{
          color: black;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <center> <h1> TAREFAS </h1>  
  <a href="formulariocadastro.php"> <input type="submit" id="cadastrartrf" name="Nova tarefa" value="+  Adicionar Nova Tarefa"> </a> <br>
  </center>
  <?php
// consulta os registros do banco de dados
require_once $_SERVER['DOCUMENT_ROOT'].'/GerenciadorDeTarefas/conexao.php';
$sql = "SELECT * FROM tarefa ORDER BY id DESC";
$p_sql = Conexao::getInstance()->prepare($sql);
$p_sql->execute();

// cria uma lista não ordenada para exibir os registros
echo "<ul>";

//cada um dos registros será exibido como um item da lista
while ($row = $p_sql->fetch(PDO::FETCH_ASSOC)) {
   
    echo "<li>";
    echo "ID: " . $row['id'] . "<br>";
    echo "Nome: " . $row['nome'] . "<br>";
    echo "Descricao: " . $row['descricao'] . "<br>"."<br>";
    echo "Dias para concluir: " . $row['prazo'] . "<br>";
    echo "<a href='/GerenciadorDeTarefas/Interface/Funçoes/atlzStatus.php?id={$row['id']}'><i id='icone' class='fa fa-circle-o'></i></a>";
    echo "   ";
    echo "<a href='/GerenciadorDeTarefas/Interface/Funçoes/excluirtarefa.php?id={$row['id']}'><i class='fa fa-trash'></i></a>";
    echo "</li>". "<br>";

}

// encerra a lista
echo "</ul>";
?>
<script>
  const meuIcone = document.getElementById('icone');

meuIcone.addEventListener('click', function() {
  if (meuIcone.classList.contains('fa-circle-o')) {
    meuIcone.classList.remove('fa-circle-o');
    meuIcone.classList.add('fa-check');
  } else {
    meuIcone.classList.remove('fa-check');
    meuIcone.classList.add('fa-circle-o');
  }});
</script>
</body>
</html>