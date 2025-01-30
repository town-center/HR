@extends('layouts.app')

@section('content')

    @if (session('Update'))

        <div class="row-cols-lg-2">
            <div class="alert alert-success " role="alert">
                <strong>{{ session()->get('Update') }}</strong>
            </div>
        </div>
    @endif
    <div class="container">
        edit department
        <div class="row justify-content-center">
            <div class="row-cols-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="/department/{{$department->id}}" method="post">
                            @csrf


                            <label for="department_name">Name</label>
                            <input type="text" class="form-control" id="department_name" name="department_name"
                                   aria-describedby="Department" placeholder="Department Name"
                                   value="{{$department->name}}">

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

