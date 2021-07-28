@extends('layouts.admin.v_layout')
@section('content')
<div class="container-fluid">
    <div class="jumbotron mt-2 bg-green">
        <h1 class="display-4">Hello, {{Auth::user()->name}}!</h1>
        <p class="lead">You are Staff of the Lippo Life Productivity Report System</p>
    </div>
</div>
@endsection