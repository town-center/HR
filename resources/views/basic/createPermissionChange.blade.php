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
                        <h4 class="card-title mg-b-0">اذن تبديل</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/basic" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="duration_vacation">مقدم الطلب</label>
                            <input type="text" class="form-control"
                                   aria-describedby="Basic" placeholder="0" readonly="readonly" value="{{Auth::user()->name}}">
                        </div>

                        <div class="form-group">
                            <label for="duration_vacation">القسم</label>
                            <input type="text" class="form-control"
                                   aria-describedby="Basic" placeholder="0" readonly="readonly" value="{{Auth::user()->department->name}}">
                        </div>

                        <select class="form-control" aria-label="Default select example" name="type_id"
                                id="type_id" required>
                            <option selected>اختر نوع الطلب</option>
                            @foreach($formTypes as $formType)
                                <option value="{{$formType->id}}">{{$formType->name}}</option>
                            @endforeach

                        </select>

                        <br>



                        <div class="form-group">
                            <label for="start_vacation">تبديل يوم العطلة من تاريخ</label>
                            <input type="date" class="form-control" id="start_vacation" name="start_vacation"
                                   aria-describedby="start vacation" placeholder="Enter start vacation">

                        </div>
                        <br>

                        <div class="form-group">
                            <label for="end_vacation">الى تاريخ</label>
                            <input type="date" class="form-control" id="end_vacation" name="end_vacation"
                                   aria-describedby="end vacation" placeholder="Enter end vacation">

                        </div>
                        <br>


                        <div class="form-group">
                            <label for="manager_accept">Manager accept</label>
                            <input type="checkbox" id="manager_accept" name="manager_accept"

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
