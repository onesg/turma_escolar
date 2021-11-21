@extends('base')

@section('content')

    <!-- TITULO DA TELA -->
    <h1 class="mt-5">Informações</h1>
    
    <!-- INFORMAÇÕES DO ALUNO -->
    <p class="lead">ID: {{ $aluno->id }}</p>
    <p class="lead">Nome do aluno: {{ $aluno->nome_aluno }}</p>
    <p class="lead">Nascimento: {{ $aluno->nascimento_aluno }}</p>
    <p class="lead">R.A: {{ $aluno->ra_aluno }}</p>
    <p class="lead">Turma: {{ $aluno->turma->nome_turma }}</p>

@endsection