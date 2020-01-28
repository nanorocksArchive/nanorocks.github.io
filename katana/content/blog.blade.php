@extends('_includes.base')

@section('pageTitle', '- Blog')

@section('body')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url(@url('assets/img/blog2.png'))">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>Blog</h1>
                        <span class="subheading">Here I share my personal views and experiences</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @foreach($paginatedBlogPosts as $post)
                <div class="post-preview">
                    <a href="{{ $post->path  }}">
                        <h2 class="post-title">
                            {{ $post->title }}
                        </h2>
                        <h3 class="post-subtitle">
                            {{ str_limit($post->brief, 80) }}
                        </h3>
                    </a>
                    <p class="post-meta">Posted by
                        <a href='@url($post->path)'>@yield('pageAuthor', $pageAuthor)</a>
                        on {{ $post->date }}</p>
                </div>
                <hr>
                @endforeach
                <!-- Pager -->
                @include('_includes.blog_paginator')
            </div>
        </div>
    </div>
@stop