@extends('layouts.app')

@section('content')



    <div class="container">
        show user
        <div class="row justify-content-center">
            <div class="row-cols-md-8">
                <div class="card">
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

                        <form action="/user/{{$user->id}}/delete" method="post">
                            @csrf
                            <button type="submit">delete</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
