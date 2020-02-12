
<br><br>
<div class=" form-control">
    <P class="text-center alert-success">  
        <br>
        <img src="<?php base_url() ?> assets/img/iconMarbook.png" alt="marbookIMG"  style="height: 60px"  ><br>    
        <?php
        if (isset($_SESSION['cadastroOk'])) {
            echo $_SESSION['cadastroOk'];
        }
        ?><br><br>
        <strong>Cadastro Realizado com Sucesso!</strong><br><br>
        <input type='button' value='Cadastrar mais Livros' class="btn btn-primary" onclick='history.go(-1)' />
        <a class="btn btn-outline-dark" href="<?php base_url()?>AreDeTrabalhoCI" >Voltar Para Area de Trabalho </a>
    </p>


</div>