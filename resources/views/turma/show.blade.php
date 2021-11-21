@extends('base')

@section('content')

    <!-- TITULO DA TELA -->
    <h1 class="mt-5">Informações</h1>
    
    <!-- INFORMAÇÕES DA TURMA -->
    <p class="lead">ID: {{ $turma->id }}</p>
    <p class="lead">Nome da turma: {{ $turma->nome_turma }}</p>
    <p class="lead">Classe: {{ $turma->classe_turma }}</p>
    <p class="lead">Número da sala: {{ $turma->sala_turma }}</p>

@endsection