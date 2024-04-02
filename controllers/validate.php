<?php



    function validarPagina(){

        include_once Config::pathBase()."/models/Connect.php";
        include_once Config::pathBase()."/models/Manager.php";
        // include_once Config::pathBase()."/models/LibHtml.php";

        if(!isset($_GET['pagina'])){
            return false;
        }

        switch($_GET['pagina']){

            case "listarProdutos":
                $titleSection = "Lista de Produtos";
                $lista = (new Manager)->select_common("produtos", null, null, null);
                // include_once Config::pathBase()."/views/modulos/produtos/lista.php";
                $links[] = '<a class="btn btn-danger btn-md"><span class="iconify" data-icon="mdi:trash"></span></a> ';
                $links[] = '<a class="btn btn-warning btn-md"><span class="iconify" data-icon="mdi:edit"></span></a> ';
                include_once Config::pathBase()."/views/modulos/produtos/lista.php";
                // LibHtml::criarTabela($lista, ["class"=>'table table-hover table-responsive']);              
            break;

            case 'adicionarProduto':
                $titleSection = "Adicionar Produto";
                include_once Config::pathBase()."/views/modulos/produtos/adicionar.php";
            break;

            case 'atualizarProduto':
                $data = (new Manager)->select_common("produtos", null, ['id'=>$_GET['id']], null)[0];                
                $titleSection = "Atualizar Produto";
                include_once Config::pathBase()."/views/modulos/produtos/atualizar.php";
            break;

            case 'excluirProduto':
                $data = (new Manager)->select_common("produtos", null, ['id'=>$_GET['id']], null)[0];                
                $titleSection = "Excluir Produto";
                include_once Config::pathBase()."/views/modulos/produtos/listar.php";
            break;



            case "listarClientes":
                $titleSection = "Lista de Clientes";
                $lista = (new Manager)->select_common("clientes", null, null, null);
                $links[] = '<a class="btn btn-danger btn-md"><span class="iconify" data-icon="mdi:trash"></span></a> ';
                $links[] = '<a class="btn btn-warning btn-md"><span class="iconify" data-icon="mdi:edit"></span></a> ';
                include_once Config::pathBase()."/views/modulos/clientes/lista.php";
                //LibHtml::criarTabela($lista, ["class"=>'table table-hover table-responsive']);              
            break;
            case 'adicionarCliente':
                $titleSection = "Adicionar Cliente";
                include_once Config::pathBase()."/views/modulos/clientes/adicionar.php";
            break;

            case 'atualizarCliente':
                $data = (new Manager)->select_common("clientes", null, ['id'=>$_GET['id']], null)[0];                
                $titleSection = "Atualizar Cliente";
                include_once Config::pathBase()."/views/modulos/clientes/atualizar.php";
            break;

            case 'excluirCliente':
                $data = (new Manager)->select_common("cliemtes", null, ['id'=>$_GET['id']], null)[0];                
                $titleSection = "Excluir Cliente";
                include_once Config::pathBase()."/views/modulos/clientes/listar.php";
            break;

            // Aqui para Usuarios
            case "listarUsuarios":
                $titleSection = "Lista de Usuario";
                $lista = (new Manager)->select_common("usuarios", null, null, null);
                
                $links[] = '<a class="btn btn-danger btn-md"><span class="iconify" data-icon="mdi:trash"></span></a> ';
                $links[] = '<a class="btn btn-warning btn-md"><span class="iconify" data-icon="mdi:edit"></span></a> ';
                include_once Config::pathBase()."/views/modulos/usuarios/lista.php";
                //LibHtml::criarTabela($lista, ["class"=>'table table-hover table-responsive']);              
            break;
            
            case 'adicionarUsuario':
                $titleSection = "Adicionar Usuario";
                include_once Config::pathBase()."/views/modulos/usuarios/adicionar.php";
            break;

            case 'atualizarUsuario':
                $data = (new Manager)->select_common("usuarios", null, ['id'=>$_GET['id']], null)[0];                
                $titleSection = "Atualizar Usuario";
                include_once Config::pathBase()."/views/modulos/usuarios/atualizar.php";
            break;

            case 'excluirUsuario':
                $data = (new Manager)->select_common("usuarios", null, ['id'=>$_GET['id']], null)[0];                
                $titleSection = "Excluir Usuario";
                include_once Config::pathBase()."/views/modulos/usuarios/listar.php";
            break;
            
        }


    }


?>