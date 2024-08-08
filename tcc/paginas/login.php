<?php 
session_start();
    if(isset($_SESSION['usuario'])){
        echo $_SESSION['usuario']['nome'];
        echo "<a href='sair.php'>Sair</a>";
    }else{
        ?>
        <main id="content">
    <form id="formlogin" method="post" action="paginas/login/autenticar.php">
        <div class="row text-center">
            <div class="col-12">
                <h2>Faça seu login</h2>
            </div>
            <div class="col-3">
        <label for="txtLogin" class="form-label">Digite seu email</label>
        <input type="email" class="form-control" id="txtLogin" name="txtLogin" placeholder="name@example.com">
        </div>
        <div class="col-3">
        <label for="txtSenha" class="form-label">Digite sua senha</label>
        <input type="password" class="form-control" id="txtSenha" name="txtSenha" placeholder="123">
        </div>
        </div>
        <button class="btn btn-info" onclick="login()">Acessar</button>
        <a href="index.php?pag=cadastro" class="btn btn-info">Não tenho conta</a>
    </form>
</main>
        <?php
    }
?>