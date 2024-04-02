<?php

    include_once "../models/Config.php";
    include_once Config::pathBase()."/models/Connect.php";
    include_once Config::pathBase()."/models/Manager.php";

    if($_REQUEST['action']){
        unset($_POST['action']);
        $manager = new Manager;

        switch($_REQUEST['action']){          
            
            case 'delete':
                $manager->delete_common("clientes", ['id'=>$_POST['id']], null);
            break;

            case 'insert':
                $manager->insert_common("clientes", $_POST, null);
            break;

            case 'update':
                $manager->update_common("clientes", $_POST, ["id"=>$_POST['id']], null);
            break;

        }

        header("location: ".Config::urlBase()."/sistema.php?pagina=listarClientes");

    }

?>
