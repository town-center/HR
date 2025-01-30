@extends('layouts.app')

@section('content')
    edit department
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
    edit advanced

    <div class="container">
        <div class="row justify-content-center">
            <div class="row-cols-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="/advanced/{{$advanced->id}}" method="post">
                            @csrf


                            <select class="form-select" aria-label="Default select example" name="type_id"
                                    id="type_id" required>
                                <option selected>اختر نوع الطلب</option>
                                @foreach($formTypes as $formType)
                                    <option value="{{$formType->id}}"
                                            @if( $formType->id == $advanced->type_id)
                                                selected
                                        @endif

                                    >{{$formType->name}}</option>
                                @endforeach

                            </select>
                            <br>

                            <div class="form-group">
                                <label for="full_name)">Full name</label>
                                <input type="text" class="form-control" id="full_name"
                                       name="full_name" value="{{$advanced->full_name}}"
                                       aria-describedby="full name" placeholder="name"

                                >
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="mother_name)">Mother name</label>
                                <input type="text" class="form-control" id="mother_name"
                                       name="mother_name" value="{{$advanced->mother_name}}"
                                       aria-describedby="mother name" placeholder="mother name"

                                >
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="birth_place)">Birth place</label>
                                <input type="text" class="form-control" id="birth_place"
                                       name="birth_place" value="{{$advanced->birth_place}}"
                                       aria-describedby="birth place" placeholder="birth place">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="family_situation">Family Situation</label>
                                <select class="form-select" id="family_situation" name="family_situation">
                                    <option value="">اختر الوضع العائلي</option>
                                    <option value="married" {{ $advanced->family_situation == 'married' ? 'selected' : '' }}>married</option>
                                    <option value="single" {{ $advanced->family_situation == 'single' ? 'selected' : '' }}>single</option>
                                    <option value="divorced" {{ $advanced->family_situation == 'divorced' ? 'selected' : '' }}>divorced</option>
                                    <option value="widower" {{ $advanced->family_situation == 'widower' ? 'selected' : '' }}>widower</option>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="military_status">Military Situation</label>
                                <select class="form-select" id="military_status" name="military_status">
                                    <option value="">اختر وضع التجنيد</option>
                                    <option value="completed" {{ $advanced->military_status == 'completed' ? 'selected' : '' }}>completed</option>
                                    <option value="notCompleted" {{ $advanced->military_status == 'notCompleted' ? 'selected' : '' }}>notCompleted</option>
                                    <option value="exempt" {{ $advanced->military_status == 'exempt' ? 'selected' : '' }}>exempt</option>
                                </select>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="birth_date">Birth date</label>
                                <input type="date" class="form-control" id="birth_date" name="birth_date"
                                       value="{{$advanced->birth_date}}"
                                       aria-describedby="birth date" placeholder="Enter birth date">

                            </div>
                            <br>

                            <div class="form-group">
                                <label for="telephone)">Telephone</label>
                                <input type="tel" class="form-control" id="telephone"
                                       name="telephone" value="{{$advanced->telephone}}"
                                       aria-describedby="telephone" placeholder="09xxxxxxxx" pattern="^09[0-9]{8}$"
                                >
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="mobile_phone)">Mobile phone</label>
                                <input type="tel" class="form-control" id="mobile_phone"
                                       name="mobile_phone" value="{{$advanced->mobile_phone}}"
                                       aria-describedby="Mobile phone" placeholder="09xxxxxxxx"
                                       pattern="^09[0-9]{8}$"
                                >
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date" name="date"
                                       aria-describedby="date" placeholder="Enter date"
                                value="{{$advanced->date}}">

                            </div>
                            <br>


                            <div class="form-group">
                                <label for="job_title">Job title</label>
                                <input type="text" class="form-control" id="job_title"
                                       name="job_title" value="{{$advanced->job_title}}"
                                       aria-describedby="job title" placeholder="Emp">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="hourly_wage">Hourly wage</label>
                                <input type="text" class="form-control" id="hourly_wage"
                                       name="hourly_wage" value="{{$advanced->hourly_wage}}"
                                       aria-describedby="hourly wage" placeholder="hourly wage">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="year">Year</label>
                                <input type="number" class="form-control" id="year"
                                       name="year" value="{{$advanced->year}}"
                                       aria-describedby="year" placeholder="year">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="start_training">Start training</label>
                                <input type="date" class="form-control" id="start_training"
                                       name="start_training" value="{{$advanced->start_training}}"
                                       aria-describedby="start training" placeholder="start training">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="end_training">End training</label>
                                <input type="date" class="form-control" id="end_training"
                                       name="end_training" value="{{$advanced->end_training}}"
                                       aria-describedby="end training" placeholder="end training">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="start_day">Start day</label>
                                <input type="date" class="form-control" id="start_day"
                                       name="start_day" value="{{$advanced->start_day}}"
                                       aria-describedby="start day" placeholder="start day">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="count_daily_work">Count Daily Work</label>
                                <input type="number" class="form-control" id="count_daily_work"
                                       name="count_day_work" value="{{$advanced->count_daily_work}}"
                                       aria-describedby="count daily work" placeholder="count daily work">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="count_day_work">Count Day Work</label>
                                <input type="number" class="form-control" id="count_day_work"
                                       name="count_day_work" value="{{$advanced->count_day_work}}"
                                       aria-describedby="count day work" placeholder="count day work">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="salary">Salary</label>
                                <input type="number" class="form-control" id="salary"
                                       name="salary" value="{{$advanced->salary}}"
                                       aria-describedby="salary" placeholder="salary">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="notes">Notes</label>
                                <input type="text" class="form-control" id="notes"
                                       name="notes" value="{{$advanced->notes}}"
                                       aria-describedby="notes" placeholder="notes">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="recommendation">Recommendation</label>
                                <input type="text" class="form-control" id="recommendation"
                                       name="recommendation" value="{{$advanced->recommendation}}"
                                       aria-describedby="recommendation" placeholder="recommendation">
                            </div>
                            <br>


                            <div class="form-group">
                                <label for="fname">Name of a family member</label>
                                <input type="text" class="form-control" id="fname"
                                       name="fname" value="{{$familyInformation->name}}"
                                       aria-describedby="Name of a family member" placeholder="Name of a family member">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="kinship">Kinship</label>
                                <input type="text" class="form-control" id="kinship"
                                       name="kinship" value="{{$familyInformation->kinship}}"
                                       aria-describedby="kinship" placeholder="kinship">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="fphone">Phone of a family member</label>
                                <input type="tel" class="form-control" id="fphone"
                                       name="fphone" value="{{$familyInformation->phone}}"
                                       aria-describedby="fphone" placeholder="09xxxxxxxx"
                                       pattern="^09[0-9]{8}$">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="fJob">Job of a family member</label>
                                <input type="text" class="form-control" id="fJob"
                                       name="fJob" value="{{$familyInformation->job}}"
                                       aria-describedby="fJob" placeholder="Job of a family member">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="academic_qualification">Academic Qualification</label>
                                <input type="text" class="form-control" id="academic_qualification"
                                       name="academic_qualification" value="{{$experience->academic_qualification}}"
                                       aria-describedby="academic qualification" placeholder="academic qualification">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="specialization">Specialization</label>
                                <input type="text" class="form-control" id="specialization"
                                       name="specialization" value="{{$experience->specialization}}"
                                       aria-describedby="specialization" placeholder="specialization">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="palce_specialization">Palce specialization</label>
                                <input type="text" class="form-control" id="palce_specialization"
                                       name="palce_specialization" value="{{$experience->palce_specialization}}"
                                       aria-describedby="palce specialization" placeholder="palce specialization">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="company_name">Company name</label>
                                <input type="text" class="form-control" id="company_name"
                                       name="company_name" value="{{$lastJob->company_name}}"
                                       aria-describedby="company name" placeholder="company name">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="lPhone">Company phone</label>
                                <input type="tel" class="form-control" id="lPhone"
                                       name="lPhone" value="{{$lastJob->phone}}"
                                       aria-describedby="Company phone" placeholder="09xxxxxxxx"
                                       pattern="^09[0-9]{8}$">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="lJob">Last job</label>
                                <input type="text" class="form-control" id="lJob"
                                       name="lJob" value="{{$lastJob->job}}"
                                       aria-describedby="last job" placeholder="last job">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="place">Company place</label>
                                <input type="text" class="form-control" id="place"
                                       name="place" value="{{$lastJob->place}}"
                                       aria-describedby="place" placeholder="company place">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="start_date">Start date</label>
                                <input type="date" class="form-control" id="start_date"
                                       name="start_date" value="{{$lastJob->start_date}}"
                                       aria-describedby="start date" placeholder="start date">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="end_date">End date</label>
                                <input type="date" class="form-control" id="end_date"
                                       name="end_date" value="{{$lastJob->end_date}}"
                                       aria-describedby="end date" placeholder="end date">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="reason_leaving">Reason leaving</label>
                                <input type="text" class="form-control" id="reason_leaving"
                                       name="reason_leaving" value="{{$lastJob->reason_leaving}}"
                                       aria-describedby="reason leaving" placeholder="reason leaving">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="name">Name of relative</label>
                                <input type="text" class="form-control" id="name"
                                       name="name" value="{{$relative->name}}"
                                       aria-describedby="name" placeholder="Name of relative">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="rPhone">Phone of relative</label>
                                <input type="tel" class="form-control" id="rPhone"
                                       name="rPhone" value="{{$relative->phone}}"
                                       aria-describedby="phone of relative" placeholder="09xxxxxxxx"
                                       pattern="^09[0-9]{8}$">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="relationship">relationship</label>
                                <input type="text" class="form-control" id="relationship"
                                       name="relationship" value="{{$relative->relationship}}"
                                       aria-describedby="relationship" placeholder="relationship">
                            </div>
                            <br>

                            <select class="form-select" aria-label="Default select example" name="rUserId"
                                    id="rUserId" required>
                                <option >اختر المستخدم</option>
                                @foreach($users as $user)
                                    <option value="{{$user->id}}"
                                            @if($user->id == $relative->user_id)
                                                selected
                                        @endif

                                    >{{$user->name}}</option>
                                @endforeach
                            </select>
                            <br>

                            <div class="form-group">
                                <label for="signature">Signature</label>
                                <input type="checkbox" id="signature" name="signature"
                                       @if($recommendation->signature == 1)
                                           checked
                                       @endif
                                       value="true">

                            </div>
                            <br>

                            <div class="form-group">
                                <label for="recoPhone">Recommendation Phone</label>
                                <input type="tel" class="form-control" id="recoPhone"
                                       name="recoPhone" value="{{$recommendation->phone}}"
                                       aria-describedby="phone of relative" placeholder="09xxxxxxxx"
                                       pattern="^09[0-9]{8}$">
                            </div>
                            <br>

                            <select class="form-select" aria-label="Default select example" name="recoUserId"
                                    id="recoUserId" required>
                                <option >اختر المستخدم</option>
                                @foreach($users as $user)
                                    <option value="{{$user->id}}"

                                            @if($user->id == $recommendation->user_id)
                                                selected
                                        @endif

                                    >{{$user->name}}</option>
                                @endforeach
                            </select>
                            <br>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">update</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

