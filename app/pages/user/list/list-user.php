<?php

$page_title = 'Clientes';
$page_css_links = ['user/list/list-user.css'];

include '../../../scripts/user/list/select_user.php';
include_once("../../base/header.php");

?>

<a class="btn btn-success" href="../register/register-user.php">Inserir novo cliente</a>

<table class="table table-hover table-striped" id="provider">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Cartão</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>

        <?php
        foreach($users as $user) {
            echo '<tr><td >' . $user->getNome() . '</td>';
            echo '<td>' . $user->getTelefone() . '</td>';
            echo '<td>' . $user->getCartao() . '</td>';
        ?>
            <td>
                <a href="../register/register-user.php?id=<?php echo $user->getId(); ?>">
                    <span style="color: green;">
                        <i class="fas fa-pencil-alt"></i>
                    </span>
                </a>
            </td>
            <td>
                <a href="../../../scripts/user/delete/delete_user.php?id=<?php echo $user->getId(); ?>">
                    <span style="color: Tomato;">
                        <i class="fas fa-trash-alt"></i>
                    </span>
                </a>
            </td>
            </tr>
        <?php
        }

        ?>
    </tbody>
</table>

<?php
include_once("../../base/footer.php");
