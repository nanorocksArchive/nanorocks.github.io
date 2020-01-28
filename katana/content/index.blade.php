@extends('_includes.base')

@section('body')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url(@url('assets/img/home-bg.jpg'))">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Hi, I am Andrej</h1>
                        <span class="subheading">Software engineer based in Macedonia</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto text-justify">
                <p>{{ $siteDescription }}</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste neque sit tempora!</p>
                @markdown

                Simplicity is the key to great user experiences. Create fewer features, but make them great instead of just good.
                Show fewer elements, use simplistic styling to reduce cognitive load. Dare to say ‘No’ to prevent the core
                functionality from being lost in the noise.

                > Don’t go for ‘WOW’, go for ‘of course’

                Never chase the **‘wow-effect’**. Product design succeeds when it solves the problem or need of our users in the best possible way.
                Design the product effective & delightful. The reaction we are after from our users is “Of course, that is obvious”.

                I wrote down some design _principles_ for our team to help us make design decisions:

                - Define the problem first
                - Create more value by creating less
                - Strive for consistency
                - Focus the user on one primary action at a time
                - Use your user’s language
                - Minimize user input

                ---

                Check the complete post here:

                https://medium.com/@WdeB/digital-product-design-principles-8bc9eb6c080c

                @endmarkdown

                @include('_includes.load_posts')

            </div>

        </div>
    </div>
@stop