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
            <form action="<?=Config::urlBase();?>/controllers/Clientes.php" method="POST" class="form-horizontal mt-4" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="bi:person" style="color: #198754;"></span> Nome do Cliente</label>
                            <input name="nome" type="text" class="form-control" id="exampleFormControlInput1" placeholder1="Nome do Produto" value="<?=$data['nome'];?>">
                        </div>
                    </div>   
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="ic:baseline-email" style="color: #198754;"></span> Email</label>
                            <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder1="email" value="<?=$data['email'];?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="ic:baseline-account-box" style="color: #198754;"></span> CPF</label>
                            <input name="cpf" type="text" class="form-control" id="exampleFormControlInput1" placeholder1="cpf ou cnpj" value="<?=$data['cpf'];?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="bx:bxs-building-house" style="color: #198754;"></span> Bairro</label>
                            <input name="bairro" type="text" class="form-control" id="exampleFormControlInput1" placeholder1="N" value="<?=$data['bairro'];?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="fa-solid:phone" style="color: #198754;"></span> Telefone</label>
                            <input name="telefone" type="text" class="form-control" id="exampleFormControlInput1" placeholder1="" value="<?=$data['telefone'];?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="fa-brands:whatsapp" style="color: #198754;"></span> Whatsapp</label>
                            <input name="whatsapp" type="text" class="form-control" id="exampleFormControlInput1" placeholder1="" value="<?=$data['whatsapp'];?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="ic:baseline-check-box" style="color: #198754;"></span> Ativar?</label>
                            <select name="ativo" id="" class="form-control">
                                <option <?=($data['ativo']) ? "selected" : "" ;?> value="1">Sim</option>
                                <option <?=(!$data['ativo']) ? "selected" : "" ;?> value="0">Não</option>
                            </select>
                        </div>
                    </div>

                    <input type="hidden" value="update" name="action">
                    <input type="hidden" value="<?=$data['id'];?>" name="id">
                    
                    <div class="col-12 mt-3">
                        <p class="text-end">
                            <button class="btn btn-outline-success" type="submit">
                                <span class="iconify" data-icon="material-symbols:save-sharp" style="color: #198754;"></span>
                                Salvar Dados
                            </button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Voltar</a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function validate() {
        var size = 20715; //20.xx kb
        var file_size = document.getElementById('file_upload').files[0].size;
        if (file_size >= size) {
            alert('Tamanho máximo de 20 kb');
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