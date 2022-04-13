<?php

    class ProdutoService {
        
        private $repository;

        public function __construct() {
            $this->repository = new EstoqueRepository();
        }

        public function cadastrar(Produto $produto) {
            return $this->repository->fnAddProduto($produto);
        }
    } 
© 2022 GitHub, Inc.