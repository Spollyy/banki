@extends('backend.hello')
@section('title')
    <title> Рубрики</title>
@stop
@section('navlist')
    <li><a href="{{route('getposts')}}">Новости</a></li>
    <li><a href="{{route('getarticles')}}">Статьи</a></li>
    <li class="active" ><a href="{{route('getrubrics')}}">Рубрики</a></li>
    <li><a href="{{route('logout')}}">Выйти</a></li>
@stop
@section('content')
    <h1>Рубрики</h1>
    <a href="{{route('getaddrubric')}}" class="btn btn-sm btn-success">Создать рубрику</a>
    <br />
    <br />
    <table class="table table-striped">
        <tr>
            <td><b>id</b></td>
            <td><b>Title (url)</b></td>
            <td><b>Buttons</b></td>
        </tr>
        @foreach($rubrics as $rubric)
            <tr>
                <td>{{$rubric->id}}</td>
                <td>{{$rubric->title}}</td>
                <td>
                    <a href="{{route('geteditrubric', array('id' => $rubric->id))}}" class="btn btn-sm btn-info glyphicon glyphicon-edit"></a>
                    {{Form::open(array('url' => route('deleterubric',array('id' => $rubric->id)), 'method' => 'delete', 'style' => 'display:inline'))}}
                    <button type="submit" class="btn btn-sm btn-danger glyphicon glyphicon-remove"></button>
                    {{Form::close()}}
                </td>
            </tr>
        @endforeach
    </table>
@stop