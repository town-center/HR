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
                    <h4 class="card-title mg-b-0">انشاء طلب مباشرة موظف</h4>
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
                    <h4>السيد المدير العام المحترم</h4>
                    <label for="dept_id">يرجى الموافقة علة تعيين موظف جديد في قسم</label>
                    <select class="form-control" aria-label="Default select example" name="dept_id" style="width:10%"
                            id="dept_id" required>
                        <option selected>اختر القسم</option>
                        @foreach($departments as $dept)
                            <option value="{{$dept->id}}">{{$dept->name}}</option>
                        @endforeach

                    </select>
                    <span>تحت الاختبار (ثلاثة اشهر), وفقا للبيانات الاتية:</span>
                    <br>

                    <div class="form-group">
                        <label for="full_name)">اسم الموظف</label>
                        <input type="text" class="form-control" id="full_name"
                               name="full_name"
                               aria-describedby="full name" placeholder="name">
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="job_title">المسمى الوظيفي</label>
                        <input type="text" class="form-control" id="job_title"
                               name="job_title"
                               aria-describedby="job title" placeholder="Emp">
                    </div>
                    <br>



                    <div class="form-group">
                        <label for="start_date">تاريخ مباشرة العمل واستلام المهام</label>
                        <input type="date" class="form-control" id="start_date"
                               name="start_date"
                               aria-describedby="start date" placeholder="start date">
                    </div>
                    <br>




                    <div class="form-group">
                        <label for="notes">ملاحظات</label>
                        <input type="text" class="form-control" id="notes"
                               name="notes"
                               aria-describedby="notes" placeholder="notes">
                    </div>
                    <br>





                    <div class="form-group">
                        <label for="signature">توقيع</label>
                        <input type="checkbox" id="signature" name="signature" value="true">

                    </div>
                    <br>
                    @can('manager accept')
                        <div class="form-group">
                            <label for="manager_accept">Manager accept</label>
                            <input type="checkbox" id="manager_accept" name="manager_accept" value="true">
                        </div>
                        <br>
                    @endcan



                    <div style="width: 200px; margin-right: 40%">
                        <button type="submit" class="btn btn-outline-primary btn-block">Save</button>
                    </div>


                </form>

            </div>
        </div>
    </div>

@endsection

