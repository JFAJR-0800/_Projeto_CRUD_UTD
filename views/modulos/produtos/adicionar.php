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
            <form action="<?=Config::urlBase();?>/controllers/Produtos.php" method="POST" class="form-horizontal mt-4" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><i class="fas fa-shopping-cart"></i> Nome do Produto </label>
                            <input name="nome" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome do Produto">
                        </div>
                    </div>
                    

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><i class="fas fa-barcode"></i> Codigo do Produto </label>
                            <input name="codigo" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Codigo do Produto">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><i class="fas fa-dollar-sign"></i> Preço do Produto </label>
                            <input name="preco" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Preço do Produto">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><i class="fas fa-boxes"></i> Estoque do Produto </label>
                            <input name="estoque" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Estoque do Produto">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><i class="fas fa-toggle-on"></i> Ativar? </label>
                            <select name="ativo" id="" class="form-control">
                                <option value="1"> Sim </option>
                                <option value="0"> Não </option>
                            </select>
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

<!-- <script>
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
</script> -->