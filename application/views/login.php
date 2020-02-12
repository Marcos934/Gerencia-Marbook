<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="Tela Login Gerente" content="Gerente Marbook">
        <meta name="Marcos Vinicius" content="">
        <link rel="icon" href="<?php base_url();?>assets/img/iconMarbook2.png">


        <title>Login</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url() .'assets/css/bootstrap.min.css';?>" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url() .'assets/css/login.css'?>" rel="stylesheet">
       
    </head>

    <body class="text-center">
        <form class="form-signin" method="POST" action="<?php echo base_url() . 'AreDeTrabalhoCI';?>" > 
            <h1 class="h3 mb-3 font-weight-normal">BEM VINDO AO</h1>
            <img class="mb-4" src="<?php echo base_url() .'assets/img/iconMarbook.png';?>" alt="iconMarbook" width="100" height="80">


            <p style="text-align: left; font-family: Arial; font-size: 1em" >Identificador :</p>
            <label  for="identificador" class="sr-only">identificador</label>
            <input style="margin-top: -10px" name="identificador" type="text" pattern="{3,}[0-9]+$"  id="inputIdentificador" class="form-control" placeholder="Digite somente números" required autofocus> 
            <br>
            <p style="text-align: left; font-family: Arial; font-size: 1em" >Senha :</p>
            <label for="inputPassword" class="sr-only">Senha</label>
            <input style="margin-top: -10px"  pattern=".{4,}"  name="senha" type="password" id="inputSenha" class="form-control" placeholder="Inserir senha" required>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>


            <P class="text-center alert-danger">       
                <?php               
                if (isset( $_SESSION['loginErro'])) {
                    echo  $_SESSION['loginErro'];
                    unset( $_SESSION['loginErro']);
                }
                ?>
            </p>


            <p class="mt-5 mb-3 text-muted">&copy; 2018</p>

        </form>
        



    </body>
</html>