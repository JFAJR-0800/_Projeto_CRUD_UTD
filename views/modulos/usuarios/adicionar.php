<div class="container-fluid px-4">
    <h1 class="mt-4"><?= $titleSection; ?></h1>
    <ol class="breadcrumb mb-4">
        <!-- <li class="breadcrumb-item"><a href="#">Dashboard</a></li> -->
        <li class="breadcrumb-item active"><?= $titleSection; ?></li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            <?= $titleSection; ?>
        </div>
        <div class="card-body">
            <!-- Conteúdo real da página -->
            <form action="<?=Config::urlBase();?>/controllers/Usuarios.php" method="POST" class="form-horizontal mt-4" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="mb-3">
                            <label for="nome" class="form-label"><span class="iconify" data-icon="wpf:" style="color: #198754;"></span> Nome do Usuário</label>
                            <input name="nome" type="text" class="form-control" id="nome" placeholder1="Nome do Usuário">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="mb-3">
                            <label for="email" class="form-label"><span class="iconify" data-icon="wpf:" style="color: #198754;"></span> Email </label>
                            <input name="email" type="email" class="form-control" id="email" placeholder1="Email">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="mb-3">
                            <label for="senha" class="form-label"><span class="iconify" data-icon="wpf:pass" style="color: #198754;"></span> Senha </label>
                            <input name="senha" type="password-hash" class="form-control" id="senha" placeholder1="Senha">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="mb-3">
                            <label for="ativo" class="form-label"><span class="iconify" data-icon="wpf:toggle" style="color: #198754;"></span> Ativar?</label>
                            <select name="ativo" id="" class="form-control">
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>
                        </div>
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
                        <input type="hidden" value="insert" name="action"> 
                        <input type="hidden" value="" name="isDeleted">
                    <div class="col-12 mt-3">
                        <p class="text-end">
                        <button class="btn btn-outline-success" type="submit">
                                <i class="fas fa-save me-1" style="color: #198754;"></i>Salvar Dados
                            </button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
			$(document).ready(function(){
				$('.cpf').mask('000.000.000-00', {reverse: true});
				$('.cep').mask('00000-000');
				$('.telefone').mask('(00) 0000-0000');
				$('.whatsapp').mask('(00) 00000-0000');
			});
</script>

<script>
    function validate() {
        var size = 220715; //200.xx kb
        var file_size = document.getElementById('file_upload').files[0].size;
        if (file_size >= size) {
            alert('Tamanho máximo de 200 kb');
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
</script>