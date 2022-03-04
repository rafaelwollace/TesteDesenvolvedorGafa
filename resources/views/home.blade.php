@extends('layouts.content')
@section('titulo', 'Clientes')
@section('conteudo')

<div class="card-header">
    <center>
        <h2>Clientes</h2>
    </center>
</div>

<div class="card-body">
    @livewire('clientes')
</div>


@endsection