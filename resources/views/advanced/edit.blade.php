@extends('layouts.app')

@section('content')
    edit department
    @if (session('Update'))

        <div class="row-cols-lg-2">
            <div class="alert alert-success " role="alert">
                <strong>{{ session()->get('Update') }}</strong>
            </div>
        </div>
    @endif
edit advanced

<div class="container">
        <div class="row justify-content-center">
            <div class="row-cols-md-6">
                <div class="card">
                    <div class="card-body">
                    <form action="/advanced/{{$advanced->id}}" method="post">
                            @csrf


                            <label for="basic_name">Name</label>
                            <input type="text" class="form-control" id="advanced_name" name="advanced_name"
                                   aria-describedby="advanced" placeholder="advanced Name"
                                   value="{{$advanced->name}}">

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

