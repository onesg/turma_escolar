@extends('base')

@section('content')
    
    <h1 class="mt-5">Adicionando nova turma
        <button class="btn btn-secundary" onclick="window.location.href='{{ route('turma.index') }}'">Voltar</button>
    </h1>

    <!-- INICIO FORMULARIO -->
    <form action="{{ route('turma.store') }}" method="POST">
        @method('POST')
        @csrf {{-- TAG DE SEGURANÇA --}}

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="form_nome_turma">Nome da turma</label>
                <input type="text" class="form-control" id="form_nome_turma" name="form_nome_turma" placeholder="Exemplo: 5º serie" maxlength="64" required autofocus>
            </div>
            <div class="form-group col-md-6">
                <label for="form_classe_turma">Classe</label>
                <input type="text" class="form-control" id="form_classe_turma" name="form_classe_turma" placeholder="Exemplo: B" maxlength="1" required>
            </div>
            <div class="form-group col-md-3">
                <label for="form_classe_turma">Número de sala</label>
                <input type="number" class="form-control" id="form_sala_turma" name="form_sala_turma" placeholder="Exemplo: 13" maxlength="4" required>
            </div>
        </div>

        <!-- BOTAO LIMPAR -->
        <button type="reset" class="btn btn-primary">Limpar campos</button>
        <!-- BOTAO CADASTRAR -->
        <button type="submit" class="btn btn-success">Cadastrar</button>

    </form>
    <!-- FIM FORMULARIO -->
    <!--(form_nome_turma)(form_classe_turma)-->

@endsection