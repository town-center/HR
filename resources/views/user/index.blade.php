@extends('layouts.app')

@section('content')
    index User

    @if (session('Add'))
        <div class="alert alert-success " role="alert">
            <strong>{{ session()->get('Add') }}</strong>
        </div>
    @endif

    @if (session('delete'))
        <div class="alert alert-warning " role="alert">
            <strong>{{ session()->get('delete') }}</strong>
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="row-cols-md-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table  ">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">#</th>
                                <th class="border-bottom-0">User name</th>
                                <th class="border-bottom-0">User role</th>
                                <th class="border-bottom-0">User Department</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0;?>
                            @foreach($users as $user)
                                <?php $i++; ?>
                                <tr>
                                    <td>{{$i}}</td>
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
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

