<?php

    class Config {

        public static $project = "_Projeto_CRUD_UTD"; 

        public static function urlBase(){
            return "http://".$_SERVER['SERVER_NAME']."/".self::$project;
        }

        public static function pathBase(){
            return $_SERVER['DOCUMENT_ROOT']."/".self::$project;
        }


        
    }
