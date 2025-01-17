@extends('layouts.app')

@section('content')
    show department
    <div class="container">
        <div class="row justify-content-center">
            <div class="row-cols-md-6">
                <div class="card">
                    <div class="card-body">
                        <table id="" class="table">
                            <thead>
                            <tr>
                                <th scope="col">department name</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$department->name}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <form action="/department/{{ $department->id }}/delete" method="post">
                            @csrf
                            <button type="submit">delete</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
