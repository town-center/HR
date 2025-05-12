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
                    <h4 class="card-title mg-b-0">Create form type</h4>
                </div>
            </div>
                    <div class="card-body">
                    <form action="/form-type" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="formType_name">Name</label>
                                <input type="text" class="form-control" id="formType_name" name="formType_name"
                                       aria-describedby="Form type" placeholder="Form type Name">
                            </div><br>
                        <div style="width: 200px; margin-right: 40%">
                            <button class="btn btn-outline-primary btn-block">Save</button>
                        </div>


                        </form>

                    </div>
                </div>
            </div>
@endsection
