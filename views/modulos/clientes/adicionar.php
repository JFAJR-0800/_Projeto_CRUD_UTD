<div class="container-fluid px-4">
    <h1 class="mt-4"><?= $titleSection; ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><?= $titleSection; ?></li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i><?= $titleSection; ?>
        </div>
        <div class="card-body">
            <form action="<?= Config::urlBase(); ?>/controllers/Clientes.php" method="POST" class="form-horizontal mt-4" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nome" class="form-label"><i class="fas fa-user me-1" style="color: #198754;"></i>Nome do Cliente</label>
                            <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome do Cliente">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label"><i class="fas fa-envelope me-1" style="color: #198754;"></i>Email</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="cpf" class="form-label"><i class="fas fa-id-card me-1" style="color: #198754;"></i>CPF</label>
                            <input name="cpf" type="text" class="form-control" id="cpf" placeholder="CPF">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="bairro" class="form-label"><i class="fas fa-map-marker-alt me-1" style="color: #198754;"></i>Bairro</label>
                            <input name="bairro" type="text" class="form-control" id="bairro" placeholder="Bairro">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="telefone" class="form-label"><i class="fas fa-phone-alt me-1" style="color: #198754;"></i>Telefone</label>
                            <input name="telefone" type="text" class="form-control" id="telefone" placeholder="Telefone">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="whatsapp" class="form-label"><i class="fab fa-whatsapp me-1" style="color: #198754;"></i>Whatsapp</label>
                            <input name="whatsapp" type="text" class="form-control" id="whatsapp" placeholder="Whatsapp">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="ativo" class="form-label"><i class="fas fa-toggle-on me-1" style="color: #198754;"></i>Ativar?</label>
                            <select name="ativo" id="ativo" class="form-control">
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
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


        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js"></script>
        
<script type="text/javascript">
			$(document).ready(function(){
				$('cpf').mask('000.000.000-00', {reverse: true});
				$('cep').mask('00000-000');
				$('telefone').mask('(00) 0000-0000');
				$('whatsapp').mask('(00) 00000-0000');
			});
</script>
<script type="text/javascript">
    function validarEmail(email) {
        // Expressão regular para validar o formato do e-mail
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }

    $(document).ready(function() {
        // Validar o e-mail quando o formulário for enviado
        $("form").submit(function() {
            var email = $("#email").val();
            if (!validarEmail(email)) {
                alert("Por favor, insira um e-mail válido.");
                return false; // Impede o envio do formulário se o e-mail for inválido
            }
        });
    });
</script>
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