@extends('base')

@section('content')
<div class="container mt-4">
    <div class="row">
        <h2>{{ $new['title'] }}</h2>

        <div>{{ $new['text'] }}</div>
    </div>
</div>
@endsection