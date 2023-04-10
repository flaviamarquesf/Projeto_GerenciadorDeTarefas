<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de Tarefas</title>
    <style>
        body {background-color: #F3FCE3}
        h1 {color: #6F8F62}
    </style>
</head>
<body>
<form method="post" action="paginainicial.php">
    <fieldset>
        <pre>
          <h1>Nova tarefa</h1>
            <label>
              Tarefa:
              <input type="text" name="nome" id="nome"/>
            </label>
              <br>
            <label>
              Descrição:
              <textarea name="descricao" id="descricao"></textarea>
            </label>
              <br>
            <label>
              Quantos dias você tem para fazer essa tarefa:
              <input type="text" name="prazo"  id="prazo"/>
            </label>
              <br>
        </pre>
    </fieldset>
    <menu>
      <button id="sair" onclick="Location: /GerenciadorDeTarefas/Interface/paginainicial.php">Sair</button>
      <button type="submit" id="cadastrar" name="cadastrar">Cadastrar</button>
    </menu>
  </form>
</body>
</html>