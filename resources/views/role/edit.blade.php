@extends('layouts.app')

@section('content')
    edit role
    @if (session('Update'))

        <div class="row-cols-lg-2">
            <div class="alert alert-success " role="alert">
                <strong>{{ session()->get('Update') }}</strong>
            </div>
        </div>
    @endif
    edit role
    <div class="container">
        <div class="row justify-content-center">
            <div class="row-cols-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="/role/{{$role->id}}" method="post">
                            @csrf


                            <label for="role_name">Name</label>
                            <input type="text" class="form-control" id="role_name" name="role_name"
                                   aria-describedby="Role" placeholder="Role Name"
                                   value="{{$role->name}}">

                            <br>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
