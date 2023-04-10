# Projeto_GerenciadorDeTarefas
Gerenciador de Tarefas desenvolvido para a seleção de estágio de desenvolvedor.
 ↳ Linguagens utilizadas: PHP, HTML, JavaScript e CSS;
 ↳ A conexão com o Banco de Dados SQl foi feita com PDO (PHP Data Object);
 ↳ Os métodos disponíveis dentro da classe DAO são instanciados em arquivos nomeados com a função que desempenham (adicionar, apagar), cada item da página inicial possui o caminho para página de sua respectiva função que será executada quando o usuário clicar em cada ícone.

↳ Como Funciona:
 Na Página Inicial estarão disponíveis todas as tarefas cadastradas pelo usuário, cada item pode de ser marcado como concluído (clicando no circulo vazio) e/ou ser excluído (lixeira), quando a tarefa for marcada como concluída o circulo será substituido por um símbolo de 'check'.    Para cadastrar uma nova tarefa clica-se no botão de "adicionar nova tarefa" que se encontra no topo da página, será aberto um formulário para cadastro da nova tarefa contendo os campos de Nome, Descrição e Prazo (sendo o prazo o número de dias para realizar aquela atividade e não obrigatório o seu preenchimento). 

↳ Funcionamento Interno:
 Dentro do Banco de Dados os status das tarefas são representados pelos dígitos 0 e 1, onde 0 representa o status de 'não concluída' e 1 o status de 'concluída'. Ao serem adicionadas o status de todas as atividades são inicalmente setados como 0, ao clicar para marcar como concluída ele será modificado dentro do banco de dados.
