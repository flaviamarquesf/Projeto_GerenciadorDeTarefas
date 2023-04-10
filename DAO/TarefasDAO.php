<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/GerenciadorDeTarefas/Tarefa.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/GerenciadorDeTarefas/conexao.php';

class TarefasDAO{
    public static $instance;

    private function __construct() {

    }

    public static function getInstance() {

    if (!isset(self::$instance))

    self::$instance = new TarefasDAO();

    return self::$instance;

    }
    //função de inserir tarefas
    public function adicionartarefa ($tarefa){
        try {
            $sql = "INSERT INTO tarefa (nome,descricao,prazo,status) VALUES (:nome,:descricao,:prazo,:status)"; 
            //import do banco de dados
            $p_sql = conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $tarefa->getNome());
            $p_sql->bindValue(":descricao", $tarefa->getDescricao());
            $p_sql->bindValue(":prazo", $tarefa->getPrazo());
            $p_sql->bindValue(":status", $tarefa->getStatus());
            return $p_sql->execute();
            } catch (Exception $exc) {
            print "Ocorreu um erro, sua tarefa NÃO foi salva.".$exc->getMessage();
            }      
    }
    //função de excluir tarefas
    public function excluirtarefa ($id){
        try {
            $sql = "DELETE FROM tarefa WHERE id = :id";
            //import do banco de dados
            $p_sql = conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            return $p_sql->execute();
            } catch (Exception $exc) {
            print "Ocorreu um erro ao tentar excluir sua tarefa, tente novamente.".$exc->getMessage();
            }
    }
    //função de conclusão de tarefa a partir da atualização do status
    function atlzStatus($id, $valorAtual) {
      $novoValor = $valorAtual == 1 ? 0 : 1; // muda para o valor oposto
         try {
            $sql = "UPDATE tarefa SET status = :novoValor WHERE id = :id";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":novoValor", $novoValor);
            $p_sql->bindValue(":id", $id);
            $p_sql->execute();
          return true;
          } catch (Exception $exc) {
            echo "Erro ao atualizar valor: " . $exc->getMessage();
          }
    }
}
?>