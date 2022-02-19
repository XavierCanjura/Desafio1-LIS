<h1 class='text-center my-3'>Agregar Producto</h1>
<div class="container my-3">
    <form method="POST" autocomplete="off" enctype= 'multipart/form-data'>
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="nombre" class="form-label">Codigo de producto</label>
                <input type="text" class="form-control" id="codigo" placeholder="Ingrese el codigo del producto" name='codigo' value='<?php echo isset($_POST['codigo']) ?  $_POST['codigo'] : '' ?>'>
            </div>
            <div class="mb-3 col-md-6">
                <label for="nombre" class="form-label">Nombre de producto</label>
                <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre del producto" name='nombre' value='<?php echo isset($_POST['nombre']) ?  $_POST['nombre'] : '' ?>'>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción de producto</label>
                <textarea class="form-control" id="descripcion" rows="3" name='descripcion' placeholder='Ingrese una descripción del producto'><?php echo isset($_POST['descripcion'])?trim($_POST['descripcion']) : null ?></textarea>
            </div>
            <div class="mb-3 col-md-6">
                <?php 
                    $options = array('Textil', 'Promocional');
                    Page::showSelect('Categoria de producto', 'categoria', isset($_POST['categoria']) ? $_POST['categoria'] : null, $options);
                ?>
            </div>
            <div class="mb-3 col-md-6">
                <label for="precio" class="form-label">Precio de producto</label>
                <input type="text" class="form-control" id="precio" placeholder="Ingrese el precio de producto" name='precio' value='<?php echo isset($_POST['precio']) ?  $_POST['precio'] : '' ?>'>
            </div>
            <div class="mb-3 col-md-6">
                <label for="existencia" class="form-label">Existencias</label>
                <input type="text" class="form-control" id="existencia" placeholder="Ingrese el número de existencias" name='existencia' value='<?php echo isset($_POST['existencia']) ?  $_POST['existencia'] : '' ?>'>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Seleccione una imagen</label>
                <input class="form-control" type="file" id="image" name='image'>
            </div>
            <div class='col-12 d-flex justify-content-center'>
                <button type="submit" class="btn btn-primary" name='crear'>Crear Producto</button>
            </div>
        </div>
    </form>
</div>