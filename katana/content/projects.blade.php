@extends('_includes.base')

@section('pageTitle', 'Projects')

@section('body')
    <header class="masthead" style="background-image: url(@url('assets/img/projects.jpg'))">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>Projects</h1>
                        <span class="subheading">Introduction on several latest projects</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h4>
                    For some of the project you can find the source code on my <a href="@yield('socLinkGithub', $socLinkGithub)" style="text-decoration: underline">GitHub profile</a>.
                </h4>
                <br>
                <hr>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @foreach($projects as $project)
                    <div class="post-preview">
                        <div>
                            <h3 class="post-title">
                                {{ $project['name'] }}
                            </h3>
                            <h6 class="post-subtitle">
                                {{ $project['description'] }}
                            </h6>
                        </div>
                        <p class="post-meta">
                            {{ $project['date'] }} | {!! $project['link'] !!}
                        </p>
                    </div>
                    <hr>
                @endforeach
                <!-- Pager -->
                @include('_includes.blog_paginator')
            </div>
        </div>
    </div>
@stop