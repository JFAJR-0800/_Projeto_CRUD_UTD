<?php
// Supondo que você esteja recebendo os dados do formulário
$data['senha'] = $_POST['senha'];
// Criptografa a senha
$senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);
// Agora, você pode usar $senhaCriptografada para armazenar no banco de dados
?>   

<div class="container-fluid px-4">
    <h1 class="mt-4"><?= $titleSection; ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active"><?= $titleSection; ?></li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            <?= $titleSection; ?>
        </div>
        <div class="card-body">
        <form action="<?= Config::urlBase(); ?>/controllers/Usuarios.php" method="POST" class="form-horizontal mt-4" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-3">
                    <label for="nome" class="form-label"><span class="iconify" data-icon="" style="color: #198754;"></span> Nome do Usuário</label>
                    <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome do Usuário" value="<?= $data['nome']; ?>">
                </div>
                    <div class="col-md-6 col-lg-3 mb-3">
                        <label for="email" class="form-label"><span class="iconify" data-icon="" style="color: #198754;"></span> Email</label>
                        <input name="email" type="text" class="form-control" id="email" placeholder="Email" value="<?= $data['email']; ?>">
                    </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <label for="senha" class="form-label"><span class="iconify" data-icon="" style="color: #198754;"></span> Atualizar Senha</label>
                    <input name="senha" type="text" class="form-control" id="senha" placeholder="Atualizar Senha" value="<?= $data['senha']; ?>">
              
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <label for="ativo" class="form-label"><span class="iconify" data-icon="wpf:toggle" style="color: #198754;"></span> Ativar?</label>
                    <select name="ativo" id="ativo" class="form-control">
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tipoAcesso" class="form-label"><span class="iconify" data-icon="wpf:toggle" style="color: #198754;"></span> Tipo de Acesso</label>
                    <select name="tipoAcesso" id="" class="form-control">
                        <option value="admin">Administrador</option>
                        <option value="client">Cliente</option>
                        <option value="func">Funcionário</option>
                    </select>
                </div>
                <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="fa6-solid:image" style="color: #198754;"></span> Foto de Perfil </label>
                            <input id="file_upload" name="file" type="file" class="form-control" id="exampleFormControlInput1" placeholder1="Nome do Produto" accept="image/*" onblur="validate();">
                        </div>
                 </div>
                <input type="hidden" value="update" name="action">
                <input type="hidden" value="<?= $data['id']; ?>" name="id">
                
                <div class="col-12 mt-3">
                    <p class="text-end">
                        <button class="btn btn-outline-success" type="submit">
                            <span class="iconify" data-icon="material-symbols:save-sharp" style="color: #198754;"></span> Salvar Dados
                        </button>
                    </p>
                </div>
            </div>
        </form>

        </div>
    </div>
</div>
<!-- <script>
    function validate() {
        var size = 220715; //220.xx kb
        var file_size = document.getElementById('file_upload').files[0].size;
        if (file_size >= size) {
            alert('Tamanho máximo de 220 kb');
            document.getElementById('file_upload').value='';
            return false;
        }
        
        // var type = 'image/*';
        // var file_type = document.getElementById('file_upload').files[0].type;
        // if (file_type != type) {
        //     alert('Format not supported,Only .jpeg images are accepted');
        //     document.getElementById('file_upload').value='';
        //     return false;
        // }
    }
</script> -->