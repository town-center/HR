@extends('layouts.master')

@section('content')

    @if (session('Update'))

        <div class="row-cols-lg-2">
            <div class="alert alert-success " role="alert">
                <strong>{{ session()->get('Update') }}</strong>
            </div>
        </div>
    @endif

    <div class="col-xl-12" style="margin: 10px">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">Edit User</h4>
                </div>
            </div>
                    <div class="card-body">
                        <form action="/user/{{$user->id}}" method="post">
                            @csrf


                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                   aria-describedby="User" placeholder="UserName"
                                   value="{{ $user->name }}">

                            <br>


                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="User Email" value="{{ $user->email }}">

                            <br>

                            <div class="form-group">
                                <label class="form-label" for="department"> User Department </label>

                                <select class="form-select" aria-label="Default select example" name="department"
                                        id="department">

                                    <option selected>Open this select menu</option>
                                    @foreach($departments as $department)
                                        <option
                                                @if($department->id == $user->department_id)
                                                    selected
                                            @endif


                                            value="{{$department->id}}">{{$department->name}}</option>
                                    @endforeach

                                </select>

                            </div>

                            <br>

                            <div class="form-group">
                                @foreach($roles as $role)
                                    <label class="form-label" for="roles_name"> {{$role->name}} </label>
                                    <input type="checkbox" id="roles_name" name="roles_name[]"
                                           @foreach($user->getRoleNames() as $v)
                                               @if($role->name == $v)
                                                   checked @endif
                                           @endforeach
                                           value="{{$role->name}}">

                                @endforeach


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

                            <div style="width: 200px; margin-right: 40%">

                            <button class="btn btn-outline-primary btn-block">Update</button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>

@endsection

