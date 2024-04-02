<?php

    session_start();

    if(isset($_SESSION[sha1("user_data")])){
        $dadosUsuario = $_SESSION[sha1("user_data")];
        var_dump($dadosUsuario);
        header("location: sistema.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistema de Estoque</title>
        <link href="views/template/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script><head>
   <!-- Inclua o Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Estilo customizado -->
    <style>
        body {
            background-image: url('database/Estoque~mv2.gif');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>

    </head>
    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-float">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="controllers/login.php" method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email"/>
                                                <label for="inputEmail">Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="senha"/>
                                                <label for="inputPassword">Senha</label>
                                            </div>
                                            
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    </div>                                 
                                    <div class="row justify-content-float">
                                        <div class="col-lg">
                                            <div class="card shadow-lg border-0 rounded-lg mt-1">
                                                <!-- <div class="card-header"><h2 class="text-center font-weight-light my-4">Novos Usuarios</h2></div> -->
                                                <div class="card-body">
                                                <form  
                                                <div class="card-footer text-center py-3">
                                                    <div class="small"><a href="register.php"> <h2> Solicite acesso!<h2> 
                                                </div>
                                                </form>
                                                <!-- <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
         
