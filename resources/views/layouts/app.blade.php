@extends('templates.default')


@section('content')
    @include('monsters._random', ['monster' => $randomMonster])
    @include('monsters._latest', ['monsters' => $latestMonsters])
@stop

