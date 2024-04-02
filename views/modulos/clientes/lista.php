<?php require_once 'vendor/autoload.php'; ?>

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
                    <th>Nome do Cliente</th>
                    <th>Email</th>
                    <th>CPF</th>
                    <th>Bairro</th>
                    <th>Telefone</th>
                    <th>Whatsapp</th>
                    <th>Ativo?</th>
                    <th>Deletado?</th>
                    <th>CadastroEm</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                 <?php foreach ($lista as $l): ?>
                        <tr>
                            <td><?=$l['id']; ?></td>
                            <td><?=$l['nome']; ?> </td>
                            <td><?=$l['email']; ?></td>
                            <td><?=$l['cpf']; ?></td>
                            <td><?=$l['bairro']; ?></td>
                            <td><?=$l['telefone']; ?></td>
                            <td><?=$l['whatsapp']; ?></td>
                            <td><?=($l['ativo']) ? "Sim" :"Não";?></td>    
                            <td><?=($l['isDeleted']=='') ? "Não" : "Sim";?></td>    
                            <td><?=$l['cadastradoEm'];?></td>
                            <td>
                                 
                                <a href="?pagina=atualizarCliente&id=<?=$l['id']?>"  class="btn btn-success btn-secondary">
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
                                    <form action="<?= Config::urlBase(); ?>/controllers/Clientes.php" method="POST">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-2" id="exampleModalLabelTemp">
                                                    Excluir Usuário Temporariamente
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Tem certeza que deseja remover temporariamente o Cliente
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
                                    <form action="<?= Config::urlBase(); ?>/controllers/Clientes.php" method="POST">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-2" id="exampleModalLabelPerm">
                                                    Excluir Registro de Cliente
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Tem certeza que deseja excluir permanentemente o Cliente
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

                <tbody class="breadcrumb mb-12">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Adicionar Cliente</button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg"> <!-- Aqui estamos usando a classe modal-lg para aumentar o tamanho da modal -->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-12" id="exampleModalLabel">Adicionar Cliente</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <ol>
                                    <?php include_once "views/modulos/clientes/adicionar.php"?>
                                </ol>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button> -->
                                    <!-- <button type="button" class="btn btn-primary">Salvar</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </tbody>

<!--     
                <tbody class="breadcrumb mb-12">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" >Adicionar Cliente</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-12" id="exampleModalLabel">Adicionar Cliente</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <Ol>
                    
                            <?php include_once "views/modulos/clientes/adicionar.php"?>
                        </Ol>
                        </div>
                     </div>
                    </div>
                </tbody> -->
        </div>
    </div>
</div>