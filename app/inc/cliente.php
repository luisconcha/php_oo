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

use \app\src\LUVETT\Db\Conexao;
use \app\src\LUVETT\Fixtures\Persistencia;

$conexao = new Conexao();

$objPessoa    = new Persistencia( $conexao, 'tbl_pessoa2' );
$listaUsuarios = $objPessoa->getAll();

if( count($listaUsuarios) > 0 ) :
?>
<div class="row">

    <div id="listaClientes">
        <div class="col-md-11">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Lista de Clientes cadastrados</h3>
                    <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table tablesorter table-hover" id="tblListaClientes">
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
                            <?php foreach( $listaUsuarios as $cli ) : ?>
                                <tr>
                                    <td><?php echo $cli->id; ?></td>
                                    <td><?php echo $cli->nome; ?></td>
                                    <td><?php echo ($cli->tipoPessoa == 1) ? 'Pessoa Física' :  'Pessoa Juridica' ;?></td>
                                    <td><?php echo $cli->estrelas; ?></td>
                                    <td><?php echo mascara( $cli->telCelular, '(##) ####-####' ); ?></td>
                                    <td><?php echo ($cli->tipoCobranca != '') ? $cli->tipoCobranca : '--------------'; ?></td>
                                    <td class="text-center">
                                        <a class='btn btn-info btn-xs' href="#" id="btnDetalheCliente" data-id="<?php echo $cli->id; ?>" data-tipoPessoa = "<?php echo $cli->tipoPessoa; ?>"><span class="glyphicon glyphicon-zoom-in"></span>Detalhes</a>
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
<?php else: ?>

    <div role="alert" class="alert alert-danger alert-dismissible fade in">
        <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <strong>Antes de executar a aplicação no navegador, favor realizar os seugintes passos:</strong> <br/>Executar o arquivo: <b>ExecutaFixture.php</b>
        <p>No promt de comando, ir ate a pasta Fixtures (/var/www/html/studo_php/php_oo/app/src/LUVETT/Fixtures) e executar:</p>
        <p><b>php ExecutaFixture.php</b></p>
    </div>

<?php endif ?>