@extends('_includes.base')

@section('pageTitle', 'About')

@section('body')
    <header class="masthead" style="background-image: url(@url('assets/img/about-bg.jpg'))">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>About</h1>
                        <span class="subheading"><strong style="font-weight: 900">Andrej Nankov</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2>Summary</h2>
                <p style="text-align: justify; text-justify: inter-word;">
                    Software engineer with a <strong>Bachelor's degree</strong> (Faculty of Computer Science and Engineering - Skopje, Macedonia) experience in various fields in IT with wide skills.
                    Familiar with each layer of the development process and comfortable to work as a member of a team or independently.
                    Worked with different programming languages and frameworks in different fields like web, desktop-mobile software development and system administration.
                    Also, related to open source with interest in leveraging technology to make the world a better place.
                </p>
                @markdown
                ## Current work

                Working in the field of web development & web services, web design, testing, server configuration solutions.


                ## Top 3 programming languages

                 - PHP
                 - JavaScript
                 - Python


                ## Goal

                 - Generalist with focus on concepts.
                 - Believer that success in career depends on persistence and willingness to learn.
                 - Understanding client requirements and communicating the progress of the project are core values in achieving the project goals.


                ## Blog
                Content about code and technology click
                **[here](/blog)**.
                @endmarkdown
            </div>
        </div>
    </div>
@stop