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

    'enableBlog' => true,

    /**
     * --------------------------------------------------------------------------
     * The number of posts in a page
     * --------------------------------------------------------------------------
     *
     * The number of posts to appear on every page in the blog pages.
     *
     */
    'postsPerPage' => 2,

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

    'siteName' => 'nanorocks - personal blog',

    'siteDescription' => 'Portfolio and personal blog on Andrej Nankov',

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