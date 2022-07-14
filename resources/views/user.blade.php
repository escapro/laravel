@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Hello: {{Auth::user()->name}}</h3>
</div>
@endsection
