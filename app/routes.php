<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/meow', array('as'=> 'getlogin', 'uses' =>'HomeController@showLogin'));
Route::post('/meow', array('as'=> 'postlogin', 'uses' =>'HomeController@postLogin'));

Route::group(array('before' => 'auth'), function() {
    Route::get('/meow/posts', array('as' => 'getposts', 'uses' => 'HomeController@showPosts'));
    Route::get('/meow/addpost', array('as' => 'getaddpost', 'uses' => 'HomeController@showCreatePost'));
    Route::post('/meow/addpost', array('as' => 'postaddpost', 'uses' => 'HomeController@postCreatePost'));
    Route::get('/meow/editpost/{id}', array('as' => 'geteditpost', 'uses' => 'HomeController@showEditPost'));
    Route::put('/meow/editpost/{id}', array('as' => 'puteditpost', 'uses' => 'HomeController@putEditPost'));
    Route::delete('/meow/deletepost/{id}', array('as' => 'deletepost', 'uses' => 'HomeController@deletePost'));

    Route::get('/meow/articles', array('as' => 'getarticles', 'uses' => 'HomeController@showArticles'));
    Route::get('/meow/addarticle', array('as' => 'getaddarticle', 'uses' => 'HomeController@showCreateArticle'));
    Route::post('/meow/addarticle', array('as' => 'postaddarticle', 'uses' => 'HomeController@postCreateArticle'));
    Route::get('/meow/editarticle/{id}', array('as' => 'geteditarticle', 'uses' => 'HomeController@showEditArticle'));
    Route::put('/meow/editarticle/{id}', array('as' => 'puteditarticle', 'uses' => 'HomeController@putEditArticle'));
    Route::delete('/meow/deletearticle/{id}', array('as' => 'deletearticle', 'uses' => 'HomeController@deleteArticle'));

    Route::get('/meow/rubrics', array('as' => 'getrubrics', 'uses' => 'HomeController@showRubrics'));
    Route::get('/meow/addrubric', array('as' => 'getaddrubric', 'uses' => 'HomeController@showCreateRubric'));
    Route::post('/meow/addrubric', array('as' => 'postaddrubric', 'uses' => 'HomeController@postCreateRubric'));
    Route::get('/meow/editrubric/{id}', array('as' => 'geteditrubric', 'uses' => 'HomeController@showEditRubric'));
    Route::put('/meow/editrubric/{id}', array('as' => 'puteditrubric', 'uses' => 'HomeController@putEditRubric'));
    Route::delete('/meow/deleterubric/{id}', array('as' => 'deleterubric', 'uses' => 'HomeController@deleteRubric'));

    Route::get('/meow/editmain', array('as' => 'getmain', 'uses' => 'HomeController@getContent'));
    Route::post('/meow/editmain', array('as' => 'getmain', 'uses' => 'HomeController@postContent'));


    Route::get('/meow/logout', array('as' => 'logout', 'uses' => 'HomeController@logout'));

});


Route::get('/', array('as' => 'main', 'uses' => 'HomeController@showMain'));

Route::get('sitemap.xml', function(){

    $collection = Rubric::all();
    foreach ($collection as $col)
    {
        Sitemap::addLink($col->title, $col->updated_at);
    }

    $collection = RTP::all();
    foreach ($collection as $col)
    {
        Sitemap::addLink(Rubric::find($col->rubric_id)->title .'/'.Post::find($col->post_id)->url, $col->updated_at);
    }


    $collection = Article::all();
    foreach ($collection as $col)
    {
        Sitemap::addLink(Rubric::find($col->rub_id)->title . '/'.$col->url, $col->updated_at);
    }

    return Response::make(Sitemap::getSitemapXml())
        ->header('Content-Type', 'text/xml');

});