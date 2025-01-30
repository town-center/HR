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
    index form type
        <div class="row justify-content-center">
            <div class="row-cols-md-6">
                <div class="card">
                    <div class="card-body">
                        <table class="table  ">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">#</th>
                                <th class="border-bottom-0">Form Type name</th>
                                <th class="border-bottom-0">Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0;?>
                            @foreach($formTypes as $formType)
                                <?php $i++; ?>
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$formType->name}}</td>

                                    <td colspan="2"  style="display: flex;">
                                        <span class="text-muted">
                                            <a href="advanced/{{$formType->id}}" target="_blank">
                                                <button type="button" class="btn btn-outline-primary btn-sm">Show</button>
                                            </a>
                                        </span>

                                        <span class="badge badge-primary badge-pill">
                                            <a href="advanced/{{$formType->id}}/edit" target="_blank">
                                                <button type="button" class="btn btn-outline-warning btn-sm">Edit</button>
                                            </a>
                                        </span>

                                        <span class="badge badge-primary badge-pill">
                                            <a href="advanced/{{$formType->id}}/delete" target="_blank">
                                                <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                                            </a>
                                        </span>
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


