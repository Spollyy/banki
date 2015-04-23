@extends('backend.hello')
@section('title')
    <title> Новости</title>
@stop
@section('navlist')
    <li class="active" ><a href="{{route('getposts')}}">Новости</a></li>
    <li><a href="{{route('getarticles')}}">Статьи</a></li>
    <li><a href="{{route('getrubrics')}}">Рубрики</a></li>
    <li><a href="{{route('logout')}}">Выйти</a></li>
@stop
@section('content')
    <h1>Новости</h1>
    <a href="{{route('getaddpost')}}" class="btn btn-sm btn-success">Создать новость</a>
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
            <td><b>File</b></td>
            <td><b>Buttons</b></td>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->keywords}}</td>
                <td>{{$post->url}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->text}}</td>
                <td><img width=100px height=100px src="{{asset('uploads/'.$post->file)}}" alt=""/></td>
                <td>
                    <a href="{{route('geteditpost', array('id' => $post->id))}}" class="btn btn-sm btn-info glyphicon glyphicon-edit"></a>
                    {{Form::open(array('url' => route('deletepost',array('id' => $post->id)), 'method' => 'delete', 'style' => 'display:inline'))}}
                    <button type="submit" class="btn btn-sm btn-danger glyphicon glyphicon-remove"></button>
                    {{Form::close()}}
                </td>
            </tr>
        @endforeach
    </table>
@stop