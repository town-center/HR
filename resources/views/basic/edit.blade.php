@extends('layouts.master')

@section('content')

    @if (session('Update'))

        <div class="row-cols-lg-2">
            <div class="alert alert-success " role="alert">
                <strong>{{ session()->get('Update') }}</strong>
            </div>
        </div>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{$error}}</div>
        @endforeach
    @endif


    <div class="col-xl-12" style="margin: 10px">

        <div class="row-cols-md-6">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0"> edit basic</h4>
                    </div>
                </div>
                    <div class="card-body">

                    <form action="/basic/{{$basic->id}}" method="post">
                            @csrf


                        <select class="form-control" aria-label="Default select example" name="type_id"
                                id="type_id" required>
                            <option >اختر نوع الطلب</option>
                            @foreach($formTypes as $formType)
                                <option value="{{$formType->id}}"
                                     @if($formType->id == $basic->type_id)
                                         selected
                                    @endif

                                > {{$formType->name}}</option>
                            @endforeach

                        </select>
                        <br>

                        <div class="form-group">
                            <label for="duration_vacation">مدة الاجازة</label>
                            <input type="text" class="form-control" id="duration_vacation"
                                   name="duration_vacation" value="{{$basic->duration_vacation}}"
                                   aria-describedby="Basic" placeholder="0">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="start_vacation">بداية الاجازة</label>
                            <input type="date" class="form-control" id="start_vacation" name="start_vacation"
                                   aria-describedby="start vacation" placeholder="Enter start vacation"
                            value="{{$basic->start_vacation}}">

                        </div>
                        <br>

                        <div class="form-group">
                            <label for="end_vacation">End vacation</label>
                            <input type="date" class="form-control" id="end_vacation" name="end_vacation"
                                   aria-describedby="end vacation" placeholder="Enter end vacation"
                                   value="{{$basic->end_vacation}}">

                        </div>
                        <br>

                        <div class="form-group">
                            <label for="notes">Notes</label>
                            <textarea class="form-control" id="notes" name="notes"
                                      aria-describedby="notes" placeholder="notes">{{$basic->notes}}</textarea>


                        </div>
                        <br>


                        <div class="form-group">
                            <label for="start_hour">Start hour</label>
                            <input type="time" class="form-control" name="start_hour" id="start_hour"
                                   value="{{\Carbon\Carbon::parse($basic->start_hour)->format("H:i")}}">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="end_hour">End hour</label>
                            <input type="time" class="form-control" name="end_hour" id="end_hour"
                                   value="{{\Carbon\Carbon::parse($basic->end_hour)->format("H:i")}}">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="request_date">Request date</label>
                            <input type="date" class="form-control" id="request_date" name="request_date"
                                   aria-describedby="request date" placeholder="Enter request date"
                                   value="{{$basic->request_date}}">


                        </div>
                        <br>

                        <div class="form-group">
                            <label for="start_work">Start work</label>
                            <input type="date" class="form-control" id="start_work" name="start_work"
                                   aria-describedby="start work" placeholder="start work"
                                   value="{{$basic->start_work}}">


                        </div>
                        <br>

                        <div class="form-group">
                            <label for="financial_compensation">Financial compensation</label>
                            <input type="number" class="form-control" id="financial_compensation"
                                   name="financial_compensation"
                                   aria-describedby="Financial compensation" placeholder="0"
                                   value="{{$basic->financial_compensation}}">

                        </div>
                        <br>

                        <div class="form-group">
                            <label for="job_title">Job title</label>
                            <input type="text" class="form-control" id="job_title"
                                   name="job_title"
                                   aria-describedby="job title" placeholder="Emp"
                                   value="{{$basic->job_title}}">

                        </div>
                        <br>

                        <div class="form-group">
                            <label for="additional_hours">Additional_hours</label>
                            <input type="number" class="form-control" id="additional_hours"
                                   name="additional_hours"
                                   aria-describedby="additional hours" placeholder="0"
                                   value="{{$basic->additional_hours}}">

                        </div>
                        <br>

                        <div class="form-group">
                            <label for="extra_work_reason">Extra work reason</label>
                            <input type="text" class="form-control" id="extra_work_reason"
                                   name="extra_work_reason"
                                   aria-describedby="extra work reason" placeholder="Ex:"
                                   value="{{$basic->extra_work_reason}}">

                        </div>
                        <br>


                        <div class="form-group">
                            <label for="advance_value">Advance value</label>
                            <input type="number" class="form-control" id="advance_value"
                                   name="advance_value"
                                   aria-describedby="advance value" placeholder="0"
                                   value="{{$basic->advance_value}}">

                        </div>
                        <br>

                        <div class="form-group">
                            <label for="discount_value">Discount value</label>
                            <input type="number" class="form-control" id="discount_value"
                                   name="discount_value"
                                   aria-describedby="discount value" placeholder="0"
                                   value="{{$basic->discount_value}}">

                        </div>
                        <br>


                        <div class="form-group">
                            <label for="entry">Entry</label>
                            <input type="time" class="form-control" name="entry" id="entry"
                                   value="{{\Carbon\Carbon::parse($basic->entry)->format("H:i")}}">


                        </div>
                        <br>


                        <div class="form-group">
                            <label for="exit">Exit</label>
                            <input type="time" class="form-control" name="exit" id="exit"
                                   value="{{\Carbon\Carbon::parse($basic->exit)->format("H:i")}}">


                        </div>
                        <br>


                        <div class="form-group">
                            <label for="vice_chairman_accept">Vice Chairman accept</label>
                            <input type="checkbox" id="vice_chairman_accept" name="vice_chairman_accept" value="true"
                                   @if($basic->vice_chairman_accept==1)
                                   checked
                                @endif
                            >

                        </div>
                        <br>

                        <div class="form-group">
                            <label for="manager_accept">Manager accept</label>
                            <input type="checkbox" id="manager_accept" name="manager_accept" value="true"

                                   @if($basic->manager_accept==1)
                                       checked
                                @endif>



                        </div>
                        <br>


                        <div class="form-group">
                            <label for="security_manager_accept">Security Manager accept</label>
                            <input type="checkbox" id="security_manager_accept" name="security_manager_accept" value="true"
                                   @if($basic->security_manager_accept==1)
                                       checked
                                @endif>

                        </div>
                        <br>
                        <div style="width: 200px; margin-right: 40%">

                            <button type="submit" class="btn btn-outline-primary btn-block">Update</button>

                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
