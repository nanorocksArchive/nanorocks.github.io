@extends('_includes.base')

@section('pageTitle', 'Home')

@section('body')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url(@url('assets/img/home-bg.jpg'))">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Andrej Nankov</h1>
                        <span class="subheading">Software engineer based in Skopje, Macedonia</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto text-justify">
                @markdown
                ## Intro

                Hello, and welcome to my **personal website**. My name is **Andrej Nankov** but I introduce myself as **nanorocks**.
                I use this nick as better introduction to myself on the internet. This nick is tide connect to my **social life** and my **field of work**.

                On this site you can find content most about **my work as a software engineer**, **experience in various fields of IT**, **open-source**, **solved problems**, **how to grow as an engineer**
                and **blog posts** related to contend that is interesting to **[read](/blog)** and **[know](/blog)**.

                **My goal is to be better self promoted to the IT world and to share my knowledge with others.**
                @endmarkdown
                <br>
                @markdown
                ### Favorite quote
                > ##### **"Talk is cheap. Show me the code."  - Linus Torvalds**
                ---
                @endmarkdown
                @include('_includes.load_posts')

            </div>

        </div>
    </div>
@stop