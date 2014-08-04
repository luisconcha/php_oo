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
require_once('../config.php');

$idCliente      = filter_input( INPUT_GET, 'idCliente', FILTER_SANITIZE_NUMBER_INT );
$tipoPessoa     = filter_input( INPUT_GET, 'tipoPessoa', FILTER_SANITIZE_STRING);
$detalheCliente = arrayMixDeClientes( $idCliente-1 );

?>
<div class="row">
    <div class="col-sm-4 col-md-4">
        <?php if( $tipoPessoa == 'pf' ) {  ?>
            <img src="<?php echo $detalheCliente->getFoto();?>"
                 alt="<?php echo $detalheCliente->getNome();?>" title="<?php echo $detalheCliente->getNome();?>"class="img-rounded img-responsive" />
        <?php } ?>
    </div>
    <div class="col-sm-4 col-md-6">
        <blockquote>
            <p><?php echo $detalheCliente->getNome();?></p>
            <small><cite title="Email de contato"><?php echo $detalheCliente->getEmail();?><i class="glyphicon glyphicon-envelope"></i></cite></small>
        </blockquote>
        <p>
            <?php if( $tipoPessoa == 'pf' ) {  ?>
                <i class="glyphicon glyphicon-th"></i> CPF: <?php echo mascara( $detalheCliente->getCpf(), '###.###.###-##' );?><br />
                <i class="glyphicon glyphicon-th"></i> RG : <?php echo $detalheCliente->getRg() ;?><br />
            <?php }elseif( $tipoPessoa == 'pj' ) { ?>
                <i class="glyphicon glyphicon-th"></i> CPF: <?php echo mascara( $detalheCliente->getCnpj(), '##.###.###/####-##' );?><br />
                <i class="glyphicon glyphicon-th"></i> Nome  fantasia: <?php echo  $detalheCliente->getNomeFantasia() ;?><br />
            <?php } ?>
            <i class="glyphicon glyphicon-phone-alt"></i> Telfone fixo: <?php echo mascara( $detalheCliente->getTelFixo(), '(##) ####-####' );?><br />
            <i class="glyphicon glyphicon-phone"></i> Telefone celular: <?php echo mascara( $detalheCliente->getTelCelular(),'(##) ####-####' );?><br />
            <i class="glyphicon glyphicon-list"></i> UF: <?php echo $detalheCliente->getUf();?><br />
            <i class="glyphicon glyphicon-list-alt"></i> Estado:<?php echo $detalheCliente->getEstado();?><br />
            <i class="glyphicon glyphicon-inbox"></i> Endereço:<?php echo $detalheCliente->getEndereco();?><br />
            <i class="glyphicon glyphicon-bookmark"></i> Bairro:<?php echo $detalheCliente->getBairro();?><br />
            <i class="glyphicon glyphicon-move"></i> CEP:<?php echo mascara( $detalheCliente->getCep(), '##.###-###' );?><br />
        </p>
    </div>
</div>