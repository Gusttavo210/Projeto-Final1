<?php

    class DisciplinaService {
        
        private $repository;

        public function __construct() {
            $this->repository = new DisciplinaRepository();
        }

        public function cadastrar(Disciplina $disciplina) {
            return $this->repository->fnAddDisciplina($disciplina);
        }
    } 
© 2022 GitHub, Inc.