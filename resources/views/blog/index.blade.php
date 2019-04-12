@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="quote">The beautiful Laravel</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">Learning Laravel</h1>
            <p>This blog post will get you right on track with Laravel!</p>
            <p><a href="http://localhost:8000/post/1">Read more...</a></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">The next Steps</h1>
            <p>Understanding the Basics is great, but you need to be able to make the next steps.</p>
            <p><a href="http://localhost:8000/post/2">Read more...</a></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">Laravel 5.3</h1>
            <p>Though announced as a "minor release", Laravel 5.3 ships with somer very interesting additions and features.</p>
            <p><a href="http://localhost:8000/post/3">Read more...</a></p>
        </div>
    </div>
@endsection
@extends ('layouts . master ')
@section ('content ')
<div class =" row ">
<div class ="col -md -12 ">
<p class =" quote ">The beautiful Laravel </p>
</div >
</div >
@foreach ( $posts as $post )
<div class =" row ">
<div class ="col -md -12 text - center ">
<h1 class ="post - title " >{{ $post ['title '] }} </h1 >
<p >{{ $post ['content '] }}! </p>
<p><a href ="{{ route (' blog . post ', ['id ' => array_search ($post , $posts )]) }}">Read more ...
	</div >
</div >
<hr >
@endforeach
@endsection