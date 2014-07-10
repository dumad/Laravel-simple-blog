@extends('templates.default')

@section('title')
	{{ $post->title }}
@stop

@section('content')

	@if($post->count()) 

		<article>
			<h2><a href="{{ URL::action('post-show',$post->slug) }}">{{ $post->title }}</a></h2>	
			{{ Markdown::parse($post->body) }}
		</article> 

	@endif

@stop