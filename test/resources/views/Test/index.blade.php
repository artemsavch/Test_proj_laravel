@extends('Test.layouts.layout')

@section('navbar')
    @parent
@endsection

@section('hedder')
    @parent
@endsection

@section('sidebar1')
    @parent

    <div class="sidebar-module">
        <h4>About</h4>
        <p>Etiat porta <em>sem asdasda d</em>asd asd asd asdasdasdasd</p>
    </div>

@endsection



@section('content')
    @include('Test.content')
@endsection



