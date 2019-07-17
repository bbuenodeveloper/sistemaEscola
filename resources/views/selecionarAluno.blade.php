@extends('template')

@section('conteudo')

<h1>Lista de Alunos</h1>
<ul>@foreach($alunos as $aluno)
    <li>{{$aluno->nome}}</li>
        <a href="/aluno/deletar/{{$aluno->id}}">Deletar</a>
    @endforeach
</ul>



@endsection   