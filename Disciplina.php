<?php

    class Disciplina {

        private int $id;
        private string $dataCadastro;
        private int $nome;
        private int $professorId;

        # encapsulamento
        public function getId():int{
            return $this->id;
        }

        public function setId($id): void {
            $this->id = $id;
        }

        public function getDataCadastro() {
            return $this->dataCadastro;
        }

        public function setDataCadastro($dataCadastro): void {
            $this->dataCadastro = $dataCadastro;
        }

        public function getNome(): int {
            return $this->nome;
        }

        public function setNome($nome): void {
            $this->qtdMin = $nome;
        }

        public function getProfessorId(): int {
            return $this->professorId;
        }

        public function setProfessorId($professorId): void {
            $this->produtoId = $professorId;
        }
    }