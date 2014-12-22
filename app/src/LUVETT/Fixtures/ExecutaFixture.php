<?php
/**
 * File: ExecutaFixture.php
 * Author: Luis Alberto Concha Curay
 * Email: luvett11@gmail.com
 * Language: PHP
 * Date: 22/12/14
 * Time: 11:53
 * Project: studo_php
 * Copyright: 2014
 */
require_once '../../../../config.php';

try{

    $sqlBD  = "CREATE DATABASE IF NOT EXISTS php_parte4";
    echo ( executaSQL( $sqlBD, null ) ) ? 'Base de dados php_parte4 criada com sucesso!'.chr(13).chr(10) : 'Erro ao tentar criar a base de dados php_parte4'.chr(13).chr(10);

    $sqlSelecionaBD = "use php_parte4";
    echo ( executaSQL( $sqlSelecionaBD, null ) ) ? 'Selecionando base de dados:  php_parte4'.chr(13).chr(10) : 'Erro ao tentar selecionar  a base de dados php_parte4'.chr(13).chr(10);


    $sqlTable = "CREATE TABLE IF NOT EXISTS `tbl_pessoa2` (
              `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
              `nome` varchar(200) NOT NULL,
              `email` varchar(200) NOT NULL,
              `telFixo` varchar(16) NOT NULL,
              `telCelular` varchar(16) NOT NULL,
              `uf` int(1) NOT NULL COMMENT '1=DF, 2=SP etc',
              `estado` int(1) NOT NULL,
              `endereco` varchar(100) NOT NULL,
              `bairro` varchar(100) NOT NULL,
              `cep` varchar(8) NOT NULL COMMENT 'so numeros',
              `foto` varchar(200) DEFAULT NULL,
              `tipoPessoa` int(1) NOT NULL COMMENT '1=pf, 2=pj',
              `cpf` varchar(16) DEFAULT NULL,
              `cnpj` varchar(16) DEFAULT NULL,
              `rg` varchar(16) DEFAULT NULL,
              `estrelas` varchar(20) NOT NULL,
              `tipoCobranca` varchar(250) NOT NULL COMMENT 'Endereco cobrança'
            ) ENGINE=InnoDB  DEFAULT CHARSET=utf8;";
    echo ( executaSQL( $sqlTable, null ) ) ? 'Tabela tbl_pessoa2 criada com sucesso!'.chr(13).chr(10) : 'Erro ao tentar criar a tabela tbl_pessoa2'.chr(13).chr(10);


    $pessoaFisica   = new \app\src\LUVETT\Person\PessoaFisica( '','Luis Alberto Concha Curay','luvett@gmail.com','612222222','6133333333','1','1','Casa 01','bairro 01','4444444','1','1112221199','3123123','../publico/imagens/luis.jpg','10','3' );

    $pessoaJuricica = new \app\src\LUVETT\Person\PessoaJuridica( '','Empresa 01','empresa01@terra.com','612234234','617612121','1','1','Av. Jose de la Mar','bairro 02','4444444','2','1112221199','Empresa Novo Teste','10' );

    $conexao = new \app\src\LUVETT\Db\Conexao();
    $banco   = new \app\src\LUVETT\Fixtures\Fixtures( $conexao );

    $objPessoa  = new \app\src\LUVETT\Fixtures\Persistencia( $conexao ,'tbl_pessoa2' );

    if( $objPessoa->persist( $pessoaFisica ) )
        echo 'Dados da pessoa Física inserida com sucesso!'.chr(13).chr(10);

    if( $objPessoa->persist( $pessoaJuricica ) )
        echo 'Dados da pessoa Jurídica inserida com sucesso!'.chr(13).chr(10);



}
catch (Exception $e) {
    echo 'Erro: ' . $e->getMessage();
}


function executaSql( $sql )
{
    $con = new \app\src\LUVETT\Db\Conexao();
    $con = $con->getInstance();
    $stmt = $con->prepare( $sql );
    $res  = $stmt->execute();
    return ( $res ) ? true : false;
}