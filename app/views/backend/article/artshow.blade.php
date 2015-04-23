@extends('backend.hello')
@section('title')
    <title> Статьи</title>
@stop
@section('navlist')
    <li><a href="{{route('getposts')}}">Новости</a></li>
    <li class="active" ><a href="{{route('getarticles')}}">Статьи</a></li>
    <li><a href="{{route('getrubrics')}}">Рубрики</a></li>
    <li><a href="{{route('logout')}}">Выйти</a></li>
@stop
@section('content')
    <h1>Статьи</h1>
    <a href="{{route('getaddarticle')}}" class="btn btn-sm btn-success">Создать статью</a>
    <br />
    <br />
    <table class="table table-striped">
        <tr>
            <td><b>id</b></td>
            <td><b>Title</b></td>
            <td><b>Keywords</b></td>
            <td><b>url</b></td>
            <td><b>Description</b></td>
            <td><b>Text</b></td>
            <td><b>Rubric</b></td>
            <td><b>File</b></td>
            <td><b>Buttons</b></td>
        </tr>
        @foreach($articles as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>{{$article->keywords}}</td>
                <td>{{$article->url}}</td>
                <td>{{$article->description}}</td>
                <td>{{$article->text}}</td>
                <td>{{Rubric::find($article->rub_id)->title}}</td>
                <td><img width=100px height=100px src="{{asset('uploads/'.$article->file)}}" alt=""/></td>
                <td>
                    <a href="{{route('geteditarticle', array('id' => $article->id))}}" class="btn btn-sm btn-info glyphicon glyphicon-edit"></a>
                    {{Form::open(array('url' => route('deletearticle',array('id' => $article->id)), 'method' => 'delete', 'style' => 'display:inline'))}}
                    <button type="submit" class="btn btn-sm btn-danger glyphicon glyphicon-remove"></button>
                    {{Form::close()}}
                </td>
            </tr>
        @endforeach
    </table>
@stop