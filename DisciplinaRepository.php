<?php
class ProfessorRepository
{
    private $conn;

    public function __construct() {

        $connection = new Connection();
        $this->conn = $connection->getConnection();
    }
    
    function fnAddAluno(Aluno $aluno): bool
    {
        try {

            $query = "insert into categoria (nome) values (:pnome) on conflict do nothing";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":pnome", $aluno->getNome());

            if ($stmt->execute())
                return true;

            return false;
        } catch (PDOException $error) {
            echo "Erro ao inserir a categoria no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    function fnAddProfessor($professor): bool
    {
        try {

            $query = "insert into produto (nome, descricao, status, aluno_id) ";
            $query .= "values (:pnome, :pdescricao, :pstatus, :palunoId)";
            $query .= " on conflict do nothing";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":pnome", $professor->getNome());
            $stmt->bindValue(":pdescricao", $professor->getDescricao());
            $stmt->bindValue(":pstatus", $professor->getStatus());
            $stmt->bindValue(":palunoId", $professor->getAlunoId());

            if ($stmt->execute())
                return true;

            return false;
        } catch (PDOException $error) {
            echo "Erro ao inserir o produto no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    function fnAddDisciplina($disciplina): bool
    {
        try {

            $query = "insert into estoque (data_cadastro, nome, professor_id) ";
            $query .= "values (:pdataCadastro, :pnome, :pprofessorId)";
            $query .= " on conflict do nothing";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":pdataCadastro", $disciplina->getDataCadastro());
            $stmt->bindValue(":pnome", $disciplina->getNome());
            $stmt->bindValue(":pprofessorId", $disciplina->getProfessorId());

            if ($stmt->execute())
                return true;

            return false;
        } catch (PDOException $error) {
            echo "Erro ao inserir o estoque no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }
}