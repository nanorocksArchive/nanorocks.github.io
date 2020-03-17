<?php

return [
    /**
     * --------------------------------------------------------------------------
     * Site base URL
     * --------------------------------------------------------------------------
     *
     * This base URL will be used to generate links for the @url blade
     * directive, it should always start with a forward slash.
     *
     */

    'base_url' => '/',

    /**
     * --------------------------------------------------------------------------
     * Enabling the blog generator
     * --------------------------------------------------------------------------
     *
     * When the blog generator is enabled, blade views in "content/_blog" will
     * be parsed to get blog posts data and generate blog pagination views.
     *
     * Disable this option if you don't need  a blog for your website to
     * get a performance boost.
     *
     */

    'enableBlog' => false,

    /**
     * --------------------------------------------------------------------------
     * The number of posts in a page
     * --------------------------------------------------------------------------
     *
     * The number of posts to appear on every page in the blog pages.
     *
     */
    'postsPerPage' => 5,

    /**
     * --------------------------------------------------------------------------
     * The view used to display blog paginated pages
     * --------------------------------------------------------------------------
     *
     * This blade view will be used to generate the paginated list of
     * posts for the blog.
     *
     */

    'postsListView' => 'blog',

    /**
     * --------------------------------------------------------------------------
     * Page description variables
     * --------------------------------------------------------------------------
     *
     * Here you can set all the page description variables you'd like to be present in
     * the blade views.
     *
     */

    'siteName' => 'nanorocks',

    'siteDescription' => 'Personal website - Andrej Nankov',

    'pageAuthor' => 'Andrej Nankov',

    /**
     * --------------------------------------------------------------------------
     * Nav variables
     * --------------------------------------------------------------------------
     *
     * Here you can set all the nav variables you'd like to be present in
     * the blade views.
     *
     */

    'navBrand' => 'nanorocks',

    'navMenu' => 'menu',

    'navItemFirst' => 'home',

    'navItemSecond' => 'about',

    'navItemThird' => 'blog',

    'navItemFourth' => 'projects',

    /**
     * --------------------------------------------------------------------------
     * Project variables
     * --------------------------------------------------------------------------
     *
     * Here you can set all projects variables you'd like to be present in
     * the blade views.
     *
     */

    'projects' => [
        [
            'name' => 'Console keychain',
            'description' => 'Console app to store your profile\'s username and password. Developed with python. Only for personal use.',
            'img' => '',
            'link' => '<a href="https://github.com/nanorocks/console-keychain">link</a>',
            'date' => 'release: v.1.0 on 12.01.2020'
        ],
        [
            'name' => 'Small Crab Dance',
            'description' => 'Share blocked links and content temporally. When browser/tab is closed shared data is cleared. Content is shared when crab start\'s dancing. Develop with php.',
            'img' => '',
            'link' => '',
            'date' => 'release: under develop'
        ],
        [
            'name' => 'Exchange rate - NBRM',
            'description' => 'An api service that prepare data for exchange rates and android app for reviews. Develop with php & kotlin.',
            'img' => '',
            'link' => '',
            'date' => 'release: under develop'
        ],
        [
            'name' => 'Forgotten Traveler Service',
            'description' => 'Web app and service for manage players, levels on android game. With external services integration. Developed with PHP/Slim/Custom Bootstrap/JavaScript.',
            'img' => '',
            'link' => '',
            'date' => 'release: 29.12.2019'
        ],
        [
            'name' => 'Short URL',
            'description' => 'Web app for short url\'s. Developed with PHP/JavaScript.',
            'img' => '',
            'link' => '',
            'date' => 'release: 09.12.2019'
        ],
        [
            'name' => 'Minifier',
            'description' => 'Web app for minify css & js. Developed with HTML/Material design/PHP.',
            'img' => '',
            'link' => '',
            'date' => 'release 01.12.2019'
        ],
        [
            'name' => 'Image App',
            'description' => 'Web app and web scanner that find FREE HQ images around web. Developed with html/python/flask/beautiful-soap/material-design.',
            'img' => '',
            'link' => '',
            'date' => 'release: 21.10.2019'
        ],
        [
            'name' => 'Dictionary',
            'description' => 'It\'s an English dictionary where you can find description for your beloved word. Developed with flight php and bootstrap material.',
            'img' => '',
            'link' => '',
            'date' => 'release: 31.08.2019'
        ],
        [
            'name' => 'Toobloop',
            'description' => 'Web app for listening music from YOUTUBE in forever loop. Developed with html/css/js.',
            'img' => '',
            'link' => '',
            'date' => 'release: 31.07.2019'
        ],
        [
            'name' => 'Personal biography',
            'description' => 'System for management personal biography. Contains Web app, Api service, Frontend app and Wordpress. With focus on php-laravel and vue.js.',
            'img' => '',
            'link' => '',
            'date' => 'release: 20.02.2019'
        ],


    ],

    /**
     * --------------------------------------------------------------------------
     * Footer variables
     * --------------------------------------------------------------------------
     *
     * Here you can set all the footer variables you'd like to be present in
     * the blade views.
     *
     */

    'socLinkFb' => 'https://www.facebook.com/nanorocks',

    'socLinkLinkedIn' => 'https://www.linkedin.com/in/nanorocks',

    'socLinkGithub' => 'https://github.com/nanorocks',

    'copyright' => 'Copyright &copy; 2020 Powered by Katana & Github pages.'
];