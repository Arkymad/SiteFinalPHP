<?php

    class PlanoService {
        
        private $repository;

        public function __construct() {
            $this->repository = new PlanoRepository();
        }

        public function cadastrar(Plano $plano): bool {
            return $this->repository->fnAddPreco($plano);
        }
        
        public function listar($limit) {
            return $this->repository->fnListPreco($limit);
        }
        
        public function localizar($id) {
            return $this->repository->fnLocalizarPreco($id);
        }
    } 