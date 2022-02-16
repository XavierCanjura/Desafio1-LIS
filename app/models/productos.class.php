<?php
    class Productos
    {
        //Atributos
        private $codigo = null;
        private $nombre = null;
        private $descripcion = null;
        private $imagen = null;
        private $categoria = null;
        private $precio = null;
        private $existencias = null;

        //Metodos SET y GET

        //Para codigo
        public function setCodigo($value)
        {
            $this->$codigo = $value;
            return true;
        }

        public function getCodigo()
        {
            return $this->$codigo;
        }

        //Para nombre
        public function setNombre($value)
        {
            $this->$nombre = $value;
            return true;
        }

        public function getNombre()
        {
            return $this->$nombre;
        }

        //Para descripcion
        public function setDescripcion($value)
        {
            $this->$descripcion = $value;
            return true;
        }

        public function getDescripcion()
        {
            return $this->$descripcion;
        }

        //Para imagen
        public function setImagen($value)
        {
            $this->$imagen = $value;
            return true;
        }

        public function getImagen()
        {
            return $this->$imagen;
        }

        //Para categoria
        public function setCategoria($value)
        {
            $this->$categoria = $value;
            return true;
        }

        public function getCategoria()
        {
            return $this->$categoria;
        }

        //Para precio
        public function setPrecio($value)
        {
            $this->$precio = $value;
            return true;
        }

        public function getPrecio()
        {
            return $this->$precio;
        }

        //Para existencias
        public function setExistencias($value)
        {
            $this->$existencias = $value;
            return true;
        }

        public function getExistencias()
        {
            return $this->$existencias;
        }
    }
?>