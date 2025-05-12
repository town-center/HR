@extends('layouts.master')

@section('content')

    @if (session('Add'))
        <div class="alert alert-success " role="alert">
            <strong>{{ session()->get('Add') }}</strong>
        </div>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div style="color: red">{{$error}}</div>
        @endforeach
    @endif



    <div class="col-xl-12" style="margin: 10px">

        <div class="row-cols-md-6">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0"> Create basic</h4>
                    </div>
                </div>
                    <div class="card-body">
                        <form action="/basic" method="post">
                            @csrf

                            <select class="form-control" aria-label="Default select example" name="type_id"
                                    id="type_id" required>
                                <option selected>اختر نوع الطلب</option>
                                @foreach($formTypes as $formType)
                                    <option value="{{$formType->id}}">{{$formType->name}}</option>
                                @endforeach

                            </select>

                            <br>

                            <div class="form-group">
                                <label for="duration_vacation">مدة الاجازة</label>
                                <input type="text" class="form-control" id="duration_vacation"
                                       name="duration_vacation"
                                       aria-describedby="Basic" placeholder="0">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="start_vacation">بداية الاجازة</label>
                                <input type="date" class="form-control" id="start_vacation" name="start_vacation"
                                       aria-describedby="start vacation" placeholder="Enter start vacation">

                            </div>
                            <br>

                            <div class="form-group">
                                <label for="end_vacation">End vacation</label>
                                <input type="date" class="form-control" id="end_vacation" name="end_vacation"
                                       aria-describedby="end vacation" placeholder="Enter end vacation">

                            </div>
                            <br>

                            <div class="form-group">
                                <label for="notes">Notes</label>
                                <textarea class="form-control" id="notes" name="notes"
                                          aria-describedby="notes" placeholder="notes"></textarea>

                            </div>
                            <br>


                            <div class="form-group">
                                <label for="start_hour">Start hour</label>
                                <input type="time" class="form-control" name="start_hour" id="start_hour">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="end_hour">End hour</label>
                                <input type="time" class="form-control" name="end_hour" id="end_hour">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="request_date">Request date</label>
                                <input type="date" class="form-control" id="request_date" name="request_date"
                                       aria-describedby="request date" placeholder="Enter request date">

                            </div>
                            <br>

                            <div class="form-group">
                                <label for="start_work">Start work</label>
                                <input type="date" class="form-control" id="start_work" name="start_work"
                                       aria-describedby="start work" placeholder="start work">

                            </div>
                            <br>

                            <div class="form-group">
                                <label for="financial_compensation">Financial compensation</label>
                                <input type="number" class="form-control" id="financial_compensation"
                                       name="financial_compensation"
                                       aria-describedby="Financial compensation" placeholder="0">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="job_title">Job title</label>
                                <input type="text" class="form-control" id="job_title"
                                       name="job_title"
                                       aria-describedby="job title" placeholder="Emp">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="additional_hours">Additional_hours</label>
                                <input type="number" class="form-control" id="additional_hours"
                                       name="additional_hours"
                                       aria-describedby="additional hours" placeholder="0">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="extra_work_reason">Extra work reason</label>
                                <input type="text" class="form-control" id="extra_work_reason"
                                       name="extra_work_reason"
                                       aria-describedby="extra work reason" placeholder="Ex:">
                            </div>
                            <br>


                            <div class="form-group">
                                <label for="advance_value">Advance value</label>
                                <input type="number" class="form-control" id="advance_value"
                                       name="advance_value"
                                       aria-describedby="advance value" placeholder="0">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="discount_value">Discount value</label>
                                <input type="number" class="form-control" id="discount_value"
                                       name="discount_value"
                                       aria-describedby="discount value" placeholder="0">
                            </div>
                            <br>


                            <div class="form-group">
                                <label for="entry">Entry</label>
                                <input type="time" class="form-control" name="entry" id="entry">
                            </div>
                            <br>


                            <div class="form-group">
                                <label for="exit">Exit</label>
                                <input type="time" class="form-control" name="exit" id="exit">
                            </div>
                            <br>


                            <div class="form-group">
                                <label for="vice_chairman_accept">Vice Chairman accept</label>
                                <input type="checkbox" id="vice_chairman_accept" name="vice_chairman_accept" value="true">

                            </div>
                            <br>

                            <div class="form-group">
                                <label for="manager_accept">Manager accept</label>
                                <input type="checkbox" id="manager_accept" name="manager_accept"

                                       value="true">



                            </div>
                            <br>


                            <div class="form-group">
                                <label for="security_manager_accept">Security Manager accept</label>
                                <input type="checkbox" id="security_manager_accept" name="security_manager_accept"
                                       value="true">

                            </div>
                            <br>
                            <div style="width: 200px; margin-right: 40%">
                                <button type="submit" class="btn btn-outline-primary btn-block">Save</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
@endsection
