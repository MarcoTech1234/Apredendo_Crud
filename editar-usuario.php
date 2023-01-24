<h1>Editar Usuario</h1>
<?php
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);

    $linha = $res->fetch_object();
?>
    <form method="POST" action="?page=salvar">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php echo $linha->id ?>">
        <div class="mb-3">
            <label for="nome">Nome</label>
            <input type="text" value="<?php echo $linha->nome ?>"name="nome" id="nome" class="form-control ">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" value="<?php echo $linha->email ?>" name="email" id="email" class="form-control ">
        </div>
        <div class="mb-3">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control " required>
        </div>
        <div class="mb-3">
            <label for="data">Data de Nascimento</label>
            <input type="date" value="<?php echo $linha->data_nasc ?>" name="data_nasc" id="data_nasc" class="form-control ">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>