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
                    <h4 class="card-title mg-b-0">Edit Department</h4>
                </div>
            </div>
                    <div class="card-body">
                        <form action="/department/{{$department->id}}" method="post">
                            @csrf


                            <label for="department_name">Name</label>
                            <input type="text" class="form-control" id="department_name" name="department_name"
                                   aria-describedby="Department" placeholder="Department Name"
                                   value="{{$department->name}}">

                            <br>

                            <div style="width: 200px; margin-right: 40%">

                                <button class="btn btn-outline-primary btn-block">Update</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>


@endsection

