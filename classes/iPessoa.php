<?php
/**
 * File: iPessoaFisica.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 06/08/14
 * Time: 16:06
 * Project: estudo_php
 * Copyright: 2014
 */

namespace classes;


interface iPessoa
{
    public function classifica( $num );

    public function enderecoCobranca( $tipo );
} 