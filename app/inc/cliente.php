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

//$dados = arrayMixDeClientes();

use \app\src\LUVETT\Db\Conexao;
use \app\src\LUVETT\Fixtures\Persistencia;
use \app\src\LUVETT\Fixtures\Fixtures;
use \app\src\LUVETT\Person\PessoaFisica;
use app\src\LUVETT\Person\PessoaJuridica;


$pessoaFisica   = new PessoaFisica( '','Luis Alberto Concha Curay 22','luvett@gmail.com','612222222','6133333333','1','1','Casa 01','bairro 01','4444444','1','1112221199','3123123','../publico/imagens/luis.jpg','10','3' );
$pessoaJuridica = new PessoaJuridica( '','Empresa 02','empresa01@globo.com','6166667777','6199998888','2','2','Av Industrial numero 2','Castranheras','44322212','2','12323456765432','Empresa Globo Sat','3' );

$conexao = new Conexao();
$banco   = new Fixtures( $conexao );

if( $banco->varificaExistenciaBD() ) {
    if( $banco->criarTabela() ) {
        try{
            $objPessoa    = new Persistencia( $conexao, 'tbl_pessoa2' );
            $objPessoa->persist( $pessoaFisica );
            $objPessoa->persist( $pessoaJuridica );
        }
        catch( \PDOException $e ) {
            echo "Erro no Arquivo: {$e->getFile()} . <br />Linha: {$e->getLine()} . <br />Mensagem: {$e->getMessage()}";
        }
    }
}

$listaUsuarios = $objPessoa->getAll();

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