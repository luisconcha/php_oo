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

namespace classes;


class PessoaJuridica extends Pessoa
{
    private $cnpj;
    private $nomeFantasia;

    public function __construct( $id, $nome, $email, $telFixo, $telCelular, $uf, $estado, $endereco, $bairro ,$cep, $tipoPessoa, $cnpj, $nomeFantasia )
    {
        parent::__construct($id, $nome, $email, $telFixo, $telCelular, $uf, $estado, $endereco, $bairro ,$cep, $tipoPessoa);
        $this->setCnpj( $cnpj )
             ->setNomeFantasia( $nomeFantasia );

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