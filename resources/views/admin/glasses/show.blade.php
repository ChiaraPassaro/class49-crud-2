@extends('admin.layouts.base')

@section('documentTitle')
    {{ $glass->name }}
@endsection

@section('content')
    <ul>
        @foreach ($glass->toArray() as $key => $value)
            <li>{{ $key }}: {{ $value }}</li>
        @endforeach
    </ul>
@endsection
