<!doctype html>
<html lang="pt-br">

<head>
    <!-- METAS TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- CSS OPCIONAL -->
    <link href="{{ asset('css/style-forms.css'); }}" rel="stylesheet">

    <!-- TITULO -->
    <title>{{ env('APP_NAME') }} - Registrar</title>

</head>

<body class="text-center">

    <!-- INICIO CONTEUDO PRINCIPAL -->
    <main class="form-signin">

        <!-- INICIO FORMULARIO LOGIN -->
        <form action="{{ route('register') }}" method="POST">
            @csrf

            <!-- ICONE DO LARAVEL -->
            <a href="https://laravel.com/" target="_blank">
                <img class="mb-4" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" alt="Icone do Laravel" width="72" height="57">
            </a>

            <!-- TIRULO DO PROJETO -->
            <h1 class="h3 mb-3 fw-normal">Projeto Turma Escolar</h1>

            <!-- INICIO DOS INPUT's -->
            <div class="form-floating">

                <!-- CAMPO NOME -->
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome" required autofocus>

                <!-- CAMPO EMAIL -->
                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>

                <!-- CAMPO SENHA -->
                <input type="password" class="form-control" id="password" name="password" placeholder="Senha" required>

                <!-- CAMPO CONFIRMAR SENHA -->
                <input type="password" class="form-control" id="password-confirm" name="password-confirm" placeholder="Confirme sua senha" required>

            </div>
            <!-- FIM DOS INPUT's -->

            <!-- BOTAO LOGAR -->
            <button class="w-100 btn btn-lg btn-primary" type="submit">Registrar</button>

            <!-- LOGAR-SE -->
            <div class="w-50 text-md-left">
                <a href="{{ route('login') }}" class="text-muted" style="text-decoration: inherit; color: inherit">Fa??a login</a>
            </div>

        </form>
        <!-- FIM FORMULARIO LOGIN -->

        <!-- INICIO ######## -->
        <p class="mt-5 mb-3 text-muted">
            <div class="container">
                <a href="https://github.com/onesg" target="_blank" style="text-decoration: inherit; color: inherit;"
                    data-toggle="tooltip" data-placement="top" title="N??o clique em mim >:)">
                    <span class="text-muted">
                        Feito com
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-heart-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                        </svg>
                        por Gabriel Possar
                    </span>
                </a>
            </div>
        </p>
        <!-- FIM ######## -->

    </main>
    <!-- FIM CONTEUDO PRINCIPAL -->

    <script>
        var password = document.getElementById("password")
                , confirm_password = document.getElementById("password-confirm");
                
        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Senhas diferentes!");
            } else {
                confirm_password.setCustomValidity('');
            }
        }
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>

</body>

</html>