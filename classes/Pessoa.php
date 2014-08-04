<?php
/**
 * File: Pessoa.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 02/08/14
 * Time: 23:00
 * Project: estudo_php
 * Copyright: 2014
 */

namespace classes;


class Pessoa
{
    private $id;
    private $nome;
    private $email;
    private $telFixo;
    private $telCelular;
    private $uf;
    private $estado;
    private $endereco;
    private $bairro;
    private $cep;
    private $foto;
    private $tipoPessoa;

    public function __construct( $id, $nome, $email, $telFixo, $telCelular, $uf, $estado, $endereco, $bairro ,$cep, $tipoPessoa )
    {
        $this->setId( $id )
            ->setNome( $nome )
            ->setEmail( $email )
            ->setTelFixo( $telFixo )
            ->setTelCelular( $telCelular )
            ->setUf( $uf )
            ->setEstado( $estado )
            ->setEndereco( $endereco )
            ->setBairro( $bairro )
            ->setCep( $cep )
            ->setTipoPessoa( $tipoPessoa );
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
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

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $telCelular
     */
    public function setTelCelular($telCelular)
    {
        $this->telCelular = $telCelular;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelCelular()
    {
        return $this->telCelular;
    }

    /**
     * @param mixed $telFixo
     */
    public function setTelFixo($telFixo)
    {
        $this->telFixo = $telFixo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelFixo()
    {
        return $this->telFixo;
    }

    /**
     * @param mixed $uf
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param mixed $tipoPessoa
     */
    public function setTipoPessoa($tipoPessoa)
    {
        $this->tipoPessoa = $tipoPessoa;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoPessoa()
    {
        return $this->tipoPessoa;
    }
} 