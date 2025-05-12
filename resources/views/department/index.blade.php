@extends('layouts.master')

@section('content')


    @if (session('Add'))
        <div class="alert alert-success " role="alert">
            <strong>{{ session()->get('Add') }}</strong>
        </div>
    @endif

    @if (session('delete'))
        <div class="alert alert-warning " role="alert">
            <strong>{{ session()->get('delete') }}</strong>
        </div>
    @endif
    <div class="col-xl-12" style="margin: 10px">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">Index Department</h4>
                </div>
            </div>
                <div class="card-body">
                        <table class="table  ">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">#</th>
                                <th class="border-bottom-0">department name</th>
                                <th class="border-bottom-0">Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0;?>
                            @foreach($departments as $department)
                                <?php $i++; ?>
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$department->name}}</td>

                                    <td colspan="2"  style="display: flex; ">

                                            <a href="department/{{$department->id}}" target="_blank">
                                                <button class="btn btn-outline-primary btn-block">Show</button>
                                            </a>

                                        &nbsp
                                            <a href="department/{{$department->id}}/edit" target="_blank">
                                                <button class="btn btn-outline-warning btn-block">Edit</button>
                                            </a>

                                        &nbsp

                                            <a href="department/{{$department->id}}/delete" target="_blank">
                                                <button class="btn btn-outline-danger btn-block">Delete</button>
                                            </a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


@endsection
