@extends('layouts.master')

@section('content')



    <div class="col-xl-12" style="margin: 10px">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">show user</h4>
                </div>
            </div>
                    <div class="card-body">
                        <table id="" class="table">
                            <thead>
                            <tr>
                                <th scope="col">User name</th>
                                <th scope="col">User role</th>
                                <th scope="col">User Department</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$user->name}}</td>


                                <td>
                                    @if (!empty($user->getRoleNames()))
                                        @foreach ($user->getRoleNames() as $role)
                                            <label>{{ $role }}</label>
                                        @endforeach
                                    @endif
                                </td>

                                <td>{{$user->department->name}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <hr>
                        <form action="/user/{{$user->id}}/delete" method="post">
                            @csrf
                            <div style="width: 200px; margin-right: 40%">
                            <button class="btn btn-outline-danger btn-block">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


@endsection
