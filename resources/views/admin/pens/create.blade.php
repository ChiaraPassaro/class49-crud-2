@extends('admin.layouts.base')

@section('documentTitle')
    Create new Pen
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ route('pens.store') }}" method="post">

                    {{-- indispensabili per il funzionamento dei form --}}
                    @csrf
                    @method('POST')

                    {{-- input name --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">

                        {{-- badge error --}}
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        {{-- /badge error --}}
                    </div>

                    {{-- input brand --}}
                    <div class="mb-3">
                        <label for="brand" class="form-label">Brand</label>
                        <input type="text" class="form-control" id="brand" name="brand" value="{{ old('brand') }}">

                        {{-- badge error --}}
                        @error('brand')
                            <div class="alert alert-danger">{{ $message }}
                            </div>
                        @enderror
                        {{-- /badge error --}}
                    </div>

                    {{-- input series --}}
                    <div class="mb-3">
                        <label for="series" class="form-label">series</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">

                        {{-- badge error --}}
                        @error('series')
                            <div class="alert alert-danger">{{ $message }}
                            </div>
                        @enderror
                        {{-- /badge error --}}
                    </div>

                    {{-- input color --}}
                    <div class="mb-3">
                        <label for="color" class="form-label">color</label>
                        <input type="text" class="form-control" id="color" name="color" value="{{ old('color') }}">

                        {{-- badge error --}}
                        @error('color')
                            <div class="alert alert-danger">{{ $message }}
                            </div>
                        @enderror
                        {{-- /badge error --}}
                    </div>

                    {{-- input type --}}
                    <div class="mb-3">
                        <label for="type" class="form-label">type</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">

                        {{-- badge error --}}
                        @error('type')
                            <div class="alert alert-danger">{{ $message }}
                            </div>
                        @enderror
                        {{-- /badge error --}}
                    </div>

                    {{-- input refill --}}
                    <div class="mb-3">
                        <label for="refill" class="form-label">refill</label>
                        <input type="text" class="form-control" id="refill" name="refill" value="{{ old('refill') }}">

                        {{-- badge error --}}
                        @error('refill')
                            <div class="alert alert-danger">{{ $message }}
                            </div>
                        @enderror
                        {{-- /badge error --}}
                    </div>

                    {{-- input body_material --}}
                    <div class="mb-3">
                        <label for="body_material" class="form-label">body_material</label>
                        <input type="text" class="form-control" id="body_material" name="body_material"
                            value="{{ old('body_material') }}">

                        {{-- badge error --}}
                        @error('body_material')
                            <div class="alert alert-danger">{{ $message }}
                            </div>
                        @enderror
                        {{-- /badge error --}}
                    </div>

                    {{-- input closed_length --}}
                    <div class="mb-3">
                        <label for="closed_length" class="form-label">closed length</label>
                        <input type="number" class="form-control" id="closed_length" name="closed_length"
                            value="{{ old('closed_length') }}">

                        {{-- badge error --}}
                        @error('closed_length')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        {{-- /badge error --}}
                    </div>

                    {{-- input body_length --}}
                    <div class="mb-3">
                        <label for="body_length" class="form-label">body length</label>
                        <input type="number" class="form-control" id="body_length" name="body_length"
                            value="{{ old('body_length') }}">

                        {{-- badge error --}}
                        @error('body_length')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        {{-- /badge error --}}
                    </div>

                    {{-- input cap_length --}}
                    <div class="mb-3">
                        <label for="cap_length" class="form-label">cap length</label>
                        <input type="number" class="form-control" id="cap_length" name="cap_length"
                            value="{{ old('cap_length') }}">

                        {{-- badge error --}}
                        @error('cap_length')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        {{-- /badge error --}}
                    </div>

                    {{-- input diameter --}}
                    <div class="mb-3">
                        <label for="diameter" class="form-label">diameter</label>
                        <input type="number" class="form-control" id="diameter" name="diameter"
                            value="{{ old('diameter') }}">

                        {{-- badge error --}}
                        @error('diameter')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        {{-- /badge error --}}
                    </div>

                    {{-- input weight --}}
                    <div class="mb-3">
                        <label for="weight" class="form-label">weight</label>
                        <input type="number" class="form-control" id="weight" name="weight"
                            value="{{ old('weight') }}">

                        {{-- badge error --}}
                        @error('weight')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        {{-- /badge error --}}
                    </div>

                    <input type="submit" class="btn btn-primary" value="Salva">
                </form>
            </div>
        </div>
    </div>
@endsection
