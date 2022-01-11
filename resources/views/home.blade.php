@extends('adminlte::page')

@section('title', 'Dashboard')

@section('name', 'content')

@section('content_header')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Hola mundo</h1>
        </div>
        <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero nisi mollitia vel inventore dicta earum doloremque fugiat omnis debitis iste quis at cupiditate, totam eveniet non dolorum esse molestiae iure.</p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        Swal.fire(
        'Good job!',
        'You clicked the button!',
        'success'
        )
    </script>
@stop

