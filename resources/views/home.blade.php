@extends('base')

@section('content')
    
    <h1 class="mt-5">Seja bem-vindo(a), {{ Auth::user()->name }}   ;)</h1>
    <h4>Esta é a página inicial do projeto...</h4>    
    <h4>Mas por enquanto não temos nada para mostrar.</h4>

    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Deslogar</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
        @method('POST')
    </form>

@endsection