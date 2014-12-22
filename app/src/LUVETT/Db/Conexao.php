<?php
/**
 * File: Conexao.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 24/08/14
 * Time: 20:46
 * Project: estudo_php
 * Copyright: 2014
 */

namespace app\src\LUVETT\Db;


class Conexao
{
    private static $intance = null;
    private static $dbType  = "mysql";
    private static $host    = "localhost";
    private static $user    = "root";
    private static $senha   = "";
    private static $db      = "";

    public static function getInstance()
    {
        if( !isset( self::$intance ) ) {
            try{
                self::$intance = new \PDO( self::$dbType . ':host=' . self::$host . ';dbname=' . self::$db
                                         , self::$user
                                         , self::$senha
                                         , array( \PDO::ATTR_PERSISTENT => true ) );
                self::$intance->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION );
                self::$intance->setAttribute( \PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ );

            }catch (\PDOException $e) {
                echo  'Erro ao tentar conectar com o banco de dados: ' . $e->getMessage();
            }
        }//end if

        return self::$intance;
    }

    public static function prepare( $sql )
    {
        return self::getInstance()->prepare( $sql );
    }

    public static function close()
    {
        if( self::$intance != null )
            self::$intance = null;
    }
} 