<?php
$i = 1;
switch ($i) {
    case 1:
        //echo ('Dados recebidos Corretamentes');
        $dados1 = "Dados recebidos Corretamentes!";
        break;
}
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$data = date('d/m/Y');
?>
<table class="table table-striped">
    <caption><?php echo "$dados1"; ?></caption>
    <tr id="tr">
        <td>Nome</td>
        <td>E-mail</td>
        <td>Mensagem</td>
        <td>Data do cadastro</td>
    </tr>
    <tr>
        <td><?php echo "$nome"; ?></td>
        <td><?php echo "$email"; ?></td>
        <td><?php echo "$mensagem"; ?></td>
        <td><?php echo "$data"; ?></td>
    </tr>
</table>
<a href="?pg=cadastro"><input type="button" value="Voltar" class="btn btn-warning"></a>


