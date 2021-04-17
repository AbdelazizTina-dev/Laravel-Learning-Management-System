@extends('layouts.base')
@section('content')
    <div class="container mt-5">
        <h1 class="mb-5">
            Edit subject:
        </h1>

        <form action="{{route('subjects.update',['subject'=>$subject])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label col-form-label-lg">Name:</label>
                <div class="col-sm-10">
                    <input name="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" id="name" value="{{ old('name', $subject->name) }}">
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
                    <input name="code" type="text" class="form-control form-control-lg @error('code') is-invalid @enderror" id="code" value="{{ old('code', $subject->code) }}">
                    @error('code')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
                </div>

                <label for="credit_value" class="col-sm-2 col-form-label col-form-label-lg">Credit Value:</label>
                <div class="col-sm-4">
                    <input name="credit_value" type="text" class="form-control form-control-lg @error('credit_value') is-invalid @enderror" id="credit_value" value="{{ old('credit_value', $subject->credit_value) }}">
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
                    <textarea name="description" class="form-control form-control-lg" id="description" placeholder="" rows="6">{{old('description', $subject->description) }}</textarea>
                </div>
            </div>
            <div class="form-group row float-right">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
