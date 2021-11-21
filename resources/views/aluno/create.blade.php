@extends('base')

@section('content')
    
    <h1 class="mt-5">Adicionando novo aluno
        <button class="btn btn-secundary" onclick="window.location.href='{{ route('aluno.index') }}'">Voltar</button>
    </h1>

    <!-- INICIO FORMULARIO -->
    <form action="{{ route('aluno.store') }}" method="POST">
        @method('POST')
        @csrf {{-- TAG DE SEGURANÇA --}}

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="form_nome_aluno">Nome do aluno</label>
                <input type="text" class="form-control" id="form_nome_aluno" name="form_nome_aluno" placeholder="Exemplo: João da Silva" maxlength="64" required autofocus>
            </div>
            <div class="form-group col-md-4">
                <label for="form_data_aluno">Data de nascimento</label>
                <input type="date" class="form-control" id="form_data_aluno" name="form_data_aluno" required>
            </div>
            <div class="form-group col-md-4">
                <label for="form_ra_aluno">R.A</label>
                <input type="text" class="form-control" id="form_ra_aluno" name="form_ra_aluno" placeholder="Exemplo: 661.324.707.480" maxlength="15" required>
            </div>
            <div class="form-group col-md-4">
                <label for="form_turma_aluno">Turma</label>
                <select id="form_turma_aluno" name="form_turma_aluno" class="form-control" required>
                    @isset($turmas)
                        @foreach ($turmas as $t)
                        <option value="{{ $t->id }}">{{ $t->nome_turma }}</option>
                        @endforeach
                    @endisset
                </select>
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