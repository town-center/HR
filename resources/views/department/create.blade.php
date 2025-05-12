@extends('layouts.master')

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


    <div class="col-xl-12" style="margin: 10px">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">Create Department</h4>
                </div>
            </div>
                    <div class="card-body">
                        <form action="/department" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="department_name">Name</label>
                                <input type="text" class="form-control" id="department_name" name="department_name"
                                       aria-describedby="Department" placeholder="Department Name">
                            </div><br>
                            <div style="width: 200px; margin-right: 40%">
                                <button class="btn btn-outline-primary btn-block">Save</button>
                            </div>


                        </form>

                    </div>
                </div>
            </div>

@endsection
