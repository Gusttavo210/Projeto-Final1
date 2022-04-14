<?php

    class AlunoService {
        
        private $repository;

        public function __construct() {
            $this->repository = new DisciplinaRepository();
        }

        public function cadastrar(Aluno $aluno) {
            return $this->repository->fnAddAluno($aluno->getNome());
        }
    } 