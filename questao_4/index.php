<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Quest 4</title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" type="text/css" href="style.css">

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body id="LoginForm">
        <div class="container">
            <div class="login-form">
                <div class="main-div">
                    <div class="panel">
                      <h2>Login de Administrador</h2>
                     <p>Informar email e senha</p>
                    </div>
                    <form id="Login" action="login.php" method="POST">
                        <div class="form-group">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Endereço de Email" name="email">
                        </div>
                        <div class="form-group">
                             <input type="password" class="form-control" id="inputPassword" placeholder="Senha" name="senha">
                        </div>
                        <div class="forgot">
                            <a href="reset.html">Esqueceu a Senha?</a>
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </form>
                </div>
            </div>
        </div>

        <?php 
	
            if(isset($_GET['msg'])){

                if($_GET['msg'] == "email_nao_encontrado"){
                    $titulo = "Email não cadastrado"; 
                    $subtitulo = "Email está incorreto. Favor tentar novamente.";
                    $tipo = "error"; 
                }elseif($_GET['msg'] == "senha_incorreta"){
                    $titulo = "Senha Incorreta"; 
                    $subtitulo = "Erro de senha. Favor tentar novamente.";
                    $tipo = "error"; 
                }elseif($_GET['msg'] == "login_sucedido"){
                    $titulo = "Login bem sucedido"; 
                    $subtitulo = "Acesso Autorizado.";
                    $tipo = "success";
                }	
        ?>

            <script type="text/javascript">
                $(document).ready(function() {
                    Swal.fire(
                    "<?=$titulo;?>",
                    "<?=$subtitulo;?>",
                    "<?=$tipo;?>"
                    )
                });
            </script>

        <?php } ?>
    </body>
</html>