<h1>Novo Usuario</h1>
    <form method="POST" action="?page=salvar">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control ">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control ">
        </div>
        <div class="mb-3">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control ">
        </div>
        <div class="mb-3">
            <label for="data">Data de Nascimento</label>
            <input type="date" name="data_nasc" id="data_nasc" class="form-control ">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>