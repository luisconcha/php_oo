<?php
/**
 * File: Cliente.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 26/07/14
 * Time: 21:58
 * Project: estudo_php
 * Copyright: 2014
 */

namespace classes;


class Cliente
{
    private $id;
    private $nome;
    private $cpf;
    private $email;
    private $telFixo;
    private $telCelular;
    private $uf;
    private $estado;
    private $endereco;
    private $bairro;
    private $cep;
    private $foto;


    public function __construct( $id, $nome, $cpf, $email, $telFixo, $telCelular, $uf, $estado, $endereco, $bairro ,$cep,$foto )
    {
        $this->setId($id);
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setEmail($email);
        $this->setTelFixo($telFixo);
        $this->setTelCelular($telCelular);
        $this->setUf($uf);
        $this->setEstado($estado);
        $this->setEndereco($endereco);
        $this->setBairro($bairro);
        $this->setCep($cep);
        $this->setFoto($foto);
    }


    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
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
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
    }

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
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
    }

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }




} 