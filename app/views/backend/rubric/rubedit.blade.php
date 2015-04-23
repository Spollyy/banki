@extends('backend.hello')
@section('title')
    <title> Редактировать Рубрику Daemkredit.ru Meow! CMS</title>
@stop

@section('navlist')
    <li><a href="{{route('getposts')}}">Новости</a></li>
    <li><a href="{{route('getarticles')}}">Статьи</a></li>
    <li class="active" ><a href="{{route('getrubrics')}}">Рубрики</a></li>
    <li><a href="{{route('logout')}}">Выйти</a></li>
@stop
@section('content')
    <div class="container">
        <h1>Редактировать рубрику</h1>

        <div style="margin-top:50px;" class="mainbox col-md-8">

            {{Form::open(array('url' => route('puteditrubric',array('id' => $r->id)), 'method' => 'put','class' => 'form-horizontal'))}}
            {{Form::token();}}
            <div class="input-group">
                <label for="title">Title = url</label>
                <input id="title" type="text" class="form-control" name="title"
                       placeholder="Title" value="{{$r->title}}">
            </div>

            {{ $errors->first('title') }}
            <div class="form-group">
                <!-- Button -->
                <br />
                <div class="col-sm-12 controls">
                    {{Form::submit('Изменить',array('class' => 'btn btn-success'))}}
                </div>
            </div>
            {{Form::close()}}
        </div>
    </div>

@stop
