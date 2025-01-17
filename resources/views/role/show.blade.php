@extends('layouts.app')

@section('content')
show role
<div class="container">
    <div class="row justify-content-center">
        <div class="row-cols-md-6">
            <div class="card">
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
                        </tr>
                        </tbody>
                    </table>

                        <form action="/role/{{$role->id}}/delete" method="post">
                            @csrf
                            <button type="submit" >delete</button>

                        </form>


                </div>
            </div>
        </div>
    </div>
</div>


@endsection



