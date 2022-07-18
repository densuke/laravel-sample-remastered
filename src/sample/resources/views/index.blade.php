@extends('layout')

@section('content')
<a href="{{route('memo.new')}}">新規メモ追加</a>
<ul>
    @foreach($message as $memo)
    <li><a href="{{ route('memo.show', ['id' => $memo->id]) }}">
        {{ $memo->text }}
        </a>
    </li>
    @endforeach
</ul>
{{-- <hr> ※ ↓はnew.blade.phpからお引っ越し index上で完結させたい場合の例(授業で実施)
{{ Form::open(['route' => 'memo.store', 'method' => 'POST']) }}
    {{ Form::text('text') }}
    {{ Form::submit('新規作成') }}
{{ Form::close() }} --}}
@endsection
