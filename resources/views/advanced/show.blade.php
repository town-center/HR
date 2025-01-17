@extends('layouts.app')

@section('content')
show advanced


<div class="container">
        <div class="row justify-content-center">
            <div class="row-cols-md-6">
                <div class="card">
                    <div class="card-body">
                        <table id="" class="table">
                            <thead>
                            <tr>
                                <th scope="col">advanced name</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$advanced->name}}</td>
                            </tr>
                            </tbody>
                        </table>

                        <form action="/advanced/{{$advanced->id}}/delete" method="post">
                            @csrf
                            <button type="submit">delete</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
