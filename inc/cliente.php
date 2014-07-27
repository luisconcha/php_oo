<?php
/**
 * File: cliente.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 26/06/14
 * Time: 16:47
 * Project: estudo_php
 * Copyright: 2014
 */

$dadosCliente = arrayDeClientes();

?>

<div class="row">
    <div id="listaClientes">
        <div class="col-md-10">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Lista de Clientes cadastrados</h3>
                    <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach( $dadosCliente as $cli ) : ?>
                            <tr>
                                <td><?php echo $cli->getid(); ?></td>
                                <td><?php echo $cli->getNome(); ?></td>
                                <td><?php echo $cli->getEmail(); ?></td>
                                <td><?php echo mascara( $cli->getTelCelular(), '(##) ####-####' ); ?></td>
                                <td class="text-center">
                                    <a class='btn btn-info btn-xs' href="#" id="btnDetalheCliente" data-id="<?php echo $cli->getid(); ?>"><span class="glyphicon glyphicon-zoom-in"></span>Detalhes</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div><!--END panel-body -->
            </div>
        </div>
    </div>
</div>