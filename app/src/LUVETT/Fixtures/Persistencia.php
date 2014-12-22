<?php
/**
 * File: Persistencia.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 24/08/14
 * Time: 21:18
 * Project: estudo_php
 * Copyright: 2014
 */

namespace app\src\LUVETT\Fixtures;

use app\src\LUVETT\Db\Conexao;
use app\src\LUVETT\Person\PessoaFisica;
use app\src\LUVETT\Person\PessoaJuridica;
use app\src\LUVETT\Person\Pessoa;

class Persistencia
{
    private $pdo = null;
    private $tabela;

    public function __construct( Conexao $con, $tabela )
    {
        $this->pdo    = $con;
        $this->tabela = $tabela;
    }

    public function getAll()
    {
        try{
            $sql  = "SELECT * FROM " . $this->tabela;
            $stmt = $this->pdo->prepare( $sql );
            $stmt->execute();
            $dadosEncontrados = $stmt->fetchAll();
            $this->pdo->close();
            return $dadosEncontrados;
        }
        catch( \PDOException $e ) {
            //echo "Erro no Arquivo: {$e->getFile()} . <br />Linha: {$e->getLine()} . <br />Mensagem: {$e->getMessage()}";
        }
    }

    public function getPorId( $id )
    {
        try{
            $sql  = "SELECT * FROM " . $this->tabela . ' WHERE id = '.$id;
            $stmt = $this->pdo->prepare( $sql );
            $stmt->execute();
            $dadosEncontrado = $stmt->fetch();
            $this->pdo->close();
            return $dadosEncontrado;
        }
        catch( \PDOException $e ) {
            echo "Erro no Arquivo: {$e->getFile()} . <br />Linha: {$e->getLine()} . <br />Mensagem: {$e->getMessage()}";
        }
    }

    public function persist( Pessoa $pessoa )
    {

        $arrDados = array(
            'nome'        => $pessoa->getNome(),
            'email'       => $pessoa->getEmail(),
            'telFixo'     => $pessoa->getTelFixo(),
            'telCelular'  => $pessoa->getTelCelular(),
            'uf'          => $pessoa->getUf(),
            'estado'      => $pessoa->getEstado(),
            'endereco'    => $pessoa->getEndereco(),
            'bairro'      => $pessoa->getBairro(),
            'cep'         => $pessoa->getCep(),
            'foto'        => $pessoa->getFoto(),
            'tipoPessoa'  => $pessoa->getTipoPessoa(),
            'cpf'         => '',
            'cnpj'        => '',
            'rg'          => '',
            'estrelas'    => $pessoa->getEstrelas(),
            'tipoCobranca'=> '',
        );

        if( $pessoa instanceof PessoaFisica ){
            $arrDados['rg']  = $pessoa->getRg();
            $arrDados['cpf'] = $pessoa->getCpf();
            $arrDados['tipoCobranca'] = $pessoa->getTipoCobranca();
        }
        elseif( $pessoa instanceof PessoaJuridica ){
            $arrDados['cnpj'] = $pessoa->getCnpj();

        }

        try{
            $this->flush( $arrDados );
            return true;
        } catch( \PDOException $e ) {
            echo "Erro no Arquivo: {$e->getFile()} . <br />Linha: {$e->getLine()} . <br />Mensagem: {$e->getMessage()}";
        }
    }

    private function flush( $arrDados = array() )
    {
        try{

            $sql  = "INSERT INTO $this->tabela ( nome,email,telFixo,telCelular,uf,estado,endereco,bairro,cep,foto,tipoPessoa,cpf,rg,estrelas,tipoCobranca )
                     VALUES( :nome, :email, :telFixo, :telCelular, :uf, :estado, :endereco, :bairro, :cep, :foto, :tipoPessoa, :cpf, :rg, :estrelas, :tipoCobranca)";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindParam( ':nome', $arrDados['nome'] );
            $stmt->bindParam( ':email', $arrDados['email'] );
            $stmt->bindParam( ':telFixo',$arrDados['telFixo'] );
            $stmt->bindParam( ':telCelular',$arrDados['telCelular'] );
            $stmt->bindParam( ':uf',$arrDados['uf'] );
            $stmt->bindParam( ':estado',$arrDados['estado'] );
            $stmt->bindParam( ':endereco',$arrDados['endereco'] );
            $stmt->bindParam( ':bairro',$arrDados['bairro'] );
            $stmt->bindParam( ':cep',$arrDados['cep'] );
            $stmt->bindParam( ':foto',$arrDados['foto'] );
            $stmt->bindParam( ':tipoPessoa',$arrDados['tipoPessoa'] );
            $stmt->bindParam( ':cpf',$arrDados['cpf'] );
            $stmt->bindParam( ':rg',$arrDados['rg'] );
            $stmt->bindParam( ':estrelas',$arrDados['estrelas'] );
            $stmt->bindParam( ':tipoCobranca',$arrDados['tipoCobranca'] );
            $stmt->execute();
            $this->pdo->close();

        }catch( \PDOException $e ) {
            echo "Erro no Arquivo: {$e->getFile()} . <br />Linha: {$e->getLine()} . <br />Mensagem: {$e->getMessage()}";
        }
    }
} 