@extends('layout')

@section('content')
{{ Form::open(['route' => 'memo.store', 'method' => 'POST']) }}
    {{ Form::text('text') }}
    {{ Form::submit('新規作成') }}
{{ Form::close() }}
@endsection
