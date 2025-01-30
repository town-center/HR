@extends('layouts.app')

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
    <div class="container">
        index department
        <div class="row justify-content-center">
            <div class="row-cols-md-auto">
                <div class="card">
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

                                    <td colspan="2"  style="display: flex;">

                                            <a href="advanced/{{$department->id}}" target="_blank">
                                                <button type="button" class="btn btn-outline-primary btn-sm">Show</button>
                                            </a>


                                            <a href="advanced/{{$department->id}}/edit" target="_blank">
                                                <button type="button" class="btn btn-outline-warning btn-sm">Edit</button>
                                            </a>



                                            <a href="advanced/{{$department->id}}/delete" target="_blank">
                                                <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                                            </a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
