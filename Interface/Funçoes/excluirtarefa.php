<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/GerenciadorDeTarefas/DAO/TarefasDAO.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    //passa o id da tarefa para função que exclui
    TarefasDAO::getInstance()->excluirtarefa($id);
    
    //retorna para página inicial após efetuar a exclusão ou relata erro se não efetuar.
    header("Location: /GerenciadorDeTarefas/Interface/paginainicial.php");
    exit();
} else {
    echo "Ocorreu um erro ao tentar excluir sua tarefa! Tente novamente.";
}
?>