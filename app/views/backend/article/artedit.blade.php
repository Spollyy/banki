@extends('backend.hello')
@section('title')
    <title> Редактировать Статью Daemkredit.ru Meow! CMS</title>
    <script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
@stop
@section('navlist')
    <li><a href="{{route('getposts')}}">Новости</a></li>
    <li class="active" ><a href="{{route('getarticles')}}">Статьи</a></li>
    <li><a href="{{route('getrubrics')}}">Рубрики</a></li>
    <li><a href="{{route('logout')}}">Выйти</a></li>
@stop
@section('content')
    <div class="container">
        <h1>Редактировать статью</h1>

        <div style="margin-top:50px;" class="mainbox col-md-8">

            {{Form::open(array('url' => route('puteditarticle', array('id' => $article->id)), 'method' => 'put', 'files' => true,'class' => 'form-horizontal'))}}
            {{Form::token();}}
            <div class="input-group">
                <label for="title">Title</label>
                <input id="title" type="text" class="form-control" name="title"
                       placeholder="Title" value="{{$article->title}}">
            </div>
            <br/>

            <div class="input-group">
                <label for="keywords">Keywords</label>
                <input id="keywords" type="text" class="form-control" name="keywords"
                       placeholder="keywords" value="{{$article->keywords}}">
            </div>
            <br/>

            <div class="input-group">
                <label for="url">url</label>
                <input id="url" type="text" class="form-control" name="url"
                       placeholder="url" value="{{$article->url}}">
            </div>
            <br/>

            <div class="input-group">
                <label for="description">Description</label>
                    <textarea id="description" class="form-control" name="description"
                              placeholder="description">{{$article->description}}</textarea>
            </div>
            <br/>

            <div class="input-group">
                <label for="post">Post</label>
                {{ Form::textarea('post', $article->url, array('id'=>'post')) }}
            </div>
            <br/>

            <div class="input-group">
                <select class="form-control" name="rubric">
                    @foreach ($rubrics as $r)
                        @if($r->id == $article->rub_id)
                            <option selected value="{{$r->id}}">{{$r->title}}</option>
                        @else
                            <option value="{{$r->id}}">{{$r->title}}</option>
                        @endif
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
