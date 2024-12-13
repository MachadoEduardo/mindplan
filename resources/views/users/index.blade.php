@extends('layouts.app')

@section('title', 'Listagem dos usuários');

@section('content')
<h1>Listagem dos usuários
    <a href="{{ route('users.create')}}">+</a>
</h1>
 <!-- View não traz lógica, apenas visualização do projeto, então não tem < php > -->
 <ul>
    @foreach($users as $user)
    <li>
        {{ $user->name }} -
        {{ $user->email }} 
        <a href="{{ route('users.edit', $user->id)}}">Editar</a>
        <a href="{{ route('users.show', $user->id)}}">Detalhes</a>
    </li>
    @endforeach
 </ul>
     
@endsection