@extends('layouts.app')

@section('content')
<h2>Liste des monstres</h2>
<ul>
    @foreach ( $monsters as $monster)
        <li>{{ $monster->name }}</li>
    @endforeach
</ul>
@stop