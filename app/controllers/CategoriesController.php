<?php

class CategoriesController extends \BaseController {

	/**
	 * Display a listing of categories
	 *
	 * @return Response
	 */
	public function index()
	{
		$categories = Category::all();

		return View::make('categories.index', compact('categories'));
	}

	/**
	 * Show the form for creating a new category
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('categories.create');
	}

	/**
	 * Store a newly created category in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Category::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Category::create($data);

		return Redirect::route('categories.index');
	}

	/**
	 * Display the specified category.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$category = Category::findOrFail($id);
		$posts = Post::where('category_id', $category->id)->orderBy('created_at', 'desc')->paginate(12);
		$slides = Post::where('category_id', $category->id)->where('thumbnail', '<>', '')->orderBy('visit', 'desc')->paginate(3);
		$this->layout->content = View::make('categories.show', compact('category', 'posts', 'slides'));
	}

	public function pageCategory()
	{
		$posts = Post::where('category_id', Input::get('category'))->orderBy('created_at', 'desc')->paginate(12);
		$postsToJson = [];
		foreach ($posts as $post) {
			$post->shorten_description = str_limit($post->description, 30);
			$post->shorten_title = str_limit($post->title, 40);
			$post->category;
			$postsToJson[] = $post;
		}
		return $posts;
	}
	/**
	 * Show the form for editing the specified category.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$category = Category::find($id);

		return View::make('categories.edit', compact('category'));
	}

	/**
	 * Update the specified category in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$category = Category::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Category::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$category->update($data);

		return Redirect::route('categories.index');
	}

	/**
	 * Remove the specified category from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Category::destroy($id);

		return Redirect::route('categories.index');
	}

    public function test(){
        return "test";
    }

}
