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
                    <h4 class="card-title mg-b-0">انشاء طلب تدريب موسمي</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="/advanced" method="post">
                    @csrf
                    <label for="type_id)">اختر نوع الطلب</label>
                    <select class="form-control" aria-label="Default select example" name="type_id"
                            id="type_id" required>
                        <option selected>اختر نوع الطلب</option>
                        @foreach($formTypes as $formType)
                            <option value="{{$formType->id}}">{{$formType->name}}</option>
                        @endforeach

                    </select>
                    <br>

                    <fieldset  class="border p-2">
                        <legend class="w-auto px-2">المعلومات الشخصية </legend>

                        <div style="display: flex">

                            <div class="form-group" style="width:10%">
                                <label for="full_name">الاسم الثلاثي</label>
                                <input type="text" class="form-control" id="full_name"
                                       name="full_name" onchange="myFunction()"
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
                        <br>

                    </fieldset>

                    <br><br>


                    <fieldset  class="form-group border p-3">
                        <legend class="w-auto px-2" >الأقارب أو المعارف العاملون في المجمع  </legend>
                        <div class="form-group">
                            <label for="name">الاسم</label>

                            <select class="form-control" aria-label="Default select example"  name="name"
                                    id="name" required>
                                <option selected>اختر المستخدم</option>
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach

                            </select>
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="rPhone">رقم الهاتف</label>
                            <input type="tel" class="form-control" id="rPhone"
                                   name="rPhone"
                                   aria-describedby="phone of relative" placeholder="09xxxxxxxx"
                                   pattern="^09[0-9]{8}$">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="relationship">صلة القرابة</label>

                            <select class="form-control" aria-label="Default select example"  name="relationship"
                                    id="relationship" required>
                                <option selected>اب</option>
                                <option >ام</option>
                                <option >اخ</option>
                                <option >اخت</option>
                                <option >عم</option>
                                <option >عمة</option>
                                <option >خال</option>
                                <option >خالة</option>
                            </select>

                        </div>
                        <br>


                    </fieldset>

                    <br><br>

                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date"
                               aria-describedby="date" placeholder="Enter date">

                    </div>
                    <br><br>

                    <fieldset  class="form-group border p-3">
                        <legend class="w-auto px-2" >قسم خاص يعبئ في حال قبول طلب تدريب من مدير القسم </legend>

                        <input type="text" class="form-control" id="test" name="test" readonly >

                        <span>مقابلته الشخصية, فانه لا مانع من العمل</span>

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
                            <label for="year">صيف العام </label>
                            <input type="number" class="form-control" id="year"
                                   name="year"
                                   aria-describedby="year" placeholder="year">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="start_day">وقد باشر التدريب صباح اليوم</label>
                            <input type="date" class="form-control" id="start_day"
                                   name="start_day"
                                   aria-describedby="start day" placeholder="start day">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="count_daily_work">عدد ساعات الدوام اليومية</label>
                            <input type="number" class="form-control" id="count_daily_work"
                                   name="count_daily_work"
                                   aria-describedby="count daily work" placeholder="count daily work">
                        </div>
                        <br>


                        <div class="form-group">
                            <label for="salary">الاجر الشهري مع التعويضات</label>
                            <input type="number" class="form-control" id="salary"
                                   name="salary"
                                   aria-describedby="salary" placeholder="salary">
                        </div>
                        <br>


                        @can('manager accept')
                            <div class="form-group">
                                <label for="manager_accept">توقيع رئيس القسم</label>
                                <input type="checkbox" id="manager_accept" name="manager_accept" value="true">
                            </div>
                            <br>
                        @endcan



                        <script>

                            function myFunction() {
                                document.getElementById("test").value = document.getElementById("full_name").value;
                            }
                        </script>

                    </fieldset>

                    <br><br>


                    <div class="form-group">
                        <label for="signature">Signature</label>
                        <input type="checkbox" id="signature" name="signature" value="true">

                    </div>
                    <br>




                    <div style="width: 200px; margin-right: 40%">
                        <button type="submit" class="btn btn-outline-primary btn-block">Save</button>
                    </div>


                </form>

            </div>
        </div>
    </div>

@endsection

