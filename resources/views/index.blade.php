<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modal Re-use</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <h1 class="text-primary">  Bootstrap Modal re-use: </h1>
    <hr>

    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissable">
            <button type="button" data-dismiss="alert" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h5>{{Session::get('message')}}</h5>
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Name</th>
            <th>Designation</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        @foreach($employeeList as $employee)
            <tr>
                <td>{{$employee['name']}}</td>
                <td>{{$employee['designation']}}</td>
                <td>
                    <button class="btn btn-danger load-confirmation-modal" data-url="{{url('modal'). '/' . $employee['id']}}" data-toggle ="modal" data-target='#confirmation-modal' >
                        Delete
                    </button>
                    <button class="btn btn-info load-form-modal" data-url="{{url('modal'). '/' . $employee['id'].'/edit'}}" data-toggle ="modal" data-target='#form-modal' >
                        Edit
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>

    @include('form-modal', ['title'=>'Form Modal'])
    @include('confirmation_modal', ['title'=>'Confirmation Modal'])
</div>
<script src="/js/jquery-1.11.3.js"> </script>
<script src="/js/bootstrap.js"> </script>
<script src="/js/script.js"> </script>
</body>
</html>