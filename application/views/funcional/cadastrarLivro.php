
<main role="main" class="container align-center" >
    <div class="">
        <div class="page-header centered" >
            <h1>Cadastro</h1>
        </div>

        <P class="text-center alert-success">       
            <?php
            if (isset($_SESSION['cadastroOk'])) {
                echo $_SESSION['cadastroOk'];
                unset($_SESSION['cadastroOk']);
            }
            ?>
        </p>

        <form class="needs-validation" enctype="multipart/form-data" novalidate action="EfetivarCadastroCI" method="POST">
            <div class="row">
                <div class="col">
                    <label for="validationCustom01">ID Livro</label>
                    <label for="validationCustomUsername"></label>
                    <div class="input-group">                      
                        <input type="text" name="id" class="form-control" id="validationCustomUsername" placeholder="Default" aria-describedby="inputGroupPrepend" value="default"  >
                        <div class="valid-feedback">
                            Tudo Certo
                        </div>
                        <div class="invalid-feedback">
                            Preencha aqui!
                        </div>
                    </div>
                </div>
                <div class="col">
                    <label for="validationCustom01">Título do livro</label>
                    <input type="text" class="form-control" id="validationCustom01" pattern="[a-zA-Z\s @ A-Za-zÀ-ú0-9., -]+$" placeholder="Título do livro" name="nome" required>                  
                    <div class="valid-feedback">
                        Tudo Certo
                    </div>
                    <div class="invalid-feedback">
                        Preencha aqui!
                    </div>
                </div>
                <div class="col">
                    <label for="validationCustom02">Autor(a)</label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Autor" name="autor" required>
                    <div class="valid-feedback">
                        Tudo Certo
                    </div>
                    <div class="invalid-feedback">
                        Preencha aqui!
                    </div>
                </div>

            </div><br><hr><br>
            <div class="row">
                <div class="col">
                    <label for="validationCustom03">Gênero</label>
                    <div class="form-group">
                        <select class="form-control" id="exampleSelect1" id="validationCustom03" required name="genero">
                            <option value="" >Selecione um Genero</option>
                            <?php foreach ($tipos as $genero): ?>
                                <option name="genero" value="<?php echo $genero->Num_Genero ?>"><?php echo $genero->Tipo ?>                            
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <div class="valid-feedback">
                            Certifique que o Gênero foi selecionado
                        </div>
                    </div>
                </div>


                <div class="col-2">
                    <label for="validationCustom05">Quantidade</label>
                    <input type="text" pattern="[0-9]{1,4}" class="form-control" name="qnt" id="validationCustom05" placeholder="Quantidade" value="1" required>
                    <div class="valid-feedback">
                        Tudo Certo
                    </div>
                    <div class="invalid-feedback">
                        Preencha aqui!
                    </div>
                </div>


                <div class="col-6">
                    <label for="validationCustom04">Descrição</label>                  
                    <textarea  required class="form-control" maxlength=254 placeholder="Digite a Descrição" id="validationCustom04" name="descri"></textarea>

                    <div class="valid-feedback">
                        Tudo Certo
                    </div>
                    <div class="invalid-feedback">
                        Preencha aqui!
                    </div>              

                </div>

            </div><br>
            <div class="row">
                <div class="col-4 "> 
                    <label for="validationCustom10">Imagem do livro</label>
                    <input id="validationCustom10" class="btn btn-outline-info"  accept="image/jpg, image/jpeg" multiple  type="file" name="arquivo" required><br>    
                    <div class="valid-feedback">
                        Tudo Certo
                    </div>
                    <div class="invalid-feedback">
                        Preencha aqui!
                    </div>

                </div> 
                <div class="col-2">
                    <label for="validationCustom06">Preço</label>
                    <input type="text" pattern="[0-9 .]{1,4}" class="form-control" name="preco" id="validationCustom05" placeholder="Valor" required>
                    <div class="valid-feedback">
                        Tudo Certo
                    </div>
                    <div class="invalid-feedback">
                        Preencha aqui!
                    </div>
                </div>

                <div class="col-5">
                    <strong> Cuidados </strong><br>
                    1- Carregue apenas imagens JPG<br>
                    2- Certifique-se que o Titulo está correto<br>
                    3- Preencha corretamente a quantidade de livro<br>
                    4- Evite Cadastrar um livro mais de uma vez<br>
                    5- O Campo ID LIVRO pode ser alterado, porém é automático<br>
                    6- Caso não ache gênero existente, cadastre um novo gênero

                </div>


            </div>


            <br><br>
            <button class="btn btn-primary pull-left" type="submit">Cadastrar Livro</button>
            <button class="btn btn-outline-warning" type="reset">Limpar tudo</button>
            <br><br>
        </form>


        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
                'use strict';
                window.addEventListener('load', function () {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function (form) {
                        form.addEventListener('submit', function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>


    </div>
</main>