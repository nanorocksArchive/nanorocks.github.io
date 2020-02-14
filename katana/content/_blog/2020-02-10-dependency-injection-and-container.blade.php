@extends('_includes.blog_post_base')

@section('post::title', 'Dependency injection and DI containers')
@section('post::subtitle', 'Let\'s understand it like piece of cake')
@section('post::date', '10.02.2020')
@section('post::img', '/assets/img/posts/di.jpg')
@section('post::brief', 'There are a ton of topics and posts on the internet about Dependency injection and DI containers')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown
    ### Intro
    There are a ton of topics and posts on the internet about Dependency injection and DI containers. My goal is to make it understandable, not confusing and to be pragmatic in explaining.

    ### About DI
    DI is a technique used in Object-Oriented Programming to make more reusable, extendable and readable code. DI can be used with:
        - `constructor injection:` the dependencies are provided through a class constructor.
        -  `setter injection:` the client exposes a setter method that the injector uses to inject the dependency.
        -  `interface injection:` the dependency provides an injector method that will inject the dependency into any class passed to it. Classes must implement an interface that exposes a setter method that accepts the dependency.
    @endmarkdown

    <h2>In Dept</h2>
    <h5>Constructor injection is useful when:</h5>
    <ul>
        <li>
            A dependency is required and class can't work without it. By using constructor injection. we make sure all its required dependencies are passed.
        </li>
        <li>
            Since the constructor is called only at the time of instantiating a class, we can make sure that its dependencies can’t be changed during the lifetime of the object.
        </li>
    </ul>
    <h5>There is one problem when using constructor injection:</h5>
    <ul>
        <li>
            Since constructor has dependencies, it becomes rather difficult to extend/override it in child classes.
        </li>
    </ul>
    <h5>Constructor injection Example</h5>
    <img style="width: 60%;" src="@url('assets/img/posts/second/di1.png')" alt="Constructor injection Example Img">
    <br><br>
    <hr>

    <h5>Setter injection is useful when:</h5>
    <ul>
        <li>have optional dependencies. </li>
    </ul>
    <p>
        Let's pretend that our User class doesn't require Database instance but uses optionally for certain tasks. In this case, you would use a setter method to inject the Database into the User class.
    </p>
    <h5>Setter injection Example</h5>
    <img style="width: 60%;" src="@url('assets/img/posts/second/di2.png')" alt="Constructor injection Example Img">
    <br><br>
    <hr>

    <h5>Interface Injection</h5>
    <p>
        In this type of injection, an interface enforces the dependencies for any classes that implement it.
    </p>
    <h5>Interface Injection Example</h5>
    <img style="width: 60%;" src="@url('assets/img/posts/second/di3.png')" alt="Constructor injection Example Img">
    <p>
        Now any class that needs to implement someInterface must provide Database dependency in their getUsers() methods.
    </p>
    <hr>

    <h2>Real-world applications</h2>
    <p>
        A class might have many dependencies. It isn't all that easy to manage all those dependencies because you need to KNOW which dependencies are required by a certain class and HOW they need to be instantiated.  It becomes harder to manage all of those manually and you could easily create more than one instance of dependencies throughout your code which would result in high memory usage.
    <p>
        You might wonder if dependency injection sounded like a good thing to have but these problems are not worth it. Well that's not true because there is a solution and that is <strong>Dependency Injection Container</strong>.
    </p>

    <br>
    <h2>DI Container</h2>
    <p>
        A Dependency Injection Container is something that handles dependencies for your classes automatically. For example, modern web frameworks in the PHP world like Simfony or Laravel have components that have dependencies on other classes. How do they manage all of those dependencies? Yes, they use some sort of Dependency Injection Container
    </p>
    <p>
        There are quite some dependency injection containers on the internet that can be used for this purpose or you can also write your own. Each container might have a bit of different syntax but they perform the same thing under the hood.
    </p>

    <br>
    <h2>Conclusion</h2>
    <p>
        In a real-time project It’s better to use Dependencies Injection container that will automatically take care of the dependencies you use. Also, try to avoid hard-coded dependencies they don’t belong here.
    </p>
@stop