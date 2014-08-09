<?php
/**
 * File: PessoaJuridica.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 02/08/14
 * Time: 23:04
 * Project: estudo_php
 * Copyright: 2014
 */

namespace app\src\LUVETT\Person;


class PessoaJuridica extends Pessoa
{
    private $cnpj;
    private $nomeFantasia;
    private $estrelas;

    public function __construct( $id, $nome, $email, $telFixo, $telCelular, $uf, $estado, $endereco, $bairro ,$cep, $tipoPessoa, $cnpj, $nomeFantasia, $numEstrelas )
    {
        parent::__construct($id, $nome, $email, $telFixo, $telCelular, $uf, $estado, $endereco, $bairro ,$cep, $tipoPessoa);
        $this->setCnpj( $cnpj )
             ->setNomeFantasia( $nomeFantasia );
        $this->estrelas = parent::classifica( $numEstrelas );
    }

    /**
     * @return string
     */
    public function getTipoCobranca(){}


    /**
     * @return string
     */
    public function getEstrelas()
    {
        return $this->estrelas;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $nomeFantasia
     */
    public function setNomeFantasia($nomeFantasia)
    {
        $this->nomeFantasia = $nomeFantasia;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }



} 