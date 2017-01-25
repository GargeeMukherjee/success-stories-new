@extends('layouts.app')
@section('content')
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<div class="container" style="font-size: 30px">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!<br>
                    <a href="add">Add Success Stories</a><br>
                    <a href="show">Show Success Stories</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
