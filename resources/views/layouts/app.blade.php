@extends('templates.default')


@section('title')
Home
@stop

@section('content')
    @include('monsters._random', ['monster' => $randomMonster])
    @include('monsters._latest', ['monsters' => $latestMonsters])
@stop

