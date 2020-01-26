@extends('_includes.base')

@section('body')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url(@url('assets/img/home-bg.jpg'))">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Man must explore, and this is exploration at its greatest
                        </h2>
                        <h3 class="post-subtitle">
                            Problems look mighty small from 150 miles up
                        </h3>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">Start Bootstrap</a>
                        on September 24, 2019</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                        </h2>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">Start Bootstrap</a>
                        on September 18, 2019</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Science has not yet mastered prophecy
                        </h2>
                        <h3 class="post-subtitle">
                            We predict too much for the next year and yet far too little for the next ten.
                        </h3>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">Start Bootstrap</a>
                        on August 24, 2019</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Failure is not an option
                        </h2>
                        <h3 class="post-subtitle">
                            Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                        </h3>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">Start Bootstrap</a>
                        on July 8, 2019</p>
                </div>
                <hr>
                <!-- Pager -->
                <div class="clearfix">
                    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="welcome">--}}
{{--        <div class="wrapper">--}}
{{--            <h1>Welcome Home!</h1>--}}
{{--            <span>{{ $siteDescription }}</span>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <div class="left-side">--}}
{{--        @markdown--}}

{{--        Simplicity is the key to great user experiences. Create fewer features, but make them great instead of just good.--}}
{{--        Show fewer elements, use simplistic styling to reduce cognitive load. Dare to say ‘No’ to prevent the core--}}
{{--        functionality from being lost in the noise.--}}

{{--        > Don’t go for ‘WOW’, go for ‘of course’--}}

{{--        Never chase the **‘wow-effect’**. Product design succeeds when it solves the problem or need of our users in the best possible way.--}}
{{--        Design the product effective & delightful. The reaction we are after from our users is “Of course, that is obvious”.--}}

{{--        I wrote down some design _principles_ for our team to help us make design decisions:--}}

{{--        - Define the problem first--}}
{{--        - Create more value by creating less--}}
{{--        - Strive for consistency--}}
{{--        - Focus the user on one primary action at a time--}}
{{--        - Use your user’s language--}}
{{--        - Minimize user input--}}

{{--        -----}}

{{--        Check the complete post here:--}}

{{--        https://medium.com/@WdeB/digital-product-design-principles-8bc9eb6c080c--}}

{{--        @endmarkdown--}}
{{--    </div>--}}

{{--    <div class="right-side">--}}
{{--        @include('_includes.sidebar')--}}
{{--    </div>--}}
@stop