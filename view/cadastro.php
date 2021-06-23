<center>
    <form name="form" action="?pg=enviar" method="post" class="form-horizontal">
        <h3>Formulário</h3>
        <table class="table">
            <tr>
                <td>
                    <input type="hidden" name="1">
                    <label>Nome</label>
                    <label><input type="text" class="form-control"  name="nome" size="30" required name="nome"></label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>E-mail</label>
                    <label><input type="email" class="form-control"  name="email" required name="email" size="30"></label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Mensagem</label>
                    <label><textarea name="mensagem" class="form-control" rows="2" cols=30"required name="mensagem"></textarea></label>
                </td>
            </tr>
            <tr>
                <td>
                    <label><input type="submit" value="Enviar" class="btn btn-primary"></label>
                </td>
            </tr>
        </table>
    </form>  
</center>

