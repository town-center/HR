@extends('layouts.master')

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




    <div class="col-xl-12" style="margin: 10px">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">انشاء طلب اكسترا</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="/advanced" method="post">
                    @csrf
                    <fieldset  class="border p-2">
                        <legend class="w-auto px-2">المعلومات الشخصية </legend>
                        <label for="type_id">اختر نوع الطلب</label>
                        <select class="form-control" aria-label="Default select example" name="type_id"
                                id="type_id" required>
                            <option selected>اختر نوع الطلب</option>
                            @foreach($formTypes as $formType)
                                <option value="{{$formType->id}}">{{$formType->name}}</option>
                            @endforeach

                        </select>

                        <br>
                        <div style="display: flex">

                            <div class="form-group" style="width:10%">
                                <label for="full_name">الاسم الثلاثي</label>
                                <input type="text" class="form-control" id="full_name"
                                       name="full_name"
                                       aria-describedby="full name" placeholder="name">
                            </div>

                            &nbsp; &nbsp;

                            <div class="form-group" style="width:10%">
                                <label for="mother_name">اسم الام</label>
                                <input type="text" class="form-control" id="mother_name"
                                       name="mother_name"
                                       aria-describedby="mother name" placeholder="mother name">
                            </div>


                        </div>



                        <div class="form-group" style="width:10%">
                            <label for="birth_place">مكان الولادة</label>
                            <input type="text" class="form-control" id="birth_place"
                                   name="birth_place"
                                   aria-describedby="birth place" placeholder="birth place">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="birth_date">تاريخ الولادة</label>
                            <input type="date" class="form-control" id="birth_date" name="birth_date"
                                   aria-describedby="birth date" placeholder="Enter birth date">

                        </div>
                        <br>

                        <div class="form-group">
                            <label for="current_address">عنوان السكن الحالي</label>
                            <input type="text" class="form-control" id="current_address"
                                   name="current_address"
                                   aria-describedby="current address" placeholder="current address">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="family_situation">الوضع العائلي</label>
                            <select class="form-control" id="family_situation" name="family_situation" >
                                <option value="">اختر الوضع العائلي</option>
                                <option value="married">متزوج</option>
                                <option value="single">عازب</option>
                                <option value="divorced">مطلق</option>
                                <option value="widower">ارمل</option>
                            </select>
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="military_status">وضع التجنيد</label>
                            <select class="form-control" id="military_status" name="military_status" >
                                <option value="">اختر وضع التجنيد</option>
                                <option value="completed">مكتمل</option>
                                <option value="notCompleted">غير مكتمل</option>
                                <option value="exempt">معفى</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="telephone">الهاتف الارضي</label>
                            <input type="tel" class="form-control" id="telephone"
                                   name="telephone"
                                   aria-describedby="telephone" placeholder="09xxxxxxxx" pattern="^09[0-9]{8}$"
                            >
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="mobile_phone">رقم الموبايل</label>
                            <input type="tel" class="form-control" id="mobile_phone"
                                   name="mobile_phone"
                                   aria-describedby="Mobile phone" placeholder="09xxxxxxxx"
                                   pattern="^09[0-9]{8}$">
                        </div>


                    </fieldset>
                    <br><br>


                    <fieldset  class="border p-2">
                        <legend class="w-auto px-2">الكفيل في المجمع </legend>
                        <label for="type_id">الاسم</label>
                        <select class="form-control" aria-label="Default select example" name="type_id"
                                id="type_id" required>
                            <option selected>اختر المستخدم</option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach

                        </select>
                        <label for="dept_user_selected">القسم</label>
                        <input type="tel" class="form-control" id="dept_user_selected" value="">
                        <br>
                        <label for="mobile_user_selected">رقم الموبايل</label>
                        <input type="tel" class="form-control" id="mobile_user_selected" value="" >
                        <br>
                        <label for="email_user_selected">الايميل</label>
                        <input type="tel" class="form-control" id="email_user_selected" value="" >

                        <br>

                    </fieldset>
                    <br><br>


                    <fieldset  class="form-group border p-3">
                        <legend class="w-auto px-2" >الوظائف السابقة </legend>


                        <div class="form-group">
                            <label for="company_name">اسم الشركة</label>
                            <input type="text" class="form-control" id="company_name"
                                   name="company_name"
                                   aria-describedby="company name" placeholder="company name">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="lPhone">رقم الشركة</label>
                            <input type="tel" class="form-control" id="lPhone"
                                   name="lPhone"
                                   aria-describedby="Company phone" placeholder="09xxxxxxxx"
                                   pattern="^09[0-9]{8}$">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="lJob">نوع العمل</label>
                            <input type="text" class="form-control" id="lJob"
                                   name="lJob"
                                   aria-describedby="last job" placeholder="last job">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="place">المكان</label>
                            <input type="text" class="form-control" id="place"
                                   name="place"
                                   aria-describedby="place" placeholder="company place">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="start_date">تاريخ المباشرة</label>
                            <input type="date" class="form-control" id="start_date"
                                   name="start_date"
                                   aria-describedby="start date" placeholder="start date">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="end_date">تاريخ ترك العمل</label>
                            <input type="date" class="form-control" id="end_date"
                                   name="end_date"
                                   aria-describedby="end date" placeholder="end date">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="reason_leaving">سبب ترك العمل</label>
                            <input type="text" class="form-control" id="reason_leaving"
                                   name="reason_leaving"
                                   aria-describedby="reason leaving" placeholder="reason leaving">
                        </div>
                        <br>

                    </fieldset>
                    <br><br>

                    <fieldset  class="form-group border p-3" >
                        <legend class="w-auto px-2" >قسم خاص بالادارة </legend>


                        <div class="form-group" style="width:10%">
                            <label for="full_name">يرجى الموافقة على تعيين السيدة</label>
                            <input type="text" class="form-control" id="full_name"
                                   name="full_name"
                                   aria-describedby="full name" placeholder="name">
                        </div>

                           <br><br>

                        <label for="dept_id">في قسم</label>
                        <select class="form-control" aria-label="Default select example" name="dept_id" style="width:10%"
                                id="dept_id" required>
                            <option selected>اختر القسم</option>
                            @foreach($departments as $dept)
                                <option value="{{$dept->id}}">{{$dept->name}}</option>
                            @endforeach

                        </select>
                        <br>

                        <div class="form-group">
                            <label for="job_title">Job title</label>
                            <input type="text" class="form-control" id="job_title"
                                   name="job_title"
                                   aria-describedby="job title" placeholder="Emp">
                        </div>
                        <br>






                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" id="date" name="date"
                                   aria-describedby="date" placeholder="Enter date">

                        </div>
                        <br>




                        <div class="form-group">
                            <label for="hourly_wage">Hourly wage</label>
                            <input type="text" class="form-control" id="hourly_wage"
                                   name="hourly_wage"
                                   aria-describedby="hourly wage" placeholder="hourly wage">
                        </div>
                        <br>

                        <br>
                        <div class="form-group">
                            <label for="count_day_work">Count Day Work</label>
                            <input type="number" class="form-control" id="count_day_work"
                                   name="count_day_work"
                                   aria-describedby="count day work" placeholder="count day work">
                        </div>
                        <br>


                        @can('manager accept')
                            <div class="form-group">
                                <label for="manager_accept">Manager accept</label>
                                <input type="checkbox" id="manager_accept" name="manager_accept" value="true">
                            </div>
                            <br>
                        @endcan



                    </fieldset>
                    <br><br>







                    <div style="width: 200px; margin-right: 40%">
                        <button type="submit" class="btn btn-outline-primary btn-block">Save</button>
                    </div>


                </form>

            </div>
        </div>
    </div>

@endsection

