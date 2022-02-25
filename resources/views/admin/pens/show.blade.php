@extends('admin.layouts.base')

@section('documentTitle')
    {{ $pen->name }}
@endsection

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <ul>
        @foreach ($pen->toArray() as $key => $value)
            <li>{{ $key }}: {{ $value }}</li>
        @endforeach
    </ul>
@endsection
