@extends('partials.layout')
@section('content')

<div class="container">
    <div class="title">
        <h1>Bienvenu {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h1>
    </div>
</div>

@endsection

