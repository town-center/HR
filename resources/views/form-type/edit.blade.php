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
                    <h4 class="card-title mg-b-0">Edit Form Type</h4>
                </div>
            </div>
                    <div class="card-body">
                    <form action="/form-type/{{$formType->id}}" method="post">
                            @csrf


                            <label for="formType_name">Name</label>
                            <input type="text" class="form-control" id="formType_name" name="formType_name"
                                   aria-describedby="From Type" placeholder="Fom Type Name"
                                   value="{{$formType->name}}">

                            <br>


                        <div style="width: 200px; margin-right: 40%">

                            <button class="btn btn-outline-primary btn-block">Update</button>

                        </div>


                        </form>
                    </div>
                </div>
            </div>


@endsection

