<!doctype html>
<html lang="pt-br">

<head>
    <!-- METAS TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- CSS OPCIONAL -->
    <link rel="stylesheet" href="{{ asset('css/style-base.css'); }}">

    <!-- TITULO -->
    <title>{{ env('APP_NAME') }}</title>
</head>
<body>

    <!-- INICIO HEADER -->
    <header>
        <!-- INICIO NAVBAR FIXA -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

            <a class="navbar-brand" href="{{ route('turma.index') }}">Projeto TurmaEscolar</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- INICIO LISTA DE ITENS -->
                <ul class="navbar-nav mr-auto">
                    <!-- ITEM INICIO -->
                    <li class="nav-item"><!-- nav-item active -->
                        <a class="nav-link" href="{{ route('turma.index') }}">Inicio</a>
                    </li>
                </ul>
                <!-- FIM LISTA DE ITENS -->

                <!-- INICIO CAMPO PESQUISAR -->
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Digite algo.." aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
                <!-- FIM CAMPO PESQUISAR -->
                
            </div>
        </nav>
        <!-- FIM NAVBAR FIXA -->
    </header>
    <!-- FIM HEADER -->

    <!-- INICIO CONTEUDO PRINCIPAL -->
    <main role="main" class="container">

        {{-- CONTEUDO DINAMICO --}}
        @yield('content')

    </main>
    <!-- FIM CONTEUDO PRINCIPAL -->
    <br>
    <!-- INICIO FOOTER -->
    <footer class="footer">
        <div class="container">
            <a href="https://github.com/onesg" target="_blank" style="text-decoration: inherit; color: inherit;" data-toggle="tooltip" data-placement="top" title="Não clique em mim >:)">
                <span class="text-muted">
                    Feito com
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/></svg>
                    por Gabriel Possar
                </span>
            </a>
        </div>
    </footer>
    <!-- FIM FOOTER -->

    <!-- SCRIPTS OPCIONAIS -->
    <script src="{{ asset('js/js-base.js'); }}"></script>
    <!-- ====== SCRIPTS OBRIGATORIOS ====== -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>