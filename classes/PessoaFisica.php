<?php
/**
 * File: PessoaFisica.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 02/08/14
 * Time: 23:02
 * Project: estudo_php
 * Copyright: 2014
 */

namespace classes;


class PessoaFisica extends Pessoa
{
    private $cpf;
    private $rg;
    private $foto;
    private $msg;

    public function __construct( $id, $nome, $email, $telFixo, $telCelular, $uf, $estado, $endereco, $bairro ,$cep, $tipoPessoa, $cpf, $rg, $foto)
    {
        parent::__construct($id, $nome, $email, $telFixo, $telCelular, $uf, $estado, $endereco, $bairro ,$cep, $tipoPessoa);
        $this->setCpf( $cpf )
             ->setRg( $rg )
             ->setFoto( $foto );

    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $rg
     */
    public function setRg($rg)
    {
        $this->rg = $rg;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * @param mixed $foto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }


} 