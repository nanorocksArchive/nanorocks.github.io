@extends('_includes.base')

@section('pageDescription')@yield('post::brief')@endsection

@section('body')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('@yield('post::img')')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>@yield('post::title')</h1>
                        <h2 class="subheading">@yield('post::subtitle')</h2>
                        <span class="meta">Posted by
              <a href="#">@yield('pageAuthor', $pageAuthor)</a>
              on @yield('post::date')</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    @yield('post_body')
                </div>
            </div>
        </div>
    </article>
@stop
