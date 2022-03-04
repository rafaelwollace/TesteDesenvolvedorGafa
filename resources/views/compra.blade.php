@extends('layouts.content')
@section('titulo', 'Compras')
@section('conteudo')

<div class="card-header">
    <center>
        <h2>Compras</h2>
    </center>
</div>

<div class="card-body">
    @livewire('compras')
</div>

@endsection