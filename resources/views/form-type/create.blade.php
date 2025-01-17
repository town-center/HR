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
create form type



<div class="container">
        <div class="row justify-content-center">
            <div class="row-cols-md-6">
                <div class="card">
                    <div class="card-body">
                    <form action="/form-type" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="formType_name">Name</label>
                                <input type="text" class="form-control" id="formType_name" name="formType_name"
                                       aria-describedby="Form type" placeholder="Form type Name">
                            </div><br>
                            <button type="submit" class="btn btn-primary">Save</button>


                        </form>

                    </div>
                </div>
            </div>
        </div>
@endsection