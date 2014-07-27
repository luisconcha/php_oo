<?php
/**
 * File: funcoes.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 26/07/14
 * Time: 20:09
 * Project: estudo_php
 * Copyright: 2014
 */

function arrayDeClientes( $idCliente = null )
{
    $arrayCliente   = array();
    $arrayCliente[] = new \classes\Cliente('1','Luis Alberto Concha Curay','11122233344','luvett11@gmail.com','6122222222','6111113333','DF','Brasília','Rua 01','Bairro 01','11111111','../publico/imagens/luis.jpg');
    $arrayCliente[] = new \classes\Cliente('2','Paula Fernandes','22222222222','paula@gmail.com','6133334444','6122223333','RJ','Rio de Janeiro','Rua 02','Bairro 02','11111111','../publico/imagens/foto02.jpg');
    $arrayCliente[] = new \classes\Cliente('3','Bruno del Solar','55555555555','bruno@gmail.com','6144445555','6143233333','GO','São Paulo','Rua 03','Bairro 03','11111111','../publico/imagens/foto03.jpg');
    $arrayCliente[] = new \classes\Cliente('4','Tamara Peres Albujar','77777777777','tamara@gmail.com','6144445555','6134323333','MA','São Paulo','Rua 04','Bairro 09','11111111','../publico/imagens/foto04.jpg');
    $arrayCliente[] = new \classes\Cliente('5','Veronica Cardenar','88888888888','veronica@gmail.com','6154545555','6156563333','AP','São Paulo','Rua 05','Bairro 04','11111111','../publico/imagens/foto05.jpg');
    $arrayCliente[] = new \classes\Cliente('6','Sandra Alburquerque','65645432321','sandra@gmail.com','6156785555','6144443333','RS','São Paulo','Rua 06','Bairro 05','11111111','../publico/imagens/foto06.jpg');
    $arrayCliente[] = new \classes\Cliente('7','Amanda Brisola Nunes','12323234545','amanda@gmail.com','6154545555','6156783333','AL','São Paulo','Rua 07','Bairro 06','11111111','../publico/imagens/foto07.jpg');
    $arrayCliente[] = new \classes\Cliente('8','Victor Vilar Gomes','54567898786','victor@gmail.com','6112125555','6198053333','MG','São Paulo','Rua 08','Bairro 07','11111111','../publico/imagens/foto08.jpg');
    $arrayCliente[] = new \classes\Cliente('9','Kleber Ferreira Pardo','21232456787','kleber@gmail.com','6156985555','6156433333','DF','São Paulo','Rua 09','Bairro 08','11111111','../publico/imagens/foto09.jpg');
    $arrayCliente[] = new \classes\Cliente('10','Bianca Correia Salvatierra','34323456789','bianca@gmail.com','6156325555','6133333333','RN','São Paulo','Rua 10','Bairro 10','11111111','../publico/imagens/foto10.jpg');

    if( !is_null( $idCliente ) ){
        return $arrayCliente[$idCliente];
    }else{
        return $arrayCliente;
    }
}


function mascara($valor, $mascara)
{
    $valorFormatado = '';
    $k              = 0;
    for($i = 0; $i<=strlen($mascara)-1; $i++) :
        if( $mascara[$i] == '#' ) {
            if(isset( $valor[$k]) )
                $valorFormatado .= $valor[$k++];
        } else {
            if( isset( $mascara[$i] ) )
                $valorFormatado .= $mascara[$i];
        }//end if;
    endfor;
    return $valorFormatado;
}