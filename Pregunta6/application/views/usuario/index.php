<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div>
        <ul class="nav nav-pills">
            <li role="presentation" class="active">
                <a href="#listar" aria-controls="home" role="tab" data-toggle="tab">LISTA DE PERSONAS</a>
            </li>
            <li role="presentation">
                <a href="#agregar" aria-controls="profile" role="tab" data-toggle="tab">AGREGAR NUEVA PERSONA</a>
            </li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="listar">
                <h2 style="text-align: center;">LISTA DE PERSONAS</h2>
                <table class="table table-hover">
                    <thead>
                        <th>CI</th>
                        <th>Nombre completo</th>
                        <th>Fecha de nacimiento</th>
                        <th>Telefono</th>
                        <th>Departamento</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                        <?php foreach ($listaUsuario as $value) { ?>
                            <tr>
                                <td><?php echo $value->ci; ?></td>
                                <td><?php echo $value->nombre; ?></td>
                                <td><?php echo $value->fecha_nac; ?></td>
                                <td><?php echo $value->telefono; ?></td>
                                <td><?php echo $value->departamento; ?></td>
                                <td>
                                    <a href="<?php echo base_url('usuario/edit')."/".$value->ci; ?>" class="btn btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="<?php echo base_url('usuario/delete')."/".$value->ci; ?>" class="btn btn-default"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div role="tabpanel" class="tab-pane" id="agregar">
                <h2 style="text-align: center;">AGREGAR NUEVA PERSONA</h2>
                <div class="row">
                    <div class="col-md-7 col-md-offset-2">
                        <form method="POST" action="<?php echo base_url('usuario/insert') ?>">
                            <div class="form-group">
                                <div class="col">
                                    <label>CI</label>
                                    <input type="text" class="form-control" name="ci" value="">
                                </div>
                                <div class="col">
                                    <label>Nombre completo</label>
                                    <input type="text" class="form-control" name="nombre" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col">
                                    <label>Fecha de nacimiento</label>
                                    <input type="date" class="form-control" name="fecha_nac" value="">
                                </div>
                                <div class="col">
                                    <label>telefono</label>
                                    <input type="text" class="form-control" name="telefono" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col">
                                    <label>departamento</label>
                                    <input type="text" class="form-control" name="departamento" value="">
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-default">ADICIONAR</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>

