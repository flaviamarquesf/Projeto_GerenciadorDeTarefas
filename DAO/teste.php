<html>
<?php 
        require_once $_SERVER['DOCUMENT_ROOT'].'/GerenciadorDeTarefas/DAO/TarefasDAO.php';
        //cadastrando clientes
      /*  $t = new Tarefa();
        $t->setNome("atividade");
        $t->setDescricao("fazer atividade de pipipi e popopo");
        $t->setPrazo("3");
        $t->setStatus("0");
        TarefasDAO::getInstance()->adicionartarefa($t);
        echo "funfa";*/

       // deletar
        TarefasDAO::getInstance()->excluirtarefa(5);
        

    ?>


</html>