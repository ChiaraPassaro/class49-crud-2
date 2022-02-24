@extends('admin.layouts.base')

@section('documentTitle')
    {{ $pen->name }}
@endsection

@section('content')
    <ul>
        @foreach ($pen->toArray() as $key => $value)
            <li>{{ $key }}: {{ $value }}</li>
        @endforeach
    </ul>
@endsection
