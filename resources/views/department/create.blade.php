<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="alert alert-success " role="alert">
    <strong>{{ session()->get('Add') }}</strong>
</div>
create department
    <form action="/departments" method="post">
        @csrf

            <div class="form-group">
                <label for="department_name">Name</label>
                <input type="text" class="form-control" id="department_name" name="department_name" aria-describedby="Department" placeholder="Department Name">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>


    </form>
</body>
</html>
