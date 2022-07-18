@extends('layout')

@section('content')
サンプルです。
<ul>
    @foreach($message as $memo)
    <li><a href="{{ route('memo.show', ['id' => $memo->id]) }}">
        {{ $memo->text }}
        </a>
    </li>
    @endforeach
</ul>
@endsection
