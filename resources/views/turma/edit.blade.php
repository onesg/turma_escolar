@extends('base')

@section('content')
    
    <h1 class="mt-5">Editando turma</h1>

    <!-- INICIO FORMULARIO -->
    <form action="{{ route('turma.update', $turma->id) }}" method="POST">
        @method('PUT')
        @csrf {{-- TAG DE SEGURANÇA --}}

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="form_nome_turma">Nome da turma</label>
                <input type="text" class="form-control" id="form_nome_turma" name="form_nome_turma" placeholder="Exemplo: 5º serie" maxlength="64" value="{{ $turma->nome_turma }}" required autofocus>
            </div>
            <div class="form-group col-md-6">
                <label for="form_classe_turma">Classe da turma</label>
                <input type="text" class="form-control" id="form_classe_turma" name="form_classe_turma" placeholder="Exemplo: B" maxlength="1" value="{{ $turma->classe_turma }}" required>
            </div>
            <div class="form-group col-md-3">
                <label for="form_classe_turma">Número de sala</label>
                <input type="number" class="form-control" id="form_sala_turma" name="form_sala_turma" placeholder="Exemplo: 13" maxlength="4" value="{{ $turma->sala_turma }}" required>
            </div>
        </div>

        <!-- BOTAO CANCELAR -->
        <button onclick="window.location.href='{{ route('turma.index') }}'" class="btn btn-danger">Cancelar</button>
        <!-- BOTAO CADASTRAR -->
        <button type="submit" class="btn btn-success">Salvar</button>

    </form>
    <!-- FIM FORMULARIO -->
    <!--(form_nome_turma)(form_classe_turma)-->

@endsection