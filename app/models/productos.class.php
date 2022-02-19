<?php
    class Productos extends Validator
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
            if($this->isValidateCodigo($value))
            {
                $this->codigo = $value;
                return true;
            }
            else
            {
                return false;
            }
        }

        public function getCodigo()
        {
            return $this->codigo;
        }

        //Para nombre
        public function setNombre($value)
        {
            if($this->isValidateText($value, 1, 100))
            {
                $this->nombre = $value;
                return true;
            }
            else
            {
                return false;
            }
        }

        public function getNombre()
        {
            return $this->nombre;
        }

        //Para descripcion
        public function setDescripcion($value)
        {
            if($this->isValidateAlphanumeric($value, 1, 1000))
            {
                $this->descripcion = $value;
                return true;
            }
            else
            {
                return false;
            }
        }

        public function getDescripcion()
        {
            return $this->descripcion;
        }

        //Para imagen
        public function setImagen($value)
        {
            if($this->isImage($value))
            {
                $this->imagen = $value;
                return true;
            }
            else
            {
                return false;
            }
        }

        public function getImagen()
        {
            return $this->imagen;
        }

        //Para categoria
        public function setCategoria($value)
        {
            if($this->isValidateText($value, 1, 100))
            {
                $this->categoria = $value;
                return true;
            }
            else
            {
                return false;
            }
        }

        public function getCategoria()
        {
            return $this->categoria;
        }

        //Para precio
        public function setPrecio($value)
        {
            if($this->isValidateMoney($value))
            {
                $this->precio = $value;
                return true;
            }
            else
            {
                return false;
            }
        }

        public function getPrecio()
        {
            return $this->precio;
        }

        //Para existencias
        public function setExistencias($value)
        {
            if($this->isValidateNumeric($value))
            {
                $this->existencias = $value;
                return true;
            }
            else
            {
                return false;
            }
        }

        public function getExistencias()
        {
            return $this->existencias;
        }

        //FUNCIONES PARA HACER CRUD AL ARCHIVO XML

        public function getProductos()
        {
            return simplexml_load_file("../web/productos.xml");
        }

        public function getProductoForId()
        {
            $productos = $this->getProductos();
            $index=0;
            $i=0;
            foreach($productos->producto as $producto)
            {
                if($producto->codigo == $this->codigo)
                {
                    $index = $i;
                    $this->nombre = $productos->producto[$index]->nombre;
                    $this->descripcion = $productos->producto[$index]->descripcion;
                    $this->imagen = $productos->producto[$index]->img;
                    $this->categoria = $productos->producto[$index]->categoria;
                    $this->precio = $productos->producto[$index]->precio;
                    $this->existencias = $productos->producto[$index]->existencias;
                    return true;
                }
                $i++;
            }
            return false;
        }

        public function createProducto()
        {
            $productos = $this->getProductos();
            $producto = $productos->addChild('producto');
            $producto->addChild('codigo', $this->codigo);
            $producto->addChild('nombre', $this->nombre);
            $producto->addChild('descripcion', $this->descripcion);
            $producto->addChild('img', $this->imagen);
            $producto->addChild('categoria', $this->categoria);
            $producto->addChild('precio', $this->precio);
            $producto->addChild('existencias', $this->existencias);

            file_put_contents('../web/productos.xml', $productos->asXML());
            return true;
        }

        public function updateProducto()
        {
            $productos = $this->getProductos();
            $index=0;
            $i=0;
            foreach($productos->producto as $producto)
            {
                if($producto->codigo == $this->codigo)
                {
                    $index = $i;
                    break;
                }
                $i++;
            }

            $productos->producto[$index]->nombre = $this->nombre;
            $productos->producto[$index]->descripcion = $this->descripcion;
            $productos->producto[$index]->img = $this->imagen;
            $productos->producto[$index]->categoria = $this->categoria;
            $productos->producto[$index]->precio = $this->precio;
            $productos->producto[$index]->existencias = $this->existencias;

            file_put_contents('../web/productos.xml', $productos->asXML());
            return true;
        }

        public function deleteProducto()
        {
            $productos = $this->getProductos();
            $index=0;
            $i=0;
            foreach($productos->producto as $producto)
            {
                if($producto->codigo == $this->codigo)
                {
                    $index = $i;
                    break;
                }
                $i++;
            }

            unlink('../web/img/'.$productos->producto[$index]->img);
            unset($productos->producto[$index]);
            file_put_contents('../web/productos.xml', $productos->asXML());
            return true;
        }
    }
?>