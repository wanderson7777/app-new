<php
session_start();
include('conexao.php');
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CADASTRAR</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
  <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Faça seu Cadastro<br></h3>
           
                  
                    <div class="box">
                        <form action="cadastrarteste.php" method="POST">
                              <div class="field">
                                <div class="control">
                                    <input name="cpf" type="text" class="input is-large" placeholder="CPF" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
                                </div>
                            </div>
                              <div class="field">
                                <div class="control">
                                    <input name="sobrenome" type="text" class="input is-large" placeholder="Sobrenome" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="email" type="text" class="input is-large" placeholder="Email">
                                </div>
                            </div>
            
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>