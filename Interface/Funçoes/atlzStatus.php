
<script>
    function mudarIcone(let id){
        if (id = 1){
            meuIcone.classList.remove('fa fa-circle-o');
            meuIcone.classList.add('fa fa-circle-check');
        }else{
            meuIcone.classList.remove('fa fa-circle-check');
            meuIcone.classList.add('fa fa-circle-o');
        }
    }
</script>


<?php
 require_once $_SERVER['DOCUMENT_ROOT'].'/GerenciadorDeTarefas/DAO/TarefasDAO.php';
 if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $status = $_GET['status'];
    //funcao para mudar o icone
    echo "<script>mudarIcone('{$id}')</script>";
    //passa o id da tarefa para função que atualiza o status
    TarefasDAO::getInstance()->atlzStatus($id, $status);
    //retorna para página inicial após atualizar ou relata erro se não.
    header("Location: /GerenciadorDeTarefas/Interface/paginainicial.php");
    exit();
} else {
    echo "Ocorreu um erro ao tentar marcar sua tarefa como concluída! Tente novamente.";
}
?>