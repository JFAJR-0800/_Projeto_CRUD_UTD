<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Processar o formulário de solicitação
        $to = "admin@admin.com"; // E-mail do administrador
        $subject = "Solicitação de Acesso";
        $message = "Um novo usuário solicitou acesso ao sistema.\n\n";
        $message .= "E-mail: " . $_POST['email'] . "\n";
        $message .= "Mensagem: " . $_POST['message'] . "\n";
        $headers = "From: " . $_POST['email'];

        // Enviar e-mail
        if (mail($to, $subject, $message, $headers)) {
            echo "<p class='text-success'>Sua solicitação foi enviada com sucesso. Aguarde o contato do administrador.</p>";
        } else {
            echo "<p class='text-danger'>Desculpe, houve um problema ao enviar sua solicitação.</p>";
        }
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
        <title>Registro de Usuario</title>
        <link href="../../css/styles.css" rel="stylesheet" /><link href="views/template/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-suscces">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Solicitação de Acesso</div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row mb">
                                                <div class="col-md">
                                                    <div class="form-floating mb-3 mb-md-3">
                                                        <input class="form-control" id="inputFirstName" type="text" name='nome' placeholder="Enter your first name" />
                                                        <label for="inputFirstName">Nome Completo</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating b-3 mb-md-3">
                                                <input class="form-control" id="inputEmail" type="email" name='email'placeholder="name@example.com" />
                                                <label for="inputEmail">Email</label>
                                            </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0"></div>
                                                         <select class="form-select" aria-label="Default select example"id="tipoAcesso" type="text" name="tipo" placeholder="Tipo de Usuário " />
                                                            <option selected>Tipo de usuário</option>
                                                            <option value="1" nome="cliet"> Cliente </option>
                                                            <option value="2" nome="func" > Funcioário </option>
                                                            <option value="3" nome="admin"> Administrador </option>
                                                          </select>
                                                           <div class="form-center mb-3 md-0"></div>
                                                        <button class="btn btn-primary mb-3 mb-md-12" type="submit">Enviar</button> 
                                                        <!-- <div> Preciso aprender como mandar e-mail soliictando</div> -->
                                                        </div>
                                    <div class="card-footer mb-3 mb-md-12 text-center py-3">
                                        <div class="small"><a href="sistema.php">Acessar minha conta? Ir para login</a></div>
                                    </div>
                                                    </div>
                                                </div>
                                      
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
