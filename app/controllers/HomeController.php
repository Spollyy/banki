<?php

class HomeController extends BaseController
{

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function showWelcome()
    {
        return View::make('backend.hello');
    }

    public function showLogin()
    {
        return View::make('backend.login');
    }

    public function postLogin()
    {
        $input = Input::all();
        if (Auth::attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            return Redirect::to('/meow/posts');
        }
        return Redirect::to('/meow');
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/meow');
    }


    public function showPosts()
    {
        $posts = Post::all();
        return View::make('backend.post.postshow')->with('posts', $posts);
    }

    public function showCreatePost()
    {
        $rubrics = Rubric::all();
        return View::make('backend.post.postcreate')->with('rubrics', $rubrics);
    }

    public function postCreatePost()
    {
        $destination = public_path('uploads');
        //   var_dump($destination); exit();
        $input = Input::all();
        $rules = array(
            'title' => 'required',
            'keywords' => 'required',
            'url' => 'required|unique:posts',
            'description' => 'required',
            'post' => 'required',
            'image' => 'image',
        );
        $v = Validator::make($input, $rules);
        if ($v->fails()) {
            return Redirect::back()->withErrors($v);
        }
        $post = new Post();
        $post->title = $input['title'];
        $post->keywords = $input['keywords'];
        $post->url = $input['url'];
        $post->description = $input['description'];
        $post->text = $input['post'];
        if (isset($input ['file'])) {

            $post->file = Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension();
            $input ['file']->move($destination, Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension());
        }
        $post->save();
        foreach ($input['rubric'] as $i) {
            $rtp = new RTP();
            $rtp->post_id = $post->id;
            $rtp->rubric_id = $i;
            $rtp->save();
        }
        return Redirect::to('meow/posts');
    }

    public function showEditPost($id)
    {
        $rubrics = Rubric::all();
        $post = Post::find($id);
        return View::make('backend.post.postedit')->with(array('post' => $post, 'rubrics' => $rubrics));
    }

    public function putEditPost($id)
    {
        $post = Post::find($id);
        $post->url = '';
        $post->save();
        $destination = public_path('uploads');
        //   var_dump($destination); exit();
        $input = Input::all();
        $rules = array(
            'title' => 'required',
            'keywords' => 'required',
            'url' => 'required|unique:posts',
            'description' => 'required',
            'post' => 'required',
            'image' => 'image',
        );
        $v = Validator::make($input, $rules);
        if ($v->fails()) {
            return Redirect::back()->withErrors($v);
        }
        $post->title = $input['title'];
        $post->keywords = $input['keywords'];
        $post->url = $input['url'];
        $post->description = $input['description'];
        $post->text = $input['post'];
        if (isset($input ['file'])) {

            $post->file = Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension();
            $input ['file']->move($destination, Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension());
        }
        $post->save();
        return Redirect::to('meow/posts');
    }

    public function deletePost($id)
    {
        $r = Post::find($id)->delete();
        return Redirect::back();
    }


    public function showArticles()
    {
        $articles = Article::all();
        return View::make('backend.article.artshow')->with('articles', $articles);
    }

    public function showCreateArticle()
    {
        $rubrics = Rubric::all();
        return View::make('backend.article.artcreate')->with('rubrics', $rubrics);
    }

    public function postCreateArticle()
    {
        $destination = public_path('uploads');
        //   var_dump($destination); exit();
        $input = Input::all();
        $rules = array(
            'title' => 'required',
            'keywords' => 'required',
            'url' => 'required|unique:articles',
            'description' => 'required',
            'post' => 'required',
            'image' => 'image',
        );
        $v = Validator::make($input, $rules);
        if ($v->fails()) {
            return Redirect::back()->withErrors($v);
        }
        $art = new Article();
        $art->title = $input['title'];
        $art->keywords = $input['keywords'];
        $art->url = $input['url'];
        $art->description = $input['description'];
        $art->text = $input['post'];
        if (isset($input ['file'])) {

            $art->file = Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension();
            $input ['file']->move($destination, Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension());
        }
        $art->rub_id = $input['rubric'];
        $art->save();
        return Redirect::to('meow/articles');
    }

    public function showEditArticle($id)
    {
        $rubrics = Rubric::all();
        $art = Article::find($id);
        return View::make('backend.article.artedit')->with(array('article' => $art, 'rubrics' => $rubrics));
    }

    public function putEditArticle($id)
    {
        $art = Article::find($id);
        $art->url = '';
        $art->save();
        $destination = public_path('uploads');
        //   var_dump($destination); exit();
        $input = Input::all();
        $rules = array(
            'title' => 'required',
            'keywords' => 'required',
            'url' => 'required|unique:articles',
            'description' => 'required',
            'post' => 'required',
            'image' => 'image',
        );
        $v = Validator::make($input, $rules);
        if ($v->fails()) {
            return Redirect::back()->withErrors($v);
        }
        $art->title = $input['title'];
        $art->keywords = $input['keywords'];
        $art->url = $input['url'];
        $art->description = $input['description'];
        $art->text = $input['post'];
        if (isset($input ['file'])) {

            $art->file = Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension();
            $input ['file']->move($destination, Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension());
        }
        $art->rub_id = $input['rubric'];
        $art->save();
        return Redirect::to('meow/articles');
    }

    public function deleteArticle($id)
    {
        $r = Article::find($id)->delete();
        return Redirect::back();
    }


    public function showRubrics()
    {
        $rubrics = Rubric::all();
        return View::make('backend.rubric.rubshow')->with('rubrics', $rubrics);
    }

    public function showCreateRubric()
    {
        return View::make('backend.rubric.rubcreate');
    }

    public function postCreateRubric()
    {
        $input = Input::all();
        $rubric = new Rubric();
        $rules = array(
            'title' => 'required|unique:rubrics'
        );
        $v = Validator::make($input, $rules);
        if ($v->fails())
            return Redirect::back()->withErrors($v);
        $rubric->title = $input['title'];
        $rubric->save();
        return Redirect::to('meow/rubrics');
    }

    public function showEditRubric($id)
    {
        $r = Rubric::find($id);
        return View::make('backend.rubric.rubedit')->with('r', $r);
    }

    public function putEditRubric($id)
    {
        $input = Input::all();
        $rubric = Rubric::find($id);
        $rubric->title = '';
        $rubric->save();
        $rules = array(
            'title' => 'required|unique:rubrics'
        );
        $v = Validator::make($input, $rules);
        if ($v->fails())
            return Redirect::back()->withErrors($v);
        $rubric->title = $input['title'];
        $rubric->save();
        return Redirect::to('meow/rubrics');
    }

    public function deleteRubric($id)
    {
        $r = Rubric::find($id)->delete();
        return Redirect::back();
    }


    public function showMain()
    {
        return View::make('main');
    }

}
