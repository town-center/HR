@extends('layouts.app')

@section('content')

    @if (session('Add'))
        <div class="alert alert-success " role="alert">
            <strong>{{ session()->get('Add') }}</strong>
        </div>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{$error}}</div>
        @endforeach
    @endif

create advanced


    <div class="container">
        <div class="row justify-content-center">
            <div class="row-cols-md-6">
                <div class="card">
                    <div class="card-body">
                    <form action="/advanced" method="post">
                            @csrf

                        <select class="form-select" aria-label="Default select example" name="type_id"
                                id="type_id" required>
                            <option selected>اختر نوع الطلب</option>
                            @foreach($formTypes as $formType)
                                <option value="{{$formType->id}}">{{$formType->name}}</option>
                            @endforeach

                        </select>
                        <br>

                        <div class="form-group">
                            <label for="full_name)">Full name</label>
                            <input type="text" class="form-control" id="full_name"
                                   name="full_name"
                                   aria-describedby="full name" placeholder="name">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="mother_name)">Mother name</label>
                            <input type="text" class="form-control" id="mother_name"
                                   name="mother_name"
                                   aria-describedby="mother name" placeholder="mother name">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="birth_place)">Birth place</label>
                            <input type="text" class="form-control" id="birth_place"
                                   name="birth_place"
                                   aria-describedby="birth place" placeholder="birth place">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="birth_date">Birth date</label>
                            <input type="date" class="form-control" id="birth_date" name="birth_date"
                                   aria-describedby="birth date" placeholder="Enter birth date">

                        </div>
                        <br>

                        <div class="form-group">
                            <label for="current_address)">Birth place</label>
                            <input type="text" class="form-control" id="current_address"
                                   name="current_address"
                                   aria-describedby="current address" placeholder="current address">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="family_situation">Family Situation</label>
                            <select class="form-select" id="family_situation" name="family_situation" >
                                <option value="">اختر الوضع العائلي</option>
                                <option value="married">married</option>
                                <option value="single">single</option>
                                <option value="divorced">divorces</option>
                                <option value="widower">widower</option>
                            </select>
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="military_status">Military Situation</label>
                            <select class="form-select" id="military_status" name="military_status" >
                                <option value="">اختر وضع التجنيد</option>
                                <option value="completed">completed</option>
                                <option value="notCompleted">notCompleted</option>
                                <option value="exempt">exempt</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="telephone)">Telephone</label>
                            <input type="tel" class="form-control" id="telephone"
                                   name="telephone"
                                   aria-describedby="telephone" placeholder="09xxxxxxxx" pattern="^09[0-9]{8}$"
                            >
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="mobile_phone)">Mobile phone</label>
                            <input type="tel" class="form-control" id="mobile_phone"
                                   name="mobile_phone"
                                   aria-describedby="Mobile phone" placeholder="09xxxxxxxx"
                                   pattern="^09[0-9]{8}$"
                            >
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" id="date" name="date"
                                   aria-describedby="date" placeholder="Enter date">

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
                            <label for="hourly_wage">Hourly wage</label>
                            <input type="text" class="form-control" id="hourly_wage"
                                   name="hourly_wage"
                                   aria-describedby="hourly wage" placeholder="hourly wage">
                        </div>
                        <br>

                        <div class="form-group">
                        <label for="year">Year</label>
                        <input type="number" class="form-control" id="year"
                               name="year"
                               aria-describedby="year" placeholder="year">
                    </div>
                    <br>
                        <div class="form-group">
                            <label for="start_training">Start training</label>
                            <input type="date" class="form-control" id="start_training"
                                   name="start_training"
                                   aria-describedby="start training" placeholder="start training">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="end_training">End training</label>
                            <input type="date" class="form-control" id="end_training"
                                   name="end_training"
                                   aria-describedby="end training" placeholder="end training">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="start_day">Start day</label>
                            <input type="date" class="form-control" id="start_day"
                                   name="start_day"
                                   aria-describedby="start day" placeholder="start day">
                        </div>
                        <br>


                        <div class="form-group">
                            <label for="count_daily_work">Count Daily Work</label>
                            <input type="number" class="form-control" id="count_daily_work"
                                   name="count_daily_work"
                                   aria-describedby="count daily work" placeholder="count daily work">
                        </div>

                        <br>
                        <div class="form-group">
                            <label for="count_day_work">Count Day Work</label>
                            <input type="number" class="form-control" id="count_day_work"
                                   name="count_day_work"
                                   aria-describedby="count day work" placeholder="count day work">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="salary">Salary</label>
                            <input type="number" class="form-control" id="salary"
                                   name="salary"
                                   aria-describedby="salary" placeholder="salary">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="notes">Notes</label>
                            <input type="text" class="form-control" id="notes"
                                   name="notes"
                                   aria-describedby="notes" placeholder="notes">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="recommendation">Recommendation</label>
                            <input type="text" class="form-control" id="recommendation"
                                   name="recommendation"
                                   aria-describedby="recommendation" placeholder="recommendation">
                        </div>
                        <br>


                            <div class="form-group">
                                <label for="fname">Name of a family member</label>
                                <input type="text" class="form-control" id="fname"
                                       name="fname"
                                       aria-describedby="Name of a family member" placeholder="Name of a family member">
                            </div>
                            <br>

                        <div class="form-group">
                            <label for="kinship">Kinship</label>
                            <input type="text" class="form-control" id="kinship"
                                   name="kinship"
                                   aria-describedby="kinship" placeholder="kinship">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="fphone">Phone of a family member</label>
                            <input type="tel" class="form-control" id="fphone"
                                   name="fphone"
                                   aria-describedby="fphone" placeholder="09xxxxxxxx"
                                   pattern="^09[0-9]{8}$">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="fJob">Job of a family member</label>
                            <input type="text" class="form-control" id="fJob"
                                   name="fJob"
                                   aria-describedby="fJob" placeholder="Job of a family member">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="academic_qualification">Academic Qualification</label>
                            <input type="text" class="form-control" id="academic_qualification"
                                   name="academic_qualification"
                                   aria-describedby="academic qualification" placeholder="academic qualification">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="specialization">Specialization</label>
                            <input type="text" class="form-control" id="specialization"
                                   name="specialization"
                                   aria-describedby="specialization" placeholder="specialization">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="palce_specialization">Palce specialization</label>
                            <input type="text" class="form-control" id="palce_specialization"
                                   name="palce_specialization"
                                   aria-describedby="palce specialization" placeholder="palce specialization">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="company_name">Company name</label>
                            <input type="text" class="form-control" id="company_name"
                                   name="company_name"
                                   aria-describedby="company name" placeholder="company name">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="lPhone">Company phone</label>
                            <input type="tel" class="form-control" id="lPhone"
                                   name="lPhone"
                                   aria-describedby="Company phone" placeholder="09xxxxxxxx"
                                   pattern="^09[0-9]{8}$">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="lJob">Last job</label>
                            <input type="text" class="form-control" id="lJob"
                                   name="lJob"
                                   aria-describedby="last job" placeholder="last job">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="place">Company place</label>
                            <input type="text" class="form-control" id="place"
                                   name="place"
                                   aria-describedby="place" placeholder="company place">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="start_date">Start date</label>
                            <input type="date" class="form-control" id="start_date"
                                   name="start_date"
                                   aria-describedby="start date" placeholder="start date">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="end_date">End date</label>
                            <input type="date" class="form-control" id="end_date"
                                   name="end_date"
                                   aria-describedby="end date" placeholder="end date">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="reason_leaving">Reason leaving</label>
                            <input type="text" class="form-control" id="reason_leaving"
                                   name="reason_leaving"
                                   aria-describedby="reason leaving" placeholder="reason leaving">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="name">Name of relative</label>
                            <input type="text" class="form-control" id="name"
                                   name="name"
                                   aria-describedby="name" placeholder="Name of relative">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="rPhone">Phone of relative</label>
                            <input type="tel" class="form-control" id="rPhone"
                                   name="rPhone"
                                   aria-describedby="phone of relative" placeholder="09xxxxxxxx"
                                   pattern="^09[0-9]{8}$">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="relationship">relationship</label>
                            <input type="text" class="form-control" id="relationship"
                                   name="relationship"
                                   aria-describedby="relationship" placeholder="relationship">
                        </div>
                        <br>

                        <select class="form-select" aria-label="Default select example" name="rUserId"
                                id="rUserId" required>
                            <option selected>اختر المستخدم</option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        <br>

                        <div class="form-group">
                            <label for="signature">Signature</label>
                            <input type="checkbox" id="signature" name="signature" value="true">

                        </div>
                        <br>

                        <div class="form-group">
                            <label for="recoPhone">Recommendation Phone</label>
                            <input type="tel" class="form-control" id="recoPhone"
                                   name="recoPhone"
                                   aria-describedby="phone of relative" placeholder="09xxxxxxxx"
                                   pattern="^09[0-9]{8}$">
                        </div>
                        <br>

                        <select class="form-select" aria-label="Default select example" name="recoUserId"
                                id="recoUserId" required>
                            <option selected>اختر المستخدم</option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        <br>


                            <button type="submit" class="btn btn-primary">Save</button>


                        </form>

                    </div>
                </div>
            </div>
        </div>
@endsection

