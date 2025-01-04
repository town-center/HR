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
index department
<br><br><br><br><br><br><br><br>

<div class="alert alert-success " role="alert">
    <strong>{{ session()->get('Add') }}</strong>
</div>
<div class="alert alert-warning " role="alert">
    <strong>{{ session()->get('delete') }}</strong>
</div>

<table id="example1" class="table key-buttons text-md-nowrap">
    <thead>
    <tr>
        <th class="border-bottom-0">#</th>
        <th class="border-bottom-0">department name</th>

    </tr>
    </thead>
    <tbody>
    <?php $i = 0;?>
    @foreach($departments as $department)
        <?php $i++; ?>
        <tr>
            <td>{{$i}}</td>
            <td>{{$department->name}}</td>

            <td>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
