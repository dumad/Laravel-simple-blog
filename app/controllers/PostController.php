<?php

Class PostController extends BaseController {

	public function postShow($slug)
	{
		$post = Post::where('slug','=',$slug)->firstOrFail();

		return View::make('posts.show')->with('post',$post);
	}
}