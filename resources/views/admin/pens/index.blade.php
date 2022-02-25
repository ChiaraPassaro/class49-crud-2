@extends('admin.layouts.base')

@section('documentTitle')
    All pens
@endsection

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col">

                <table class="table table-light">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th colspan="3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pens as $pen)
                            <tr>
                                <td>{{ $pen->name }}</td>
                                <td>{{ $pen->type }}</td>
                                <td>{{ $pen->price }}</td>
                                <td><a class="btn btn-default" href="{{ route('pens.show', $pen->id) }}">View</a></td>
                                <td><a class="btn btn-primary" href="{{ route('pens.edit', $pen->id) }}">Edit</a></td>
                                <td>
                                    <form action="{{ route('pens.destroy', $pen->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input class="btn btn-danger" type="submit" value="Cancella">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">
                {{ $pens->links() }}
            </div>
        </div>
    </div>
@endsection
