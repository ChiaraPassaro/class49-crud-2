@extends('admin.layouts.base')

@section('documentTitle')
    Create new Pen
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ route('pens.store') }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="brand" class="form-label">Brand</label>
                        <input type="text" class="form-control" id="brand" name="brand">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">series</label>
                        <input type="text" class="form-control" id="series" name="series">
                    </div>
                    <div class="mb-3">
                        <label for="color" class="form-label">color</label>
                        <input type="text" class="form-control" id="color" name="color">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">type</label>
                        <input type="text" class="form-control" id="type" name="type">
                    </div>
                    <div class="mb-3">
                        <label for="refill" class="form-label">refill</label>
                        <input type="text" class="form-control" id="refill" name="refill">
                    </div>
                    <div class="mb-3">
                        <label for="body_material" class="form-label">body_material</label>
                        <input type="text" class="form-control" id="body_material" name="body_material">
                    </div>
                    <div class="mb-3">
                        <label for="closed_length" class="form-label">closed length</label>
                        <input type="number" class="form-control" id="closed_length" name="closed_length">
                    </div>
                    <div class="mb-3">
                        <label for="body_length" class="form-label">body length</label>
                        <input type="number" class="form-control" id="body_length" name="body_length">
                    </div>
                    <div class="mb-3">
                        <label for="cap_length" class="form-label">cap length</label>
                        <input type="number" class="form-control" id="cap_length" name="cap_length">
                    </div>
                    <div class="mb-3">
                        <label for="diameter" class="form-label">diameter</label>
                        <input type="number" class="form-control" id="diameter" name="diameter">
                    </div>
                    <div class="mb-3">
                        <label for="weigth" class="form-label">weight</label>
                        <input type="number" class="form-control" id="weigth" name="weigth">
                    </div>

                    <input type="submit" class="btn btn-primary" value="Salva">
                </form>
            </div>
        </div>
    </div>
@endsection
