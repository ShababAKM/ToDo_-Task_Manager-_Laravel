<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1 class='text-center my-5'>Welcome to ToDos App</h1>
    <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="container">
    <div class="card card-default">
    <div class="card-header">ToDos</div>
    <div class="card-body">
    <ul class='list-group'>
    @foreach($todos as $todo)
    <li class='list-group-item'>
    {{$todo->name}}
    <div class="button btn btn-primary btn-sm float-right">View</div>
    </li>
    @endforeach
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>