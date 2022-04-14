<?php

    class ProfessorService {
        
        private $repository;

        public function __construct() {
            $this->repository = new DisciplinaRepository();
        }

        public function cadastrar(Professsor $professor) {
            return $this->repository->fnAddProfessor($professor);
        }
    } 
© 2022 GitHub, Inc.