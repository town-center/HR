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
    index basic

    <div class="container">
        <div class="row justify-content-center">
            <div class="row-cols-md-auto">
                <div class="card">
                    <div class="card-body">
                        <table class="table  ">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">#</th>
                                <th class="border-bottom-0">Form type</th>
                                <th class="border-bottom-0">Duration vacation</th>
                                <th class="border-bottom-0">Start_vacation</th>
                                <th class="border-bottom-0">end_vacation</th>
                                <th class="border-bottom-0">notes</th>
                                <th class="border-bottom-0">start_hour</th>
                                <th class="border-bottom-0">end_hour</th>
                                <th class="border-bottom-0">request_date</th>
                                <th class="border-bottom-0">start_work</th>
                                <th class="border-bottom-0">financial_compensation</th>
                                <th class="border-bottom-0">job_title</th>
                                <th class="border-bottom-0">additional_hours</th>
                                <th class="border-bottom-0">extra_work_reason</th>
                                <th class="border-bottom-0">advance_value</th>
                                <th class="border-bottom-0">discount_value</th>
                                <th class="border-bottom-0">entry</th>
                                <th class="border-bottom-0">exit</th>
                                <th class="border-bottom-0">manager_accept</th>
                                <th class="border-bottom-0">security_manager_accept</th>
                                <th class="border-bottom-0">vice_chairman_accept</th>
                                <th class="border-bottom-0">step</th>
                                <th class="border-bottom-0">Actions</th>



                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0;?>
                            @foreach($basics as $basic)
                                <?php $i++; ?>
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$basic->formTypes->name}}</td>
                                    <td>{{$basic->duration_vacation}}</td>
                                    <td>{{$basic->start_vacation}}</td>
                                    <td>{{$basic->end_vacation}}</td>
                                    <td>{{$basic->notes}}</td>
                                    <td>{{$basic->start_hour}}</td>
                                    <td>{{$basic->end_hour}}</td>
                                    <td>{{$basic->request_date}}</td>
                                    <td>{{$basic->start_work}}</td>
                                    <td>{{$basic->financial_compensation}}</td>
                                    <td>{{$basic->job_title}}</td>
                                    <td>{{$basic->additional_hours}}</td>
                                    <td>{{$basic->extra_work_reason}}</td>
                                    <td>{{$basic->advance_value}}</td>
                                    <td>{{$basic->discount_value}}</td>
                                    <td>{{$basic->entry}}</td>
                                    <td>{{$basic->exit}}</td>
                                    <td>{{$basic->vice_chairman_accept}}</td>
                                    <td>{{$basic->manager_accept}}</td>
                                    <td>{{$basic->security_manager_accept}}</td>
                                    <td>{{$basic->step}}</td>
                                    <td colspan="2"  style="display: flex;">
                                        <span class="text-muted">
                                            <a href="advanced/{{$basic->id}}" target="_blank">
                                                <button type="button" class="btn btn-outline-primary btn-sm">Show</button>
                                            </a>
                                        </span>

                                        <span class="badge badge-primary badge-pill">
                                            <a href="advanced/{{$basic->id}}/edit" target="_blank">
                                                <button type="button" class="btn btn-outline-warning btn-sm">Edit</button>
                                            </a>
                                        </span>

                                        <span class="badge badge-primary badge-pill">
                                            <a href="advanced/{{$basic->id}}/delete" target="_blank">
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

