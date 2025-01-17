 @extends('layouts.app')

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

    <div class="container">
        <div class="row justify-content-center">
            <div class="row-cols-md-6">
                <div class="card">
                    <div class="card-body">
                        create role


                        <form action="/role" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="role_name">Name</label>
                                <input type="text" class="form-control"
                                       id="role_name" name="role_name" aria-describedby="Role"
                                       placeholder="Role Name">
                            </div><br>
                            @foreach($permissions as $value)
                                <label for="role_permission">{{$value->name}}</label>
                                <input type="checkbox" id="role_permission" name="role_permission[]" value="{{$value->name}}">
                                <br>
                                
                            @endforeach
                            <button type="submit" class="btn btn-primary">Store</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection 


