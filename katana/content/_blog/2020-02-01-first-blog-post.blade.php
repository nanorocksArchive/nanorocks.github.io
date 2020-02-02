@extends('_includes.blog_post_base')

@section('post::title', 'First blog post')
@section('post::subtitle', 'I am super excited to inform you that this is my first blog post')
@section('post::date', '01.02.2020')
@section('post::img', '/assets/img/posts/first-post.jpg')
@section('post::brief', 'I am super excited to inform you that this is my first blog post ...')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown
    I am super excited to inform you that this is my **first blog post** and my idea is to use this blog to write some useful content from time to time.

    I am hoping to focus on things I love and my goal is to help anyone who want to learn new things about **software development**, **software engineering**.

    IT industry is very dynamic and we have to keep up with the latest trends that come and go all the time, so I hope my blog will be useful to learners from any IT field.

    @endmarkdown
@stop