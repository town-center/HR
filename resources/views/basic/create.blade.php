@extends('layouts.app')

@section('content')

    @if (session('Add'))
        <div class="alert alert-success " role="alert">
            <strong>{{ session()->get('Add') }}</strong>
        </div>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{$error}}</div>
        @endforeach
    @endif

create basic

<div class="container">
        <div class="row justify-content-center">
            <div class="row-cols-md-6">
                <div class="card">
                    <div class="card-body">
                    <form action="/basic" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="basic_name">Name</label>
                                <input type="text" class="form-control" id="basic_name" name="basic_name"
                                       aria-describedby="Basic" placeholder="Basic Name">
                            </div><br>

                        <select class="form-select" aria-label="Default select example" name="formType" id="formType">
                            <option selected>Open this select menu</option>
                            @foreach($formTypes as $formType)
                            <option value="{{$formType->id}}">{{$formType->name}}</option>
                            @endforeach

                        </select>

                        <br>
                            <button type="submit" class="btn btn-primary">Save</button>


                        </form>

                    </div>
                </div>
            </div>
        </div>
@endsection
