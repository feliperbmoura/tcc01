<form id="form" method="post" action="paginas/login/cadastrar.php">
        <div class="row">
            <div class="col-12">
                <h2>Faça seu login</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
            <label for="txtNome" class="form-label">Digite seu nome</label>
        <input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="seu nome" required>
            </div>
            <div class="col-6">
            <label for="txtEmail" class="form-label">Digite seu Email</label>
        <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="(xx)x.xxxx-xxxx" required>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
            <label for="txtSenha" class="form-label">Digite sua senha</label>
        <input type="password" class="form-control" id="txtSenha" name="txtSenha" placeholder="seu nome" required>
            </div>
            <div class="col-6">
            <label for="txtCsenha" class="form-label">Confirma a senha</label>
        <input type="password" class="form-control" id="txtCsenha" name="txtCsenha" placeholder="(xx)x.xxxx-xxxx" required>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
            <a href="index.php?pag=login" class="btn btn-info">Tenho conta</a>
            </div>
        </div>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    
</script>