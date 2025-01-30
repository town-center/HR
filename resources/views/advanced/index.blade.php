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

    @if (session('Accepted'))
        <div class="alert alert-success " role="alert">
            <strong>{{ session()->get('Accepted') }}</strong>
        </div>
    @endif
    index advanced

    <div class="container">
        <div class="row justify-content-center">
            <div class="row-cols-xxl-auto">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">#</th>
                                <th class="border-bottom-0">type id</th>
                                <th class="border-bottom-0">full name</th>
                                <th class="border-bottom-0">mother name</th>
                                <th class="border-bottom-0">birth place</th>
                                <th class="border-bottom-0">birth date</th>
                                <th class="border-bottom-0">current address</th>
                                <th class="border-bottom-0">family situation</th>
                                <th class="border-bottom-0">telephone</th>
                                <th class="border-bottom-0">mobile phone</th>
                                <th class="border-bottom-0">military status</th>
                                <th class="border-bottom-0">date</th>
                                <th class="border-bottom-0">department id</th>
                                <th class="border-bottom-0">job title</th>
                                <th class="border-bottom-0">hourly wage</th>
                                <th class="border-bottom-0">count day work</th>
                                <th class="border-bottom-0">year</th>
                                <th class="border-bottom-0">start training</th>
                                <th class="border-bottom-0">end training</th>
                                <th class="border-bottom-0">start day</th>
                                <th class="border-bottom-0">count daily_work</th>
                                <th class="border-bottom-0">salary</th>
                                <th class="border-bottom-0">notes</th>
                                <th class="border-bottom-0">recommendation</th>
                                <th class="border-bottom-0">user name</th>
                                <th class="border-bottom-0">step</th>
                                <th class="border-bottom-0">Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0;?>
                            @foreach($advanceds as $advanced)
                                <?php $i++; ?>
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$advanced->formTypes->name}}</td>
                                    <td>{{$advanced->full_name}}</td>
                                    <td>{{$advanced->mother_name}}</td>
                                    <td>{{$advanced->birth_place}}</td>
                                    <td>{{$advanced->birth_date}}</td>
                                    <td>{{$advanced->current_address}}</td>
                                    <td>{{$advanced->family_situation}}</td>
                                    <td>{{$advanced->telephone}}</td>
                                    <td>{{$advanced->mobile_phone}}</td>
                                    <td>{{$advanced->military_status}}</td>
                                    <td>{{$advanced->date}}</td>
                                    <td>{{$advanced->users->department->name}}</td>
                                    <td>{{$advanced->job_title}}</td>
                                    <td>{{$advanced->hourly_wage}}</td>
                                    <td>{{$advanced->count_day_work}}</td>
                                    <td>{{$advanced->year}}</td>
                                    <td>{{$advanced->start_training}}</td>
                                    <td>{{$advanced->end_training}}</td>
                                    <td>{{$advanced->start_day}}</td>
                                    <td>{{$advanced->count_daily_work}}</td>
                                    <td>{{$advanced->salary}}</td>
                                    <td>{{$advanced->notes}}</td>
                                    <td>{{$advanced->recommendation}}</td>
                                    <td>{{$advanced->users->name}}</td>
                                    <td>{{$advanced->step}}</td>
                                    <td colspan="2"  style="display: flex;">
                                        <span class="text-muted">
                                            <a href="advanced/{{$advanced->id}}" target="_blank">
                                                <button type="button" class="btn btn-outline-primary btn-sm">Show</button>
                                            </a>
                                        </span>

                                        <span class="badge badge-primary badge-pill">
                                            <a href="advanced/{{$advanced->id}}/edit" target="_blank">
                                                <button type="button" class="btn btn-outline-warning btn-sm">Edit</button>
                                            </a>
                                        </span>

                                        <span class="badge badge-primary badge-pill">
                                            <a href="advanced/{{$advanced->id}}/delete" target="_blank">
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
