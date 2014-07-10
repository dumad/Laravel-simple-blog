@extends('templates.default')

@section('title')
	Home
@stop

@section('content')

	@if($posts->count())
		@foreach($posts as $post)

			<article>
				<h2><a href="{{ URL::action('post-show',$post->slug) }}">{{ $post->title }}</a></h2> 
			</article>

		@endforeach
	@endif

@stop