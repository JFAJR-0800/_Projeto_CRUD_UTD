<?php

    include_once "../models/Config.php";
    include_once Config::pathBase()."/models/Connect.php";
    include_once Config::pathBase()."/models/Manager.php";

    if($_REQUEST['action']){
        unset($_POST['action']);
        $manager = new Manager;
        
        // var_dump($_REQUEST);
        // die();

        switch($_REQUEST['action']){          
            
            case 'delete':
                $manager->delete_common("usuarios", ['id'=>$_POST['id']], null);
            break;

            case 'insert':
                $manager->insert_common("usuarios", $_POST, null);
            break;

            case 'update':
                $manager->update_common("usuarios", $_POST, ["id"=>$_POST['id']], null);
            break;

        }

        header("location: ".Config::urlBase()."/sistema.php?pagina=listarUsuarios");

    }

    
    // aqui na tentaiva e enviar e-mail de usuarios ainda estudando
//     if(isset($_POST['action'])){

//         if($_POST['action'] == "insert"){
            
            
            
//             # Removendo o elemento do array
//             unset($_POST['action']);

//             if($_FILES['file']['name'] != ""){
//                 $newFile = sha1(date("YmdHis")).".".end(explode(".", $_FILES['file']['name']));
//                 $_POST['image'] = $newFile;

//                 if(!is_dir( $pathBase."views/modulos/usuarios/uploads")){
//                     mkdir( $pathBase."views/modulos/usuarios/uploads");
//                 }
//                 move_uploaded_file($_FILES['file']['tmp_name'], $pathBase."views/modulos/usuarios/uploads/$newFile");
//             }

//             $_POST['senha'] = sha1($_POST['senha']);

//             # Criando ou abrindo um arquivo
//             $handle = fopen("database.users.txt", 'a+');
            
//             # Escrever os dados no arquivo
//             //$string = implode(" - ",$_POST);
//             fwrite($handle, implode(" - ",$_POST).PHP_EOL);

//             # Fechar o arquivo
//             fclose($handle);


//         }elseif($_POST['action'] == "delete"){       
           

//             # Removendo o action
//             unset($_POST['action']);

//             # Lendo o arquivo txt
//             $data = file('database.users.txt');

//             # Remover a linha que eu quero excluir
//             unset($data[$_POST['id']]);

//             # Apagando o arquivo anterior
//             //unlink("database.users.txt");

//             # Recriando o arquivo com a opção "w" para zera-lo   
//             $handle = fopen("database.users.txt","w+");

//             # Escrevendo os dados (já sem o elemento removido)
//             fwrite($handle, implode("", $data));

//             # Fechar o arquivo
//             fclose($handle);
           
//         }elseif($_POST['action'] == "update"){
            
            
//             $id = $_POST['id'];
//             # Removendo o action
//             unset($_POST['action'], $_POST['id']);

//             # Lendo o arquivo txt
//             $data = file('database.users.txt');

//             # Realocar os dados novos no id Atual
//             $data[$id] = implode(' - ',$_POST).PHP_EOL;

//             # Recriando o arquivo com a opção "w" para zera-lo   
//             $handle = fopen("database.users.txt","w+");

//             # Escrevendo os dados (já sem o elemento removido)
//             fwrite($handle, implode("", $data));

//             # Fechar o arquivo
//             fclose($handle);
//         }

//         # Redirecionar à listagem
//         header("location: ".Config::urlBase()."/sistema.php?pagina=listarUsuarios");

//     }else{
//         echo "Acesso negado";
//     }


// ?>