@extends('layouts.master')

@section('content')

    <div class="col-xl-12" style="margin: 10px">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">Show Role</h4>
                </div>
            </div>
                <div class="card-body">
                    <table id="" class="table">
                        <thead>
                        <tr>
                            <th scope="col">Role name</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$role->name}}</td>
                            <td>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <hr>
                    <form action="/role/{{$role->id}}/delete" method="post">
                        @csrf
                        <div style="width: 200px; margin-right: 40%">
                            <button class="btn btn-outline-danger btn-block">Delete</button>
                        </div>
                    </form>






                </div>
            </div>
        </div>
    </div>
</div>


@endsection



