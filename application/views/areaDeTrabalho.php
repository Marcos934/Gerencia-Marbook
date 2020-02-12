
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="<?php base_url(); ?>assets/img/iconMarbook2.png">

        <title>Gerencia MARBOOK</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php base_url(); ?>assets/css/dashboard.css" rel="stylesheet">
    </head>

    <body>
        <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">MARBOOK</a>
            <input class="form-control form-control-dark w-100" type="text" placeholder="" aria-label="Search">
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="<?php base_url(); ?>LoginCI">SAIR</a>
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    <span data-feather="home"></span>
                                    Area De Trabalho <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php base_url()?>CadastrarLivroCI">
                                    <span data-feather="file"></span>
                                    Cadastrar livros
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php base_url() ?>AlterarItensVendaCI">
                                    <span data-feather="shopping-cart"></span>
                                    Alterar itens de Venda
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="users"></span>
                                    Forncecedores
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="bar-chart-2"></span>
                                    Atualizar dados
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="layers"></span>
                                    Relatório de livros comprados
                                </a>
                            </li>
                        </ul>

                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Outras Funcionalidades</span>
                            <a class="d-flex align-items-center text-muted" href="#">
                                <span data-feather="plus-circle"></span>
                            </a>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Coleta de Doação
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Livros comprados
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Colaboradores
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Lista de gêneros
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>




                <main role="main" class=" ml-sm-auto col-lg-10 px-2 ">

                    <!--  -->

                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Are de Trabalho</h1>                       
                    </div>


                   
                        <iframe class="sm" style="width: 100%; height: 100vh" src="http://marbook.com.br/testeci/cimb"></iframe>
                




                </main>
            </div>
        </div>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="<?php base_url(); ?>assets/js/vendor/jquery-slim.min.js"><\/script>');</script>
        <script src="<?php base_url(); ?>assets/js/vendor/popper.min.js"></script>
        <script src="<?php base_url(); ?>assets/js/bootstrap.min.js"></script>

        <!-- Icons -->
        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
        <script>
            feather.replace();
        </script>

        <!-- Graphs -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

    </body>
</html>
