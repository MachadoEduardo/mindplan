@extends('layouts.app')

@section('title', 'Editar usuário');

@section('content')
<h1>Editar o usuário {{ $user->name }}</h1>

@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li class="errors">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('users.update', $user->id)}}" method="post">
    @method('PUT') <!-- PARA QUANDO FOR METODO PUT -->
    @csrf
    <input type="text" name="name" placeholder="Nome:" value={{ $user->name }}>
    <input type="email" name="email" placeholder="Email:" value={{ $user->email }}>
    <input type="password" name="password" placeholder="Senha:">
    <button type="submit">
        Enviar
    </button>
</form>
@endsection