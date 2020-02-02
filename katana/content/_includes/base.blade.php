<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('pageDescription', $siteDescription)">
    <meta name="author" content="@yield('pageAuthor', $pageAuthor)">
    <title>{{$siteName}} - @yield('pageTitle', $pageTitle)</title>
    <link href="@url('assets/vendor/bootstrap/css/bootstrap.min.css')" rel="stylesheet">
    <link href="@url('assets/vendor/fontawesome-free/css/all.min.css')" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="@url('assets/css/clean-blog.min.css')" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156917962-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-156917962-1');
    </script>
</head>
<body>
<!-- Navigation -->
@extends('_includes.nav')

<!-- Main Content -->
@yield('body')
<hr>
<!-- Footer -->
@extends('_includes.footer')

<script src="@url('assets/vendor/jquery/jquery.min.js')"></script>
<script src="@url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')"></script>
<script src="@url('assets/js/clean-blog.min.js')"></script>
</body>
</html>