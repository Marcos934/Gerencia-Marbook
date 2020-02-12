

<div class="pagination justify-content-sm-end">

    <div class="col-8">
        <form   class="form-inline" method="POST" action="<?php base_url() ?>FiltroItensVendaCI">      
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="ordem" value="asc" checked class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline1">Ordem Crescente</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="ordem" value="desc"class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline2">Ordem Decrescente</label>
            </div>
            <input name="busca" class="form-control mr-sm-1" pattern="[a-zA-Z\s @ A-Za-zÀ-ú0-9., -]+$" type="text" placeholder="Pesquisar" aria-label="Search"><select name="filtro" class="btn btn-outline-success"  >
                <option value="idLivro">Filtrar por ID</option>
                <option value="Nome">Título</option>   
                <option value="autor">Autor(a)</option>
                <option value="genero">Gênero</option>                   
                <option value="Preco">Preço</option>           
            </select> &nbsp;
            <button  class="btn btn-success my-2 my-sm-0" type="submit">Pronto</button>
        </form>   
    </div>
</div>

<main role="main" class="container align-center" >
    <div class="">
        <div class="page-header centered" >
            <h1>Edição</h1>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-responsive-lg">
                    <thead>
                        <tr>
                            <th>IdLivro</th>
                            <th>Nome</th>
                            <th>Autor</th>
                            <th>Gênero</th>
                            <th>Quantidade</th>
                            <th>Preço</th>                    
                            <th>Açõe</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tudo as $value) : ?>                           
                            <tr>
                                <td><?php echo $value->idLivro; ?></td>
                                <td><?php echo $value->Nome; ?></td>
                                <td><?php echo $value->Autor; ?></td>
                                <td><?php echo $value->Tipo; ?></td>
                                <td><?php echo $value->qtd_livro; ?></td>
                                <td><?php echo $value->Preco; ?></td>
                                <td>    
                                    <button type="button" class="btn btn-sm btn-primary" data-target="#myModal<?php echo $value->idLivro; ?>" data-toggle="modal">
                                        Editar
                                    </button>&nbsp;

                                    <button type="button" data-target="#myModal<?php echo $value->idLivro; ?>E" data-toggle="modal"  class="btn btn-sm btn-danger">
                                        Excluir
                                    </button>
                                </td>

                                <!-- Modal -->
                        <div class="modal fade" id="myModal<?php echo $value->idLivro; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header btn btn-info">
                                        <h4 class="modal-title" id="myModalLabel">IdLivro: <?php echo $value->idLivro; ?></h4>
                                    </div>
                                    <a class="text-center"> <h4>Tudo Certo para Edição</h4></a>
                                    <div class="modal-body">      
                                        <form class="needs-validation" method="POST" action="<?php base_url() ?>EfetivaEdicaoCI">
                                            <div class="row">

                                                <input type="hidden" name="id" class="form-control" id="validationCustomUsername" placeholder="Digite o id desejado" aria-describedby="inputGroupPrepend"  value="<?php echo $value->idLivro; ?>"  >
                                                <div class="col">
                                                    <label for="validationCustom01">Título do livro</label>
                                                    <input type="text" class="form-control" id="validationCustom01" pattern="[a-zA-Z\s @ A-Za-zÀ-ú0-9., -]+$" placeholder="Título do livro" name="nome" value="<?php echo $value->Nome; ?>" required>                  
                                                    <div class="valid-feedback">
                                                        Tudo Certo
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Preencha aqui!
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <label for="validationCustom02">Autor(a)</label>
                                                    <input type="text" class="form-control" id="validationCustom02" placeholder="Autor" name="autor" value="<?php echo $value->Autor; ?>" required>
                                                    <div class="valid-feedback">
                                                        Tudo Certo
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Preencha aqui!
                                                    </div>
                                                </div>

                                            </div><br><hr><br>
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="validationCustom03">Gênero</label>
                                                    <div class="form-group">
                                                        <select class="form-control" id="exampleSelect1" id="validationCustom03" required name="genero">
                                                            <option name="genero" value="<?php echo $value->Num_Genero ?>"> <?php echo $value->Tipo ?> </option>
                                                            <?php foreach ($tipos as $genero): ?>
                                                                <option name="genero" value="<?php echo $genero->Num_Genero ?>"><?php echo $genero->Tipo ?> </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <div class="valid-feedback">
                                                            Certifique que o Gênero foi selecionado
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-2">
                                                    <label for="validationCustom05">Quantidade</label>
                                                    <input type="text" pattern="[0-9]{1,4}" class="form-control" name="qnt" id="validationCustom05" placeholder="Quantidade" value="<?php echo $value->qtd_livro; ?>" required>
                                                    <div class="valid-feedback">
                                                        Tudo Certo
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Preencha aqui!
                                                    </div>
                                                </div>

                                                <div class="col-2">
                                                    <label for="validationCustom06">Preço</label>                                                  
                                                    <input type="text" pattern="[0-9 .]{1,4}" class="form-control" name="preco" id="validationCustom05" placeholder="Valor" value="<?php echo $value->Preco; ?>" required>
                                                    <div class="valid-feedback">
                                                        Tudo Certo
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Preencha aqui!
                                                    </div>
                                                </div>


                                                <div class="col-5">
                                                    <label for="validationCustom04">Descrição</label>                  
                                                    <textarea  cols="50" rows="6" required class="form-control" maxlength=254 placeholder="Digite a Descrição" id="validationCustom04"  name="descri"><?php echo $value->Descricao_Basica; ?></textarea>

                                                    <div class="valid-feedback">
                                                        Tudo Certo
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Preencha aqui!
                                                    </div>              

                                                </div>





                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                                                <button type="submit" class="btn btn-primary">Efetuar Edição</button>
                                            </div>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Modal2 -->
                        <div class="modal fade" id="myModal<?php echo $value->idLivro; ?>E" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog " role="document">
                                <div class="modal-content">
                                    <div class="modal-header btn btn-danger">
                                        <h4 class="modal-title" id="myModalLabel">IdLivro: <?php echo $value->idLivro; ?></h4>
                                    </div>
                                    <a class="text-center"> <h4>Deseja Mesmo Excluir?</h4></a>
                                    <div class="modal-body">   
                                        <div class="text-center ">
                                            <form method="POST" action="<?php base_url() ?>EfetivaExclusaoCI">
                                                <input type="hidden" name="id" value="<?php echo $value->idLivro; ?>">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                                <button type="submit" class="btn btn-warning">Sim</button> 
                                            </form>


                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>


                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <?php if (empty($value)): ?>                            
                    <div class=" form-control">
                        <nav class="text-center alert-danger"> 
                            <br>
                            <img src="<?php base_url() ?> assets/img/iconMarbook.png" alt="marbookIMG"  style="height: 75px"  ><br>    
                            <strong>Nenhum resultado obtido</strong><br><br>
                            <p>Certifique-se de que tudo foi digitado corretamente ou a aplicação do filtro está correta!</p>  <br> 
                        </nav>


                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>

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




</main>