@extends('layouts.master')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
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
                    <h4 class="card-title mg-b-0">Create Role</h4>
                </div>
            </div>
            <div class="card-body">

                <form action="/role" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="role_name">Name</label>
                        <input type="text" class="form-control"
                               id="role_name" name="role_name" aria-describedby="Role"
                               placeholder="Role Name">
                    </div>
                    <br>

{{--                    @foreach($permissions as $value)--}}
{{--                        <label for="role_permission">{{$value->name}}</label>--}}
{{--                        <input type="checkbox" id="role_permission" name="role_permission[]" value="{{$value->name}}">--}}
{{--                    @endforeach--}}
                    <div style="justify-content: center; width: 50%;">
                    <ul class="list-group  users-list-group">
                        @foreach($permissions as $value)
                        <li class="list-group-item d-flex align-items-center">
                            <div>
                                <h6 class="tx-15 mb-1 tx-inverse tx-semibold mg-b-0">{{$value->name}}</h6>
                            </div>
                            <div class="d-flex float-right mr-auto">
                                <input type="checkbox" id="role_permission" name="role_permission[]" value="{{$value->name}}">
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    </div>
{{--                    <div class="card-body">--}}
{{--                        <div class="table-responsive ">--}}
{{--                            <button id="button" class="btn btn-primary mg-b-20">Delete selected row</button>--}}
{{--                            <table id="example-delete" class="table text-md-nowrap">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>ss</th>--}}
{{--                                    <th>Name</th>--}}
{{--                                    <th>Position</th>--}}

{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}

{{--                                    @foreach($permissions as $value)--}}
{{--                                    <tr>--}}
{{--                                        <td>s</td>--}}
{{--                                      <td>  <label for="role_permission">{{$value->name}}</label></td>--}}
{{--                                      <td>  <input type="checkbox" id="role_permission" name="role_permission[]" value="{{$value->name}}"></td>--}}
{{--                                    </tr>--}}
{{--                                    @endforeach--}}


{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
            <br>
            <div style="width: 200px; margin-right: 40%">
                <button class="btn btn-outline-primary btn-block">Save</button>
            </div>

            </form>
        </div>
    </div>


@endsection

@section('js')
    <!-- Internal Data tables -->
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
    <!--Internal  Datatable js -->
    <script src="{{URL::asset('assets/js/table-data.js')}}"></script>
@endsection
