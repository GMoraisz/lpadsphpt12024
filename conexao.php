<?php

    class Conexao {

        private static $DbNome = 'laboratorio';
        private static $dbHost = 'localhost';
        private static $dbUsuario = 'root';
        private static $dbSenha = '';

        private static $cont = null;

         public function __construct(){
            die("A função init não é permitida")
         }
         public static function conectar () {
            if (self::$cont == null) {
                try {
                    self::$cont = new \PDO ("mysql:host=" .self:$DbHost .";)
                }
            }
         }
    }



?>