<?php

    class Objeto_Blog{

        //Propiedades de objeto blog
        private $Id;
        private $Titulo;
        private $Fecha;
        private $Comentario;
        private $Imagen;

        //Metodos de acceso Getters y setters
        public function getId(){
            return $this->Id;
        }
        public function setId($Id){
            $this->Id = $Id;
        }

        public function getTitulo(){
            return $this->Titulo;
        }
        public function setTitulo($Titulo){
            $this->Titulo = $Titulo;
        }

        public function getFecha(){
            return $this->Fecha;
        }
        public function setFecha($Fecha){
            $this->Fecha = $Fecha;
        }

        public function getComentario(){
            return $this->Comentario;
        }
        public function setComentario($Comentario){
            $this->Comentario = $Comentario;
        }

        public function getImagen(){
            return $this->Imagen;
        }
        public function setImagen($Imagen){
            $this->Imagen = $Imagen;
        }
    }


?>