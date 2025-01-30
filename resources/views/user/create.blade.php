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
        create user
        <div class="row justify-content-center">
            <div class="row-cols-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="/user" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       aria-describedby="User" placeholder="User Name">
                            </div>
                            <br>

                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="User Email">

                            <br>


                            <div class="form-group">
                                <label class="form-label" for="department"> User Department </label>

                                <select class="form-select" aria-label="Default select example" name="department"
                                        id="department">

                                    <option selected>Open this select menu</option>
                                    @foreach($departments as $department)
                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                    @endforeach

                                </select>

                            </div>

                            <br>


                            <div class="form-group">
                                <label class="form-label" for="roles_name"> User Role </label>

                                <select class="form-select" aria-label="Default select example" name="roles_name[]"
                                        id="roles_name">

                                    <option selected>Open this select menu</option>
                                    @foreach($roles as $role)
                                        <option value="{{$role->name}}">{{$role->name}}</option>
                                    @endforeach

                                </select>

                            </div>
                            <br>

                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                   aria-describedby="User" placeholder="Password">

                            <br>


                            <label for="password_confirmation">Password Confirm</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                   name="password_confirmation"
                                   aria-describedby="User" placeholder="User Password Confirm">

                            <br>


                            <button type="submit" class="btn btn-primary">Save</button>


                        </form>

                    </div>
                </div>
            </div>
        </div>

@endsection
