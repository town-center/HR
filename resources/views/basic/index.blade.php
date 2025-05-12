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

    @if (session('Accepted'))
        <div class="alert alert-success " role="alert">
            <strong>{{ session()->get('Accepted') }}</strong>
        </div>
    @endif


    <div class="col-xl-12" style="margin: 10px">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">index basic</h4>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                        <table class="table  ">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">Actions</th>
                                <th class="border-bottom-0">#</th>
                                <th class="border-bottom-0">Form type</th>
                                <th class="border-bottom-0">Duration vacation</th>
                                <th class="border-bottom-0">Start_vacation</th>
                                <th class="border-bottom-0">end_vacation</th>
                                <th class="border-bottom-0">notes</th>
                                <th class="border-bottom-0">start_hour</th>
                                <th class="border-bottom-0">end_hour</th>
                                <th class="border-bottom-0">request_date</th>
                                <th class="border-bottom-0">emp</th>
                                <th class="border-bottom-0">Dept</th>
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




                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0;?>
                            @foreach($basics as $basic)
                                <?php $i++; ?>
                                <tr>
                                    <td   style="display: flex">

                                        <a href="basic/{{$basic->id}}" target="_blank">
                                            <button class="btn btn-primary btn-icon" style=" height: 30px"><i
                                                    class="typcn typcn-folder-open"></i></button>
                                        </a>

                                        &nbsp

                                        <a href="basic/{{$basic->id}}/edit" target="_blank">
                                            <button class="btn btn-warning btn-icon" style=" height: 30px"><i
                                                    class="typcn typcn-edit"></i></button>
                                        </a>

                                        &nbsp


                                        <a href="basic/{{$basic->id}}/delete" target="_blank">
                                            <button class="btn btn-danger btn-icon" style=" height: 30px"><i
                                                    class="typcn typcn-delete"></i></button>
                                        </a>

                                    </td>
                                    <td>{{$i}}</td>
                                    <td>{{$basic->formTypes->name}}</td>
                                    <td>{{$basic->duration_vacation}}</td>
                                    <td>{{$basic->start_vacation}}</td>
                                    <td>{{$basic->end_vacation}}</td>
                                    <td>{{$basic->notes}}</td>
                                    <td>{{$basic->start_hour}}</td>
                                    <td>{{$basic->end_hour}}</td>
                                    <td>{{$basic->request_date}}</td>
                                    <td>{{$basic->employee->name}}</td>
                                    <td>{{$basic->employee->department->name}}</td>
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


                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


@endsection

