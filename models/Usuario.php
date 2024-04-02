<?php

    class Usuario extends Manager {

        public static function listagem(){
            return (new Manager)->select_common("usuarios",null,null,null);
        }

        public static function buscaPorId($id){
            return (new Manager)->select_common("usuarios",null,["id"=>$id],null);
        }

        public static function insereUsuario($usuario){
            return (new Manager)->insert_common("usuarios",$usuario, null);
        }

        public static function atualizarUsuario($dados, $id){
            return (new Manager)->update_common("usuarios",$dados, ["id"=>$id], null);
        }

        public static function excluirUsuario($id){
            return (new Manager)->delete_common("usuarios",["id"=>$id], null);
        }


    }

