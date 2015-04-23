@extends('backend.hello')
@section('title')
    <title>Login Daemkredit.ru Meow! CMS</title>
@stop
@section('content')
    <div class="container">
        <div style="margin-top:50px;" class="mainbox col-md-4 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title" style="text-align: center">Sign In</div>
                </div>

                <div style="padding-top:30px" class="panel-body">

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                        {{Form::open(array('url' => route('postlogin'), 'class' => 'form-horizontal'))}}
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="email" value=""
                                   placeholder="username or email">
                        </div>

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password"
                                   placeholder="password">
                        </div>

                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->

                            <div class="col-sm-12 col-sm-offset-4 controls">
                                {{Form::submit('Login',array('class' => 'btn btn-success'))}}
                            </div>
                        </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@stop