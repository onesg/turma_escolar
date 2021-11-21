{{-- HERDANDO AS INFORMAÇÕES DA VIEW BASE --}}
@extends('base')

{{-- O QUE ESTIVER AQUI DENTRO SERA INJETADO NA PAGINA DE BASE --}}
@section('content')

    @if ( isset($turmas) )
    <!-- TITULO DA TELA -->
    <h1 class="mt-5">Listando turmas
        <button type="button" class="btn btn-success" onclick="window.location.href='{{ route('turma.create') }}'">
            Adicionar
        </button>
    </h1>

    <!-- INICIO TABELA -->
    <table class="table table-hover">
        <!-- INICIO CABEÇALHO TABELA -->
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome da turma</th>
                <th scope="col">Classe</th>
                <th scope="col">Sala</th>
                <th scope="col">
                    <center>Ações</center>
                </th>
            </tr>
        </thead>
        <!-- FIM CABEÇALHO TABELA -->

        <!-- INICIO CORPO TABELA -->
        <tbody>
            @isset($turmas)
                @foreach ($turmas as $t)
                <!-- INICIO LINHA -->
                <tr>
                    <th scope="row">{{ $t->id }}</th>
                    <td>{{ $t->nome_turma }}</td>
                    <td>{{ $t->classe_turma }}</td>
                    <td>{{ $t->sala_turma }}</td>
                    <td>
                        <center>
                            <div class="btn-group" role="group" aria-label="Basic example">

                                <form action="{{ route('turma.destroy', $t->id) }}" method="POST"><!-- FORM PARA O BOTAO DELETE -->
                                    @method('DELETE')
                                    @csrf

                                    <button type="button" class="btn btn-dark" onclick="window.location.href='{{ route('turma.show', $t->id) }}'">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                    </button>
                                
                                    <button type="button" class="btn btn-dark" onclick="window.location.href='{{ route('turma.edit', $t->id) }}'">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path
                                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                        </svg>
                                    </button>

                                    <button type="submit" class="btn btn-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-trash" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd"
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg>
                                    </button>
                                </form>
                                
                            </div>
                        </center>
                    </td>
                </tr>
                <!-- FIM LINHA -->
                @endforeach
            @endisset
        </tbody>
        <!-- FIM CORPO TABELA -->

    </table>
    <!-- FIM TABELA -->

    <!-- INICIO PAGINACAO -->
    <nav aria-label="#">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" tabindex="-1">Anterior</a>
            </li>

            <li class="page-item active">
                <a class="page-link" href="#">1<span class="sr-only">(atual)</span></a>
            </li>

            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>

            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>

            <li class="page-item">
                <a class="page-link" href="#">Próximo</a>
            </li>
        </ul>
    </nav>
    <!-- FIM PAGINACAO -->
    @else
    <h1 class="mt-5">
        Não há turmas cadastradas...
        <button type="button" class="btn btn-success" onclick="window.location.href='{{ route('turma.create') }}'">
            Adicionar
        </button>
    </h1>
    @endif
    
@endsection