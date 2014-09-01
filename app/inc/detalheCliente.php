<?php
/**
 * File: detalheCliente.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language:
 * Date: 26/07/14
 * Time: 21:45
 * Project: estudo_php
 * Copyright: 2014
 */

require_once('../../config.php');

use \app\src\LUVETT\Db\Conexao;
use \app\src\LUVETT\Fixtures\Persistencia;

$idCliente      = filter_input( INPUT_GET, 'idCliente', FILTER_SANITIZE_NUMBER_INT );
$tipoPessoa     = filter_input( INPUT_GET, 'tipoPessoa', FILTER_SANITIZE_STRING);
//$detalheCliente = arrayMixDeClientes( $idCliente-1 );

$conexao      = new Conexao();
$objPessoa    = new Persistencia( $conexao, 'tbl_pessoa2' );
$res          = $objPessoa->getPorId( $idCliente );

?>
<div class="row">
    <div class="col-sm-4 col-md-4">
        <?php if( $tipoPessoa == '1' ) {  ?>
            <img src="<?php echo $res->foto;?>"
                 alt="<?php echo $res->nome;?>" title="<?php echo $res->nome;?>"class="img-rounded img-responsive" />
        <?php } ?>
    </div>
    <div class="col-sm-4 col-md-6">
        <blockquote>
            <p><?php echo $res->nome;?></p>
            <small><cite title="Email de contato"><?php echo $res->email;?><i class="glyphicon glyphicon-envelope"></i></cite></small>
        </blockquote>
        <p>
            <?php if( $tipoPessoa == '1' ) {  ?>
                <i class="glyphicon glyphicon-th"></i> CPF: <?php echo mascara( $res->cpf, '###.###.###-##' );?><br />
                <i class="glyphicon glyphicon-th"></i> RG : <?php echo $res->rg ;?><br />
                <i class="glyphicon glyphicon-star"></i> Endereço de cobrança:&nbsp;<?php echo $res->tipoCobranca;?><br />
            <?php }elseif( $tipoPessoa == '2' ) { ?>
                <i class="glyphicon glyphicon-th"></i> CNPJ: <?php echo mascara( $res->cnpj, '##.###.###/####-##' );?><br />
            <?php } ?>
            <i class="glyphicon glyphicon-phone-alt"></i> Telfone fixo: <?php echo mascara( $res->telFixo, '(##) ####-####' );?><br />
            <i class="glyphicon glyphicon-phone"></i> Telefone celular: <?php echo mascara( $res->telCelular,'(##) ####-####' );?><br />
            <i class="glyphicon glyphicon-list"></i> UF: <?php echo estados( $res->estado );?><br />
            <i class="glyphicon glyphicon-list-alt"></i> Estado:<?php echo estados( $res->estado );?><br />
            <i class="glyphicon glyphicon-inbox"></i> Endereço:<?php echo $res->endereco;?><br />
            <i class="glyphicon glyphicon-bookmark"></i> Bairro:<?php echo $res->bairro;?><br />
            <i class="glyphicon glyphicon-move"></i> CEP:<?php echo mascara( $res->cep, '##.###-###' );?><br />
            <i class="glyphicon glyphicon-star"></i> Categoria cliente:&nbsp;<?php echo $res->estrelas;?><br />
        </p>
    </div>
</div>