<h1 class='text-center my-3'>Editar Producto</h1>
<div class="container my-3">
    <form method="POST" autocomplete="off" enctype= 'multipart/form-data'>
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="nombre" class="form-label">Nombre de producto</label>
                <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre del producto" name='nombre' value='<?=isset($_POST['nombre']) ? $_POST['nombre'] :$productoC->getNombre(); ?>'>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción de producto</label>
                <textarea class="form-control" id="descripcion" rows="3" name='descripcion' placeholder='Ingrese una descripción del producto'><?=isset($_POST['descripcion']) ? $_POST['descripcion'] :$productoC->getDescripcion(); ?></textarea>
            </div>
            <div class="mb-3 col-md-6">
                <?php 
                    $options = array('Textil', 'Promocional');
                    Page::showSelect('Categoria de producto', 'categoria', isset($_POST['categoria']) ? $_POST['categoria'] : $productoC->getCategoria(), $options);
                ?>
            </div>
            <div class="mb-3 col-md-6">
                <label for="precio" class="form-label">Precio de producto</label>
                <input type="text" class="form-control" id="precio" placeholder="Ingrese el precio de producto" name='precio' value='<?= isset($_POST['precio']) ? $_POST['precio'] : $productoC->getPrecio(); ?>'>
            </div>
            <div class="mb-3 col-md-6">
                <label for="existencia" class="form-label">Existencias</label>
                <input type="text" class="form-control" id="existencia" placeholder="Ingrese el número de existencias" name='existencia' value='<?=isset($_POST['existencia']) ? $_POST['existencia'] :$productoC->getExistencias(); ?>'>
            </div>
            <div class="mb-3">
                <img src="../web/img/<?=$productoC->getImagen() ?>" alt="" width='150'>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Seleccione una imagen</label>
                <input class="form-control" type="file" id="image" name='image' value='<?=$productoC->getImagen(); ?>'>
            </div>
            <div class='col-12 d-flex justify-content-center'>
                <button type="submit" class="btn btn-primary" name='editar'>Editar Producto</button>
            </div>
        </div>
    </form>
</div>