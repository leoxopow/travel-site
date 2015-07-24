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

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(12);
        $slides = Slide::all();
        $most_popular = Post::orderBy('visit')->paginate(4);
        $this->layout->content = View::make('pages.index', compact('posts', 'slides', 'most_popular'));
    }

    public function pageHome()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(12);
        $postsToJson = [];
        foreach ($posts as $post) {
            $post->shorten_description = str_limit($post->description, 40);
            $post->shorten_title = str_limit($post->title, 40);
            $post->category;
            $postsToJson[] = $post;
        }
        return $posts;
    }

    public function privacy()
    {
        $this->layout->content = View::make('pages.privacy');
    }

    public function subscribe()
    {
        $email = Input::get('email');
        $password = str_random(6);
        $validator = Validator::make(['email' => $email], ['email' => 'required|email|unique:users']);
        if (!$validator->fails()) {
            $user = new User();
            $user->email = $email;
            $user->password = Hash::make($password);
            $user->save();
        }
    }

    public function imgPostThumbnail($path)
    {
        $post = Post::find($path);
        $img = Image::make(asset('images/thumbnails/' . $post->thumbnail))->fit(230, 170);
        $response = Response::make($img->encode('jpg'));
        $response->header('Content-Type', 'image/jpg');
        return $response;
    }

    public function imgPostThumbnail2col($id)
    {
        $post = Post::find($id);
        $img = Image::make(asset('images/thumbnails/' . $post->thumbnail))->fit(207, 300);
        $response = Response::make($img->encode('jpg'));
        $response->header('Content-Type', 'image/jpg');
        return $response;
    }

    public function imgSlideCategory($id)
    {
        $post = Post::find($id);
        $img = Image::make(asset('images/thumbnails/' . $post->thumbnail))->fit(750, 354);
        $response = Response::make($img->encode('jpg'));
        $response->header('Content-Type', 'image/jpg');
        return $response;
    }
    public function imgMainSlider($id)
    {
        $post = Post::find($id);
        $img = Image::make(asset('images/thumbnails/' . $post->thumbnail))->fit(1200, 500);
        $response = Response::make($img->encode('jpg'));
        $response->header('Content-Type', 'image/jpg');
        return $response;
    }

    public function imgResponsives($id)
    {
        $post = Post::find($id);
        $img = Image::make(asset('images/thumbnails/' . $post->thumbnail))->fit(400, 300);
        $response = Response::make($img->encode('jpg'));
        $response->header('Content-Type', 'image/jpg');
        return $response;
    }
}
