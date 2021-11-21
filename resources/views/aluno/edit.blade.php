@extends('base')

@section('content')
    
    <h1 class="mt-5">Editando aluno</h1>

    <!-- INICIO FORMULARIO -->
    <form action="{{ route('aluno.update', $aluno->id) }}" method="POST">
        @method('PUT')
        @csrf {{-- TAG DE SEGURANÇA --}}

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="form_nome_aluno">Nome do aluno</label>
                <input type="text" class="form-control" id="form_nome_aluno" name="form_nome_aluno" placeholder="Exemplo: João da Silva" maxlength="64" value="{{ $aluno->nome_aluno }}" required autofocus>
            </div>
            <div class="form-group col-md-4">
                <label for="form_data_aluno">Data de nascimento</label>
                <input type="date" class="form-control" id="form_data_aluno" name="form_data_aluno" value="{{ $aluno->nascimento_aluno }}" required>
            </div>
            <div class="form-group col-md-4">
                <label for="form_ra_aluno">R.A</label>
                <input type="text" class="form-control" id="form_ra_aluno" name="form_ra_aluno" placeholder="Exemplo: 661.324.707.480" maxlength="15" value="{{ $aluno->ra_aluno }}" required>
            </div>
            <div class="form-group col-md-4">
                <label for="form_turma_aluno">Turma</label>
                <select id="form_turma_aluno" name="form_turma_aluno" class="form-control" required>
                    <option value="{{ $aluno->turma->id }}">{{ $aluno->turma->nome_turma }}</option>
                    @isset($turmas)
                        @foreach ($turmas as $t)
                        <option value="{{ $t->id }}">{{ $t->nome_turma }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
        </div>

        <!-- BOTAO CANCELAR -->
        <button class="btn btn-danger">
            <a style="text-decoration: inherit; color: inherit;" href="{{ route('aluno.index') }}">Cancelar</a>
        </button>
        <!-- BOTAO CADASTRAR -->
        <button type="submit" class="btn btn-success">Salvar</button>

    </form>
    
    <!-- FIM FORMULARIO -->
    <!--(form_nome_turma)(form_classe_turma)-->

@endsection