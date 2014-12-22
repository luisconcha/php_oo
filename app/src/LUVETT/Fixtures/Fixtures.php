<?php
/**
 * File: Fixtures.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 01/09/14
 * Time: 16:01
 * Project: estudo_php
 * Copyright: 2014
 */

namespace app\src\LUVETT\Fixtures;

use app\src\LUVETT\Db\Conexao;

class Fixtures
{
    private $pdo = null;
    private $tabela;
    private $banco = 'php_parte4';

    public function __construct( Conexao $con )
    {
        $this->pdo    = $con;
    }

    function varificaExistenciaBD()
    {
        try{
            $sql  = "CREATE DATABASE IF NOT EXISTS $this->banco";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->execute();
            $stmt = $this->pdo->prepare( "use $this->banco" );
            if( $stmt->execute() ){
                return true;
            }else{
                return false;
            }
        }
        catch( \PDOException $e ) {
            echo "Erro no Arquivo: {$e->getFile()} . <br />Linha: {$e->getLine()} . <br />Mensagem: {$e->getMessage()}";
        }
    }

    function criarTabela()
    {
        try{
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

            $stmt = $this->pdo->prepare( $sqlTable );
            if( $stmt->execute() ){
                return true;
            }else{
                return false;
            }
        }
        catch( \PDOException $e ) {
            echo "Erro no Arquivo: {$e->getFile()} . <br />Linha: {$e->getLine()} . <br />Mensagem: {$e->getMessage()}";
        }

    }

    public function verificaCadastroExistente( $nome )
    {
        try{
            $nomeTabela = $this->pegaNomeTabela();

            $sql  = "SELECT * FROM $nomeTabela WHERE $nomeTabela.nome = '$nome'";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->execute();
            if( $stmt->rowCount() > 0 ){
              return true;
            }else{
                return false;
            }//end if

        }catch (\PDOException $e) {
            echo 'Erro ao executar a consulta. Descrição do erro: ' . $e->getMessage();
        }
    }

    protected function pegaNomeTabela()
    {

        $sql  = "SELECT TABLE_NAME FROM information_schema.tables WHERE table_schema = '$this->banco'";
        $stmt = $this->pdo->prepare( $sql );
        $stmt->execute();
        while( $row = $stmt->fetch( \PDO::FETCH_NUM ) ) {
          return $row[0];
        }
    }
} 