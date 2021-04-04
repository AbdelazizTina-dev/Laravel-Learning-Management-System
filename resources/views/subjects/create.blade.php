@extends('layouts.base')
@section('content')
    <div class="container mt-5">
        <h1 class="mb-5">
            Add new subject:
        </h1>

        <form action="{{route('subjects.store')}}" method="POST">

            @csrf

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label col-form-label-lg">Name:</label>
                <div class="col-sm-10">
                    <input name="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" id="name" placeholder="" value="{{ old('name', '') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="code" class="col-sm-2 col-form-label col-form-label-lg">Code:</label>
                <div class="col-sm-4">
                    <input name="code" type="text" class="form-control form-control-lg @error('code') is-invalid @enderror" id="code" placeholder="IK-SSSNNN" value="{{ old('code', '') }}">
                    @error('code')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
                </div>

                <label for="credit_value" class="col-sm-2 col-form-label col-form-label-lg">Credit Value:</label>
                <div class="col-sm-4">
                    <input name="credit_value" type="text" class="form-control form-control-lg @error('credit_value') is-invalid @enderror" id="credit_value" placeholder="" value="{{ old('credit_value', '') }}">
                    @error('credit_value')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label col-form-label-lg">Description:</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control form-control-lg" id="description" placeholder="" value="{{ old('description', '') }}" rows="6"></textarea>
                </div>
            </div>
            <div class="form-group row float-right">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Add new subject</button>
                </div>
            </div>
        </form>
    </div>
@endsection
