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


    <div class="container">
        create department
        <div class="row justify-content-center">
            <div class="row-cols-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="/department" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="department_name">Name</label>
                                <input type="text" class="form-control" id="department_name" name="department_name"
                                       aria-describedby="Department" placeholder="Department Name">
                            </div><br>
                            <button type="submit" class="btn btn-primary">Save</button>


                        </form>

                    </div>
                </div>
            </div>
        </div>
@endsection
