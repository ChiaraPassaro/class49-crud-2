@extends('admin.layouts.base')

@section('documentTitle')
    Modify {{ $pen->name }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Modify {{ $pen->name }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('pens.update', $pen->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $pen->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="brand" class="form-label">Brand</label>
                        <input type="text" class="form-control" id="brand" name="brand" value="{{ $pen->brand }}">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">series</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{ $pen->series }}">
                    </div>
                    <div class="mb-3">
                        <label for="color" class="form-label">color</label>
                        <input type="text" class="form-control" id="color" name="color" value="{{ $pen->color }}">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">type</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{ $pen->type }}">
                    </div>
                    <div class="mb-3">
                        <label for="refill" class="form-label">refill</label>
                        <input type="text" class="form-control" id="refill" name="refill" value="{{ $pen->refill }}">
                    </div>
                    <div class="mb-3">
                        <label for="body_material" class="form-label">body_material</label>
                        <input type="text" class="form-control" id="body_material" name="body_material"
                            value="{{ $pen->body_material }}">
                    </div>
                    <div class="mb-3">
                        <label for="closed_length" class="form-label">closed length</label>
                        <input type="number" class="form-control" id="closed_length" name="closed_length"
                            value="{{ $pen->closed_length }}">
                    </div>
                    <div class="mb-3">
                        <label for="body_length" class="form-label">body length</label>
                        <input type="number" class="form-control" id="body_length" name="body_length"
                            value="{{ $pen->body_length }}">
                    </div>
                    <div class="mb-3">
                        <label for="cap_length" class="form-label">cap length</label>
                        <input type="number" class="form-control" id="cap_length" name="cap_length"
                            value="{{ $pen->cap_length }}">
                    </div>
                    <div class="mb-3">
                        <label for="diameter" class="form-label">diameter</label>
                        <input type="number" class="form-control" id="diameter" name="diameter"
                            value="{{ $pen->diameter }}">
                    </div>
                    <div class="mb-3">
                        <label for="weigth" class="form-label">weight</label>
                        <input type="number" class="form-control" id="weigth" name="weigth" value="{{ $pen->weigth }}">
                    </div>

                    <input type="submit" class="btn btn-primary" value="Salva">
                </form>
            </div>
        </div>
    </div>
@endsection
