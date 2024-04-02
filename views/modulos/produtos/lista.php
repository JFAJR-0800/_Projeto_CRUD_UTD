
<div class="container-fluid px-4">
    <h1 class="mt-4"><?= $titleSection; ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="#">Dashborad </a></li>
        <li class="breadcrumb-item active"><?= $titleSection; ?></li>
    </ol>
        <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            <?= $titleSection; ?>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover table-stripped" id="datatablesSimple">
                <thead class="text-center">
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Código</th>
                    <th>Preço Compra</th>
                    <th>Estoque</th>
                    <th>Ativo?</th>
                    <th>Deletado?</th>
                    <th>Cadastro</th>
                    <th>Ações</th> 
                </thead>
                <tbody>
                    <?php foreach ($lista as $l): ?>
                        <tr>
                            <td><?=$l['id'];?></td>    
                            <td><?=$l['nome'];?></td>    
                            <td><?=$l['codigo'];?></td>    
                            <td><?=$l['preco'];?></td>    
                            <td><?=$l['estoque'];?></td>    
                            <td><?=($l['ativo']) ? "Sim" :"Não";?></td>    
                            <td><?=($l['isDeleted']) =='' ? "Não" : "Sim";?></td>
                            <td><?=$l['cadastradoEm'];?></td>
                            <td>

                                <a href="?pagina=atualizarProduto&id=<?=$l['id']?>" class="btn btn-success btn-secondary">
                                    <span class="iconify" data-icon="ph:pencil-bold"></span>
                                </a>
                                <!-- Botão para excluir temporariamente -->
                                <button class="btn btn-warning btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal-temp-<?= $l['id']; ?>">
                                    <span class="iconify" data-icon="ph:archive-box"></span>
                                </button>

                                <!-- Botão para excluir permanentemente -->
                                <button class="btn btn-danger btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal-perm-<?= $l['id']; ?>">
                                    <span class="iconify" data-icon="ph:trash-fill"></span>
                            </td>

                            <!-- Modal para excluir temporariamente -->
                            <div class="modal fade" id="exampleModal-temp-<?= $l['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabelTemp" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="<?= Config::urlBase(); ?>/controllers/Produtos.php" method="POST">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-2" id="exampleModalLabelTemp">
                                                    Excluir Usuário Temporariamente
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Tem certeza que deseja remover temporariamente o Produto
                                                <strong><?= $l['nome']; ?></strong>?
                                            </div>
                                            <input type="hidden" value="update" name="action">
                                            <input type="hidden" value="*" name="isDeleted">
                                            <input type="hidden" value="<?= $l['id']; ?>" name="id">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                            <button type="submit" class="btn btn-warning">Sim, Remover Temporariamente</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Modal para excluir permanentemente -->
                            <div class="modal fade" id="exampleModal-perm-<?= $l['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabelPerm" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="<?= Config::urlBase(); ?>/controllers/Produtos.php" method="POST">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-2" id="exampleModalLabelPerm">
                                                    Excluir Registro de Produto
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Tem certeza que deseja excluir permanentemente o Produto
                                                <strong><?= $l['nome']; ?></strong>?
                                            </div>
                                            <input type="hidden" value="delete" name="action">
                                            <input type="hidden" value="<?= $l['id']; ?>" name="id">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                            <button type="submit" class="btn btn-danger">Sim, Excluir Permanentemente</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
  
                        </tr>
                    <?php endforeach; ?>
                </tbody>
    <ol class="breadcrumb">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" >Adicionar Produto</button>
       
        <div class="modal fade" id="exampleModal" tabindex="2" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-12" id="exampleModalLabel">Novo Produto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php include_once "views/modulos/produtos/adicionar.php"?>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button> -->
                <!-- <button type="button" class="btn btn-primary">Salvar</button> -->
            </div>
            </div>
        </div>
        </div>
    </ol>
        </div>
    </div>
</div>
