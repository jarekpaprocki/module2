@extends('module2::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('module2.name') !!}
    </p>
@stop
