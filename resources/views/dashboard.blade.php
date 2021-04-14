@extends('layouts.app')

@section('title', 'Главная страница')

@section('content')
    <p>Привет!. {{ Auth::user()->name }}</p>
@endsection