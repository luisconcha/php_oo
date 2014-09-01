<?php
/**
 * File: funcoes2.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language:
 * Date: 02/08/14
 * Time: 23:24
 * Project: estudo_php
 * Copyright: 2014
 */

use app\src\LUVETT\Person\PessoaFisica;
use app\src\LUVETT\Person\PessoaJuridica;

function arrayMixDeClientes( $idCliente = null )
{
    $mixArray[] = new PessoaFisica('1','Luis Alberto Concha Curay','luvett11@gmail.com','11122233344','6122222222','6111113333','DF','Brasília','Rua 01','Bairro 01','pf', '65434587621','V34243','../publico/imagens/luis.jpg', 10,$arrEndClinte = array( '0'=>'1', '1' => 'Av das nações' ));
    $mixArray[] = new PessoaFisica('2','Paula Fernandes','paula@gmail.com','22222222222','6133334444','6122223333','RJ','Rio de Janeiro','Rua 02','Bairro 02','pf', '65434587621','V34243','../publico/imagens/foto02.jpg',3, $arrEndClinte = array( '0'=>'2', '1' => 'Av das nações','2'=>'Quadra 02 Av, marques' ));
    $mixArray[] = new PessoaFisica('3','Bruno del Solar','bruno@gmail.com','55555555555','6144445555','6143233333','GO','São Paulo','Rua 03','Bairro 03','pf', '65434587621','V34243','../publico/imagens/foto03.jpg',4,$arrEndClinte = array( '0'=>'3', '1' => 'Av Pedro Cabral 123','2'=>'Vila Planalto - DF','3'=>'Rua de la Mar e Moreira' ));
    $mixArray[] = new PessoaFisica('4','Tamara Peres Albujar','tamara@gmail.com','77777777777','6144445555','6134323333','MA','São Paulo','Rua 04','Bairro 09','pf', '65434587621','V34243','../publico/imagens/foto04.jpg',8,$arrEndClinte = array( '0'=>'2', '1' => 'L2 Sul Qd 205','2'=>'W3 Norte Of. 123' ));
    $mixArray[] = new PessoaFisica('5','Veronica Cardenar','veronica@gmail.com','88888888888','6154545555','6156563333','AP','São Paulo','Rua 05','Bairro 04','pf', '65434587621','V34243','../publico/imagens/foto05.jpg',4,$arrEndClinte = array( '0'=>'1', '1' => 'Rua Pedro Ruiz galo 123' ));
    $mixArray[] = new PessoaFisica('6','Sandra Alburquerque','sandra@gmail.com','65645432321','6156785555','6144443333','RS','São Paulo','Rua 06','Bairro 05','pf', '65434587621','V34243','../publico/imagens/foto06.jpg',2,$arrEndClinte = array( '0'=>'3', '1' => 'Av Pedro Cabral 870','2'=>'N. Bandeirante','3'=>'Rua 15' ));
    $mixArray[] = new PessoaFisica('7','Amanda Brisola Nunes','amanda@gmail.com','12323234545','6154545555','6156783333','AL','São Paulo','Rua 07','Bairro 06','pf', '65434587621','V34243','../publico/imagens/foto07.jpg',9, $arrEndClinte = array( '0'=>'1', '1' => 'Av das Garças 45' ));
    $mixArray[] = new PessoaFisica('8','Victor Vilar Gomes','victor@gmail.com','54567898786','6112125555','6198053333','MG','São Paulo','Rua 08','Bairro 07','pf', '65434587621','V34243','../publico/imagens/foto08.jpg',7, $arrEndClinte = array( '0'=>'1', '1' => 'Av Roque 3' ));
    $mixArray[] = new PessoaFisica('9','Kleber Ferreira Pardo','kleber@gmail.com','21232456787','6156985555','6156433333','DF','São Paulo','Rua 09','Bairro 08','pf', '65434587621','V34243','../publico/imagens/foto09.jpg',8,$arrEndClinte = array( '0'=>'1', '1' => 'Av das nações 7' ));
    $mixArray[] = new PessoaFisica('10','Bianca Correia Salvatierra','bianca@gmail.com','34323456789','6156325555','6133333333','RN','São Paulo','Rua 10','Bairro 10','pf', '65434587621','V34243','../publico/imagens/foto10.jpg',2,$arrEndClinte = array( '0'=>'1', '1' => 'Qd 207 Asa norte' ));

    $mixArray[] = new PessoaJuridica( '11', 'Empresa 01', 'empresa01@gmail.com','6122222222','6111113333', 'DF', 'Brasília','Rua 11','Bairro 11', '76666767','pj', '12343456765643','Empresa Controladora de Serviços Ltda',1);
    $mixArray[] = new PessoaJuridica( '12', 'Empresa 02', 'master@gmail.com','6122222222','6111113333', 'SP', 'São Paulo','Rua 12','Bairro 12', '56663333','pj', '98723779239823','Empresa Dainer Club Ltda',2);
    $mixArray[] = new PessoaJuridica( '13', 'Empresa 03', 'olivar@gmail.com','6122222222','6111113333', 'SP', 'São Paulo','Rua 12','Bairro 13', '56663333','pj', '98723779239823','Banco do Brasil',10);
    $mixArray[] = new PessoaJuridica( '14', 'Empresa 04', 'teste@gmail.com','6122222222','6111113333', 'SP', 'São Paulo','Rua 14','Bairro 14', '56663333','pj', '98723779239823','Central IT',6);
    $mixArray[] = new PessoaJuridica( '15', 'Empresa 05', 'nucleo@gmail.com','6122222222','6111113333', 'SP', 'São Paulo','Rua 15','Bairro 15', '56663333','pj', '98723779239823','Cast - Informatica',9);
    $mixArray[] = new PessoaJuridica( '16', 'Empresa 06', 'sol@gmail.com','6122222222','6111113333', 'SP', 'São Paulo','Rua 16','Bairro 016', '56663333','pj', '98723779239823','Microsoft do Brasil',10);

    if( !is_null( $idCliente ) ){
        return $mixArray[$idCliente];
    }else{
        return $mixArray;
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

function estados( $idEstado )
{
    switch( $idEstado )
    {
        case 1:
            return 'Brasilia';break;
        case 2:
            return 'São Paulo';break;
        default:
            return 'Não informado';break;
    }


}