<?php
global $pdo, $URL;
include ('../app/config.php');
include('../layout/sesion.php');
include ('../layout/parte1.php');
include ('../app/controllers/usuarios/listado_de_usuarios.php');
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="m-0">Sistema Administrativo para salones de bellezas y barberias
                        </h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <!-- Main content-->
        <div class="content">
            <div class="container-fluid"> <!-- Contenido del sistemas-->
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Usuarios Registrados</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                    </button>
                                </div>

                            </div>


                                <table class="table table-bordered table-hover table-striped table-sm">
                                    <tr>
                                        <th>Nro</th>
                                        <th>Nombres</th>
                                        <th>Correo</th>
                                    </tr>
                                    <tbody>
                                    <?php
                                    foreach ($datos_usuarios as $datos_usuarios) {?>

                                        <tr>
                                            <td> <?php echo $datos_usuarios['id']?></td>
                                            <td><?php echo $datos_usuarios['nombres']?></td>
                                            <td><?php echo $datos_usuarios['email']?></td>
                                        </tr>
                                        <?php
                                    }

                                    ?>
                                    </tbody>
                                </table>

                        </div>
                    </div>
                </div>
            </div> <!-- DIV container fluid-->
        </div> <!-- div Content -->
    </div> <!-- div del wrapper-->

<?php include ('../layout/parte2.php'); ?>