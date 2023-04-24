<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
            <h2>Actualizar datos</h2>
            <form method="POST" action="<?php echo base_url('usuario/update') ?>">
                <?php foreach ($datosUsuario as $value) { ?>
                    <div class="row">
                        <div class="col">
                            <label>CI</label>
                            <input type="text" class="form-control" name="ci" value="<?php echo $value->ci; ?>">
                        </div>
                        <div class="col">
                            <label>Nombre completo</label>
                            <input type="text" class="form-control" name="nombre" value="<?php echo $value->nombre; ?>">
                        </div>
                        <div class="col">
                            <label>Fecha de nacimiento</label>
                            <input type="date" class="form-control" name="fecha_nac" value="<?php echo $value->fecha_nac; ?>">
                        </div>
                        <div class="col">
                            <label>telefono</label>
                            <input type="text" class="form-control" name="telefono" value="<?php echo $value->telefono; ?>">
                        </div>
                        <div class="col">
                            <label>departamento</label>
                            <input type="text" class="form-control" name="departamento" value="<?php echo $value->departamento; ?>">
                        </div>
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-default">MODIFICAR</button>
            </form>
        </div>

    </div>
</body>

</html>