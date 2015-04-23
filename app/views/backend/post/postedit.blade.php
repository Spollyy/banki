@extends('backend.hello')
@section('title')
    <title> Редактировать Новость Daemkredit.ru Meow! CMS</title>
    <script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
@stop
@section('navlist')
    <li class="active" ><a href="{{route('getposts')}}">Новости</a></li>
    <li><a href="{{route('getarticles')}}">Статьи</a></li>
    <li><a href="{{route('getrubrics')}}">Рубрики</a></li>
    <li><a href="{{route('logout')}}">Выйти</a></li>
@stop
@section('content')
    <div class="container">
        <h1>Редактировать новость</h1>

        <div style="margin-top:50px;" class="mainbox col-md-8">

            {{Form::open(array('url' => route('puteditpost', array('id' => $post->id)), 'method' => 'put', 'files' => true,'class' => 'form-horizontal'))}}
            {{Form::token();}}
            <div class="input-group">
                <label for="title">Title</label>
                <input id="title" type="text" class="form-control" name="title"
                       placeholder="Title" value="{{$post->title}}">
            </div>
            <br/>

            <div class="input-group">
                <label for="keywords">Keywords</label>
                <input id="keywords" type="text" class="form-control" name="keywords"
                       placeholder="keywords" value="{{$post->keywords}}">
            </div>
            <br/>

            <div class="input-group">
                <label for="url">url</label>
                <input id="url" type="text" class="form-control" name="url"
                       placeholder="url" value="{{$post->url}}">
            </div>
            <br/>

            <div class="input-group">
                <label for="description">Description</label>
                    <textarea id="description" class="form-control" name="description"
                              placeholder="description">{{$post->description}}</textarea>
            </div>
            <br/>

            <div class="input-group">
                <label for="post">Post</label>
                {{ Form::textarea('post', $post->url, array('id'=>'post')) }}
            </div>
            <br/>

            <div class="input-group">
                <select class="form-control" name="rubric">
                    @foreach ($rubrics as $r)
                            <option value="{{$r->id}}">{{$r->title}}</option>
                    @endforeach
                </select>
            </div>
            <br/>

            {{Form::file('file');}}
            <br/>

            <div class="form-group">
                <!-- Button -->

                <div class="col-sm-12 controls">
                    <button type="submit" id="btn-login" class="btn btn-success">Создать</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        CKEDITOR.replace('post');
    </script>
@stop
