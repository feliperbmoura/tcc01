<main id="content">
    <form id="formlogin">
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
    </form>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    function login(){
        var login = $('#txtLogin').val();
        var senha = $('#txtSenha').val();

       $.ajax(
            method: "POST",
            url: 'login/autenticar.php',
            data: {login,senha},
            dataType: "html",
            success: function(msg){
                alert(msg);
            }
       )
    }
</script>