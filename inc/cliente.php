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

$dados = arrayMixDeClientes();

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
                        <table class="table tablesorter" id="tblListaClientes">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Nome</th>
                                <th>Tipo de pessoa</th>
                                <th>Clasificação</th>
                                <th>Telefone</th>
                                <th>Endereço de cobrança</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach( $dados as $cli ) : ?>
                                <tr>
                                    <td><?php echo $cli->getId(); ?></td>
                                    <td><?php echo $cli->getNome(); ?></td>
                                    <td><?php echo ($cli->getTipoPessoa() == 'pf') ? 'Pessoa Física' :  'Pessoa Juridica' ;?></td>
                                    <td><?php echo $cli->getEstrelas(); ?></td>
                                    <td><?php echo mascara( $cli->getTelCelular(), '(##) ####-####' ); ?></td>
                                    <td><?php echo $cli->getTipoCobranca(); ?></td>
                                    <td class="text-center">
                                        <a class='btn btn-info btn-xs' href="#" id="btnDetalheCliente" data-id="<?php echo $cli->getid(); ?>" data-tipoPessoa = "<?php echo $cli->getTipoPessoa(); ?>"><span class="glyphicon glyphicon-zoom-in"></span>Detalhes</a>
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