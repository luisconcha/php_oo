<?php
/**
 * File: index.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: PHP
 * Date: 26/06/14
 * Time: 16:18
 * Project: estudo_php
 * Copyright: 2014
 */

require_once( 'config.php' );

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site simple em php">
    <meta name="author" content="Luis Alberto Concha Curay">
    <link rel="icon" href="publico/imagens/favicon.ico">

    <title>Lista de Clientes</title>

    <link href="publico/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="publico/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="publico/css/stylos.css" rel="stylesheet">
</head>

<body>

<?php require_once( 'inc/nav_bar.php' ); ?>

<div class="container theme-showcase" id="containerPrincipal">
    <?php require_once('inc/cliente.php'); ?>
</div> <!-- /container -->

<?php require_once( 'inc/footer.php' ); ?>

<script src="publico/js/jquery.min.js"></script>
<script src="publico/js/maskedInput.jquery.js"></script>
<script src="publico/bootstrap/js/bootstrap.min.js"></script>
<script src="publico/bootstrap/js/bootstrap-dialog.min.js"></script>
<script src="publico/js/clientes.js"></script>
<script src="publico/js/jquery.tablesorter.min.js"></script>
</body>
</html>
