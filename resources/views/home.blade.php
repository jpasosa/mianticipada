@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->name }}</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8">
                            <p>Nombre:</p>
                            <p><strong>{{ Auth::user()->name }}</strong></p>
                            <hr>
                            <p>Email:</p>
                            <p><strong>{{ Auth::user()->email }}</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection