<?php
session_start();
include('../../admin/includes/config.php');

//  print_r($con);

if(isset($_GET['single'])):
$pid=intval($_GET['single']);
$query=mysqli_query($con,"SELECT * FROM `conference` WHERE `id`='$pid'");
$row=mysqli_fetch_array($query) ;

// echo htmlentities($row['postingdate']);

$years = date("M d, Y ",strtotime($row['conf_date']));


?>


<!doctype html>
<html lang=en-US
    class=" optml_no_js no-featured-area is-header-small is-body-full-width is-single-post-title-default is-post-title-align-center is-post-media-fixed is-blog-text-align-left is-meta-with-icons is-header-light is-header-full-width is-header-parallax-no is-menu-sticky is-menu-fixed-width is-menu-align-right is-menu-light is-submenu-dark is-submenu-align-left is-menu-none-uppercase is-featured-area-full is-slider-buttons-center-margin is-slider-buttons-rounded is-slider-buttons-dark is-slider-title-dark-shadow is-slider-parallax is-slider-title-none-uppercase is-slider-more-link-show-on-hover is-slider-more-link-border-bottom is-slider-text-align-left is-slider-v-align-bottom is-slider-h-align-center is-link-box-title-default is-link-box-title-transform-none is-link-box-text-align-center is-link-box-v-align-center is-link-box-parallax is-intro-align-center is-intro-text-dark is-intro-parallax-no is-more-link-border-bottom-light is-about-author-minimal is-related-posts-parallax is-related-posts-overflow is-share-links-boxed is-tagcloud-minimal is-nav-single-rounded is-nav-single-no-animated is-comments-minimal is-comments-image-rounded is-comment-form-boxed is-comment-form-border-arrow is-sidebar-right is-sidebar-sticky is-sidebar-align-left is-widget-title-align-left is-widget-first-letter-border is-trending-posts-default is-footer-subscribe-light is-footer-widgets-align-left is-footer-full-width  is-menu-hover-solid is-menu-hover-overflow is-menu-hover-ribbon is-header-sticky-shadow-soft is-header-transparent-border-bottom is-menu-sticky-shadow-soft-shorter is-menu-inline-borders is-menu-inline-borders-light is-header-float is-header-transparent"
    data-title-ratio=0.55 data-link-box-title-ratio=0.5 data-generic-button-style data-header-bg-shape>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel=profile href=https://gmpg.org/xfn/11> <title><?php  echo $row['conf_title'];   ?> &#8211; AGSchool</title>
    <meta name='robots' content='max-image-preview:large'>
    <link rel=dns-prefetch href=//s.w.org> <link rel=dns-prefetch href=//mltgfb8sgh5y.i.optimole.com> <link
        rel=preconnect href=https://mltgfb8sgh5y.i.optimole.com> <link rel=alternate type=application/rss+xml
        title="Atlanta Graduate School &raquo; Feed" href=../../feed/>
    <link rel=alternate type=application/rss+xml title="Atlanta Graduate School &raquo; Comments Feed"
        />
    <link rel=alternate type=application/rss+xml
        />
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/themes.pixelwars.org\/efor\/demo-06\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.8.3"
            }
        };
        ! function(e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([
                            55356, 56826, 55356, 56819
                        ], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418,
                            56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447
                        ], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203,
                            56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447
                        ]);
                    case "emoji":
                        return !s([10084, 65039, 8205, 55357, 56613], [10084, 65039, 8203, 55357, 56613])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t
                .supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
                .readyCallback = function() {
                    t.DOMReady = !0
                }, t.supports.everything || (n = function() {
                    t.readyCallback()
                }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load",
                    n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                    "complete" === a.readyState && t.readyCallback()
                })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji),
                    c(n.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important
        }
    </style>
    <link rel=stylesheet href=../../wp-content/cache/minify/9/36052.css media=all>
    <style id=tutor-frontend-inline-css>
        :root {
             margin: 0;
             padding: 0;
             box-sizing: border-box;

        }
    </style>
    <link rel=stylesheet href=../../wp-content/cache/minify/9/2df2c.css media=all>
    <style id=woocommerce-inline-inline-css>
        .woocommerce form .form-row .required {
            visibility: visible
        }
    </style>
    <link rel=stylesheet href=../../wp-content/cache/minify/9/98129.css media=all>
    <style id=efor-style-inline-css>
        .site-title {
            font-family: 'This July', sans-serif
        }

        .nav-menu,
        .entry-meta,
        .owl-nav,
        label,
        .page-links,
        .navigation,
        .entry-title i,
        .site-info,
        .filters {
            font-family: 'Jost*', sans-serif
        }

        .widget-title {
            font-family: 'Now', sans-serif
        }

        h1,
        .entry-title,
        .footer-subscribe h3,
        .widget_categories ul li,
        .widget_recent_entries ul li a,
        .widget_pages ul li,
        .widget_nav_menu ul li,
        .widget_archive ul li,
        .widget_most_recommended_posts ul li a,
        .widget_calendar table caption,
        .tptn_title,
        .nav-single a,
        .widget_recent_comments ul li,
        .widget_product_categories ul li,
        .widget_meta ul li,
        .widget_rss ul a.rsswidget {
            font-family: 'TeXGyreAdventor', sans-serif
        }

        h2,
        h3,
        h4,
        h5,
        h6,
        blockquote,
        .tab-titles {
            font-family: 'TeXGyreAdventor', sans-serif
        }

        .slider-box .entry-title {
            font-family: 'TeXGyreAdventor', sans-serif
        }

        body {
            font-family: 'Now', sans-serif
        }

        .link-box .entry-title {
            font-family: 'Now', sans-serif
        }

        .site-description {
            font-family: 'Jost*', sans-serif
        }

        @media screen and (min-width: 992px) {
            .site-header .site-title {
                font-size: 50px
            }
        }

        @media screen and (min-width: 992px) {
            .is-header-smaller .site-header.clone .site-title {
                font-size: 44px
            }
        }

        @media screen and (min-width: 992px) {
            h1 {
                font-size: 58px
            }
        }

        @media screen and (min-width: 992px) {
            html {
                font-size: 14px
            }
        }

        @media screen and (max-width: 991px) {
            html {
                font-size: 13px
            }
        }

        @media screen and (min-width: 992px) {
            .nav-menu>ul {
                font-size: 17px
            }
        }

        @media screen and (min-width: 992px) {
            .blog-stream .entry-content {
                font-size: 16px
            }
        }

        .widget-title {
            font-size: 11px
        }

        .entry-meta {
            font-size: 13px
        }

        .site-footer .site-info {
            font-size: 14px
        }

        .site-title {
            font-weight: 400
        }

        h1,
        .entry-title,
        .footer-subscribe h3 {
            font-weight: 700
        }

        h2,
        h3,
        h4,
        h5,
        h6,
        blockquote,
        .comment-meta .fn {
            font-weight: 700
        }

        .slider-box .entry-title {
            font-weight: 700
        }

        .widget-title {
            font-weight: 500
        }

        @media screen and (min-width: 992px) {
            .nav-menu>ul {
                font-weight: 500
            }
        }

        @media screen and (min-width: 992px) {
            .nav-menu ul ul {
                font-weight: 700
            }
        }

        .link-box .entry-title {
            font-weight: 700
        }

        @media screen and (min-width: 992px) {
            .nav-menu>ul {
                letter-spacing: 0px
            }
        }

        @media screen and (min-width: 992px) {
            .nav-menu ul ul {
                letter-spacing: 0px
            }
        }

        .widget-title {
            letter-spacing: 3px
        }

        .site-footer .site-info {
            letter-spacing: 0px
        }

        @media screen and (min-width: 992px) {
            html {
                line-height: 1.9
            }
        }

        @media screen and (min-width: 768px) {
            .featured-area .block {
                padding: 0px
            }

            .featured-area {
                margin: -0px
            }
        }

        .header-wrap:after {
            bottom: -1px
        }

        .is-menu-bar .menu-wrap:after {
            bottom: -1px
        }

        @media screen and (min-width: 992px) {
            .site-branding-wrap {
                padding: 35px 0
            }
        }

        .layout-medium,
        .is-header-row .header-wrap-inner,
        .is-header-small .header-wrap-inner,
        .is-menu-bar.is-menu-fixed-bg .menu-wrap,
        .is-header-fixed-width .header-wrap,
        .is-header-fixed-width.is-menu-bar .site-navigation,
        .is-header-float-box:not(.is-header-float-box-menu) .site-header:not(.clone) .header-wrap,
        .is-header-float-box.is-menu-bar .site-header:not(.clone) .site-navigation:not(.clone),
        .is-body-boxed .site,
        .is-body-boxed .header-wrap,
        .is-body-boxed.is-menu-bar .site-navigation,
        .is-body-boxed:not(.is-menu-bar) .site-header,
        .is-middle-boxed .site-main,
        .intro-content,
        .is-footer-boxed .site-footer,
        .is-content-boxed .site-main .layout-fixed,
        .top-bar .top-bar-wrap,
        .is-top-bar-fixed .top-bar,
        .is-top-bar-fixed-bg .top-bar,
        .is-menu-bottom.is-menu-bottom-overflow .site-header:not(.clone) .site-navigation:not(.clone) .menu-wrap,
        .site-branding-wrap,
        .is-header-border-fixed .header-wrap:after,
        .is-header-border-fixed .menu-wrap:after,
        html .tutor-container,
        html .lp-content-area,
        html .learn-press-breadcrumb {
            max-width: 1140px;
            margin-left: auto;
            margin-right: auto
        }

        @media screen and (min-width: 992px) {

            .is-header-small .header-wrap,
            .is-menu-bar .nav-menu>ul>li,
            .is-header-vertical .nav-menu>ul>li {
                line-height: 90px
            }

            .is-header-small .site-branding {
                max-height: 90px
            }
        }

        @media screen and (min-width: 992px) {

            .is-header-small.is-header-smaller .site-header.clone .header-wrap,
            .is-header-row.is-header-smaller .site-header.clone .nav-menu>ul>li,
            .is-menu-bar.is-header-smaller .site-navigation.clone .nav-menu>ul>li,
            .is-menu-bar.is-header-smaller .site-header.clone .site-navigation .nav-menu>ul>li {
                line-height: 65px
            }

            .is-header-small.is-header-smaller .site-header.clone .site-branding {
                max-height: 65px
            }
        }

        .is-header-half-transparent:not(.is-menu-toggled-on) .site-header:not(.clone) .header-wrap:before {
            opacity: 0.45
        }

        .header-wrap:after {
            opacity: 0.12
        }

        .is-menu-bar .menu-wrap:after {
            opacity: 0.12
        }

        @media screen and (min-width: 992px) {
            .nav-menu>ul>li.current-menu-item>a {
                color: #fff !important
            }
        }

        @media screen and (min-width: 992px) {
            .nav-menu li.current-menu-item>a .link-text:before {
                background-color: #ff2660 !important;
                border-color: #ff2660 !important
            }
        }

        @media screen and (min-width: 992px) {

            html .nav-menu>ul>li>a:hover,
            .nav-menu>ul>li.has-submenu:hover>a {
                color: #fff
            }
        }

        @media screen and (min-width: 992px) {

            html.loaded .nav-menu ul li a .link-text:before,
            .nav-menu li.has-submenu:hover>a .link-text:before {
                background-color: #0f0f0f;
                border-color: #0f0f0f
            }
        }

        .site .footer-subscribe {
            background: #fff
        }

        .top-bar,
        .top-bar select option {
            background-color: #171717
        }

        .header-wrap:after {
            color: #222
        }

        .is-menu-bar .menu-wrap:after {
            color: #222
        }
    </style>
    <link rel=stylesheet href=../../wp-content/cache/minify/9/27efd.css media=all>
    <style id=optm_lazyload_noscript_style-inline-css>
        html.optml_no_js img[data-opt-src] {
            display: none !important
        }

        html .elementor-section[data-settings*="background_background"]:not(.optml-bg-lazyloaded),
        html .elementor-section>.elementor-background-overlay:not(.optml-bg-lazyloaded),
        html .wp-block-cover[style*="background-image"]:not(.optml-bg-lazyloaded),
        html .elementor-widget-container:not(.optml-bg-lazyloaded),
        html .elementor-background-slideshow__slide__image:not(.optml-bg-lazyloaded) {
            background-image: none !important
        }
    </style>
    <script src=../../wp-content/cache/minify/9/d9d80.js> </script> <script
        id=utils-js-extra>
        var userSettings = {
            "url": "\/efor\/",
            "uid": "0",
            "time": "1642840312",
            "secure": "1"
        };
    </script>
    <script src=../../wp-content/cache/minify/9/0b888.js> </script> <script
        id=optml-print-js-after>
        (function(w, d) {
            w.addEventListener("beforeprint", function() {
                let images = d.getElementsByTagName("img");
                for (let img of images) {
                    if (!img.dataset.optSrc) {
                        continue;
                    }
                    img.src = img.dataset.optSrc;
                    delete img.dataset.optSrc;
                }
            });
        }(window, document));
    </script>
    <link rel=https://api.w.org/ href=../../wp-json/>
    <link rel=alternate type=application/json href=../../wp-json/wp/v2/posts/1048>
        <link rel=EditURI type=application/rsd+xml title=RSD
        href=https://themes.pixelwars.org/efor/demo-06/xmlrpc.php?rsd> <link rel=wlwmanifest
        type=application/wlwmanifest+xml href=../../wp-includes/wlwmanifest.xml>
        <meta name="generator" content="WordPress 5.8.3">
    <meta name="generator" content="TutorLMS 1.9.14">
    <meta name="generator" content="WooCommerce 6.0.0">
    <link rel=canonical href=../../whats-the-point-of-self-improvement-anyway/>
    <link rel=shortlink href='../../?p=1048'>
    <link rel=alternate type=application/json+oembed
        href="../../wp-json/oembed/1.0/embed?url=https%3A%2F%2Fthemes.pixelwars.org%2Fefor%2Fdemo-06%2Fwhats-the-point-of-self-improvement-anyway%2F">
    <link rel=alternate type=text/xml+oembed
        href="../../wp-json/oembed/1.0/embed?url=https%3A%2F%2Fthemes.pixelwars.org%2Fefor%2Fdemo-06%2Fwhats-the-point-of-self-improvement-anyway%2F&#038;format=xml">
    <style>
        
    </style><noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important
            }
        </style>
    </noscript>
    <meta name="generator" content="Optimole 3.2.1">
    <style>
        img[data-opt-src]:not([data-opt-lazy-loaded]) {
            transition: .2s filter linear, .2s opacity linear, .2s border-radius linear;
            -webkit-transition: .2s filter linear, .2s opacity linear, .2s border-radius linear;
            -moz-transition: .2s filter linear, .2s opacity linear, .2s border-radius linear;
            -o-transition: .2s filter linear, .2s opacity linear, .2s border-radius linear
        }

        img[data-opt-src]:not([data-opt-lazy-loaded]) {
            opacity: .75;
            /* -webkit-filter: blur(8px);
            -moz-filter: blur(8px);
            -o-filter: blur(8px);
            -ms-filter: blur(8px);
            filter: blur(8px); */
            transform: scale(1.04);
            animation: 0.1s ease-in;
            -webkit-transform: translate3d(0, 0, 0)
        }
    </style>
    <script>
        document.documentElement.className = document.documentElement.className.replace(/\boptml_no_js\b/g, "");
        (function(w, d) {
            var b = d.getElementsByTagName("head")[0];
            var s = d.createElement("script");
            var v = ("IntersectionObserver" in w && "isIntersecting" in w.IntersectionObserverEntry.prototype) ?
                "_no_poly" : "";
            s.async = true;
            s.src = "https://mltgfb8sgh5y.i.optimole.com/js-lib/v2/latest/optimole_lib" + v + ".min.js";
            b.appendChild(s);
            w.optimoleData = {
                lazyloadOnly: "optimole-lazy-only",
                backgroundReplaceClasses: [],
                nativeLazyload: false,
                scalingDisabled: false,
                watchClasses: [],
                backgroundLazySelectors: ".elementor-section[data-settings*=\"background_background\"], .elementor-section > .elementor-background-overlay, .wp-block-cover[style*=\"background-image\"], .elementor-widget-container, .elementor-background-slideshow__slide__image",
                network_optimizations: false,
                ignoreDpr: false,
                quality: 90
            }
        }(window, document));
        document.addEventListener("DOMContentLoaded", function() {
            if ("loading" in HTMLImageElement.prototype && Object.prototype.hasOwnProperty.call(optimoleData,
                    "nativeLazyload") && optimoleData.nativeLazyload === true) {
                const images = document.querySelectorAll('img[loading="lazy"]');
                images.forEach(function(img) {
                    if (!img.dataset.optSrc) {
                        return;
                    }
                    img.src = img.dataset.optSrc;
                    delete img.dataset.optSrc;
                });
            }
        });
    </script>
    <link rel=icon
        href=../../wp-content/uploads/sites/9/2020/06/cropped-Canva-Happy-Mature-Woman-Wearing-Eyeglasses-1920.jpg
        sizes=32x32>
    <link rel=icon
        href=../../wp-content/uploads/sites/9/2020/06/cropped-Canva-Happy-Mature-Woman-Wearing-Eyeglasses-1920.jpg
        sizes=192x192>
    <link rel=apple-touch-icon
        href=../../wp-content/uploads/sites/9/2020/06/cropped-Canva-Happy-Mature-Woman-Wearing-Eyeglasses-1920.jpg>
        <meta name="msapplication-TileImage"
        content="../../wp-content/uploads/sites/9/2020/06/cropped-Canva-Happy-Mature-Woman-Wearing-Eyeglasses-1920.jpg">
</head>

<body data-rsssl=1
    class="post-template-default single single-post postid-1048 single-format-standard theme-efor woocommerce-no-js elementor-default elementor-kit-2713">
    <div id=page class="hfeed site">
        <header id=masthead class=site-header role=banner>
            <div class=header-wrap data-parallax-video>
                <div class=header-wrap-inner>
                    <div class=site-branding>
                        <div class=site-branding-wrap>
                            <div class=site-branding-center>
                                <h1 s class="site-title"> <a href= rel=home>
                                        <span class=screen-reader-text> Atlanta Graduate School</span>
                                         <span style="font-size:33px !important;"  class=site-title-text>
                                            <img src="../../wp-content/images/ags_logo.png" alt="AGS LOGO"> </span> </a></h1>
                                <p class=site-description></p>
                            </div>
                            <div class=site-branding-left></div>
                            <div class=site-branding-right></div>
                        </div>
                    </div>
                    <nav id=site-navigation class="main-navigation site-navigation" role=navigation >
                        <div class=menu-wrap>
                            <div class=layout-medium> <a class=menu-toggle> <span class=lines></span> </a> <a
                                    class=shopping-cart href=cart/
                                    title="View your shopping cart"> </a>
                                <div class=nav-menu>
                                <ul id=menu-mymenu class>
                                <li id=menu-item-1642
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home  page_item page-item-254 current_page_item menu-item-1642">
                                    <a href=../../
                                        aria-current=page>Home</a>
                                </li>
                                <li id=menu-item-1360
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1360">
                                    <a href=../../services >Start Here</a>
                                </li>
                                <li id=menu-item-1539
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1539">
                                    <a href=../../courses>Courses</a>
                                </li>
                                <li id=menu-item-1358
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1358 current-menu-item">
                                    <a href=../../conference >Conferences</a>
                                </li>
                                <li id=menu-item-1828
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1828">
                                    <a href=../../blog  >Blog</a>
                                </li>
                                <li id=menu-item-1359
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1359 dropdown">
                                    <a href=../../contact >Contact Us</a>
                                </li>
                            </ul>
                                </div> 
                                <!-- <a class="search-toggle toggle-link"></a> -->
                                <!-- <div class=search-container>
                                    <div class=search-box role=search>
                                        <form class=search-form method=get
                                            action=https://themes.pixelwars.org/efor/demo-06 /> <label> <span> Search
                                                for
                                            </span> <input type=search id=search-field name=s
                                                placeholder="type and hit enter"> </label> <input type=submit
                                            class=search-submit value=Search></form>
                                    </div>
                                </div> -->
                                <!-- <div class="social-container widget-area">  -->
                                    <!-- <a class="social-link facebook" target=_blank
                                        href=#></a> <a class="social-link twitter" target=_blank href=#>
        
                                        </a> <a
                                        class="social-link instagram" target=_blank href=#></a> <a
                                        class="social-link linkedin" target=_blank href=#></a> -->
                                    <!-- </div> -->
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        <section class="top-content-single is-top-content-single-full-screen with-overlay">
            <div class=layout-medium>
                <div class="post-header post-header-overlay is-post-dark is-cat-link-solid-light is-cat-link-rounded">
                    <div class=post-thumbnail
                        style="background-image: url(../../admin/postimages/<?php echo $row['conf_images'] ;  ?>);"
                        data-medium-image=../../admin/postimages/<?php echo $row['conf_images'] ;  ?>
                        data-large-image=../../admin/postimages/<?php echo $row['conf_images'] ;  ?>>
                        <div class=post-wrap>
                        <header class=entry-header>
                            <h1 class="entry-title"><?php echo $row['conf_title']; ?></h1>
                            <div class="entry-meta below-title"> <span class=cat-links>  <a
                                    
                                        rel=bookmark> <time class="entry-date published"
                                            datetime=<?php echo $years; ?>><?php echo $years; ?></time> <time
                                            class=updated datetime=<?php echo $years; ?>> <?php echo $years; ?> </time> </a>
                                </span> 
                                         </div>
                        </header> <span class=scrolldown></span>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <div id=main class=site-main>
        <div class=layout-medium>
            <div id=primary class="content-area with-sidebar">
                <div id=content class=site-content role=main>
                    <article id=post-1048
                        class="post-1048 post type-post status-publish format-standard has-post-thumbnail hentry category-life tag-be-better tag-improve tag-self is-cat-link-solid-light is-cat-link-rounded">
                        <div class=hentry-wrap>
                            <div class=entry-content>
                                            
                                <?php
                                
                                echo $row['conf_description'];

                                ?>
                                
                            </div>
                            <div class=share-links>
                                <h3>Share This</h3> <a class=share-facebook rel=nofollow target=_blank
                                    href="https://www.facebook.com/sharer.php?u=<?php   echo $row['conf_title'];     ?>"
                                    title="Share this post on Facebook"> <i class=pw-icon-facebook></i> </a> <a
                                    class=share-twitter rel=nofollow target=_blank
                                    href="https://twitter.com/intent/tweet?text=<?php   echo $row['conf_title'];     ?>"
                                    title="Tweet this post to your followers"> <i class=pw-icon-twitter></i> </a> <a
                                    class=share-pinterest rel=nofollow target=_blank
                                    href="https://pinterest.com/pin/create/button/?url=<?php   echo $row['conf_title'];     ?>"
                                    title="Pin it"> <i class=pw-icon-pinterest></i> </a> <a class=share-mail
                                    rel=nofollow target=_blank
                                    href="mailto:?subject=<?php   echo $row['posttitle'];     ?>"
                                    title="Email this post to a friend"> <i class=pw-icon-mail></i> </a>
                            </div>
                         
            
                <div class=related-posts>
                    <h3 class="widget-title"> <span>You May Also Like</span></h3>
                    <div class=blocks>
<?php

                    $query=mysqli_query($con,"SELECT * FROM `conference` ORDER BY `id` DESC  LIMIT 0 , 2");
while ($row=mysqli_fetch_array($query)) {
?>


                        <div class=block>
                            <div class=post-thumbnail
                                style="background-image: url(../../admin/postimages/<?php echo $row['conf_images'] ;  ?>);">
                                <div class=post-wrap>
                                    <header class=entry-header>
                                        <div class=entry-meta></div>
                                        <h2 class="entry-title"> <a
                                        href="index.php?single=<?php   echo $row['id'];     ?>">
                                                  <?php   echo  $row['conf_title'];?></a></h2> <a class=more-link
                                                  href="index.php?single=<?php   echo $row['id'];     ?>" ></a>
                                    </header>
                                </div>
                            </div>
                        </div>
                 
<?php

}


?>





                    </div>
                </div>
                </article>

        <div id=secondary class="widget-area sidebar" role=complementary>
            <div class=sidebar-wrap>
                <div class=sidebar-content>
                    <ul>
                        
                    </ul>
                 
                   
                </div>
            </div>
        </div>
    </div>
    </div>
    <footer id=colophon class=site-footer role=contentinfo>
        <div class=footer-insta>
            <div class="textwidget custom-html-widget">
                <style>
                    #insta-gallery-feed-132564044 .insta-gallery-list .insta-gallery-item .insta-gallery-image-wrap .insta-gallery-image-mask {
                        background-color: #000
                    }
                </style>
                <div id=insta-gallery-feed-132564044 class="insta-gallery-feed insta-gallery-square"
                    data-feed="{&quot;id&quot;:0,&quot;order&quot;:1,&quot;username&quot;:&quot;17841405319103370&quot;,&quot;type&quot;:&quot;username&quot;,&quot;tag&quot;:&quot;wordpress&quot;,&quot;order_by&quot;:&quot;top_media&quot;,&quot;layout&quot;:&quot;gallery&quot;,&quot;limit&quot;:&quot;12&quot;,&quot;columns&quot;:&quot;12&quot;,&quot;resolution&quot;:&quot;standard&quot;,&quot;lazy&quot;:false,&quot;spacing&quot;:0,&quot;highlight&quot;:[&quot;1&quot;,&quot;3&quot;,&quot;5&quot;],&quot;profile&quot;:{&quot;id&quot;:&quot;17841405319103370&quot;,&quot;username&quot;:&quot;minimal.pwr&quot;,&quot;website&quot;:&quot;&quot;,&quot;biography&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;followers_count&quot;:0,&quot;media_count&quot;:12,&quot;profile_picture_url&quot;:&quot;http:\/\/2.gravatar.com\/avatar\/b642b4217b34b1e8d3bd915fc65c4452?s=320&amp;d=mm&amp;r=g&quot;,&quot;link&quot;:&quot;&quot;,&quot;account_type&quot;:&quot;PERSONAL&quot;},&quot;box&quot;:{&quot;display&quot;:false,&quot;padding&quot;:&quot;1&quot;,&quot;radius&quot;:&quot;0&quot;,&quot;background&quot;:&quot;#fefefe&quot;,&quot;profile&quot;:false,&quot;desc&quot;:&quot;&quot;,&quot;color_text&quot;:&quot;#000000&quot;},&quot;mask&quot;:{&quot;display&quot;:false,&quot;background&quot;:&quot;#000000&quot;,&quot;likes&quot;:true,&quot;comments&quot;:true},&quot;card&quot;:{&quot;display&quot;:false,&quot;radius&quot;:&quot;1&quot;,&quot;font_size&quot;:&quot;12&quot;,&quot;background&quot;:&quot;#ffffff&quot;,&quot;text_color&quot;:&quot;#000000&quot;,&quot;padding&quot;:&quot;5&quot;,&quot;info&quot;:true,&quot;length&quot;:&quot;10&quot;,&quot;caption&quot;:true},&quot;carousel&quot;:{&quot;slidespv&quot;:&quot;5&quot;,&quot;autoplay&quot;:false,&quot;autoplay_interval&quot;:&quot;3000&quot;,&quot;navarrows&quot;:true,&quot;navarrows_color&quot;:&quot;&quot;,&quot;pagination&quot;:true,&quot;pagination_color&quot;:&quot;&quot;},&quot;popup&quot;:{&quot;display&quot;:false,&quot;profile&quot;:false,&quot;caption&quot;:false,&quot;likes&quot;:false,&quot;comments&quot;:false,&quot;align&quot;:&quot;bottom&quot;},&quot;button&quot;:{&quot;display&quot;:false,&quot;text&quot;:&quot;View on Instagram&quot;,&quot;background&quot;:&quot;&quot;,&quot;background_hover&quot;:&quot;&quot;},&quot;button_load&quot;:{&quot;display&quot;:false,&quot;text&quot;:&quot;Load more...&quot;,&quot;background&quot;:&quot;&quot;,&quot;background_hover&quot;:&quot;&quot;},&quot;panel&quot;:&quot;tab_panel_feed_button_load&quot;,&quot;insta_layout&quot;:&quot;gallery&quot;,&quot;insta_box&quot;:false,&quot;insta_box-padding&quot;:&quot;1&quot;,&quot;insta_box-radius&quot;:&quot;0&quot;,&quot;insta_box-background&quot;:&quot;#fefefe&quot;,&quot;insta_box-profile&quot;:false,&quot;insta_box-desc&quot;:&quot;&quot;,&quot;insta_box-color-text&quot;:&quot;#000000&quot;,&quot;insta_button_load&quot;:false,&quot;insta_button_load-background-hover&quot;:&quot;&quot;,&quot;insta_button_load-background&quot;:&quot;&quot;,&quot;insta_button_load-text&quot;:&quot;Load more...&quot;,&quot;insta_button&quot;:false,&quot;insta_button-background-hover&quot;:&quot;&quot;,&quot;insta_button-background&quot;:&quot;&quot;,&quot;insta_button-text&quot;:&quot;View on Instagram&quot;,&quot;insta_card&quot;:false,&quot;insta_card-font-size&quot;:&quot;12&quot;,&quot;insta_card-color-text&quot;:&quot;#000000&quot;,&quot;insta_card-padding&quot;:&quot;5&quot;,&quot;insta_card-radius&quot;:&quot;1&quot;,&quot;insta_card-background&quot;:&quot;#ffffff&quot;}"
                    data-feed_layout=gallery>
                    <div class=insta-gallery-list></div>
                    <div class=insta-gallery-spinner></div>
                </div>
            </div>
        </div>
        <div class=site-info>
            <div class=textwidget>
                <p>2022 Atlanta Graduate School &#8211; All Rights Reserved</p>
            </div>
        </div>
    </footer>
    </div>
    <div class=tutor-cart-box-login-form style="display: none"><span class=login-overlay-close></span>
        <div class=tutor-cart-box-login-form-inner><button
                class="tutor-popup-form-close tutor-icon-line-cross"></button>
            <div class="tutor-single-course-segment tutor-course-login-wrap">
                <div class=course-login-title>
                    <h4>Login</h4>
                </div>
                <div class=tutor-single-course-login-form>
                    <div class=tutor-login-form-wrap>
                        <form name=loginform id=loginform method=post> <input type=hidden
                                name=tutor_course_enroll_attempt value> <input type=hidden id=_tutor_nonce
                                name=_tutor_nonce value=0f62fae010><input type=hidden name=_wp_http_referer
                                value=/efor/demo-06/whats-the-point-of-self-improvement-anyway/> <input type=hidden
                                name=tutor_action value=tutor_user_login>
                            <p class=login-username> <input type=text placeholder="Username or Email Address" name=log
                                    id=user_login class=input value></p>
                            <p class=login-password> <input type=password placeholder=Password name=pwd id=user_pass
                                    class=input value></p>
                            <div class=tutor-login-rememeber-wrap>
                                <p class=login-remember> <label> <input name=rememberme type=checkbox id=rememberme
                                            value=forever> Remember Me </label></p> <a
                                    href=../../dashboard/retrieve-password> Forgot
                                    Password? </a> </div> <p class=login-submit> <input type=submit name=wp-submit
                                        id=wp-submit class=tutor-button value="Log In"> <input type=hidden
                                        name=redirect_to
                                        value=../../whats-the-point-of-self-improvement-anyway/>
                                    </p>
                                    <p class=tutor-form-register-wrap> <a
                                            href="../../student-registration/?redirect_to=../../whats-the-point-of-self-improvement-anyway/">
                                            Create a new account </a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <link rel=stylesheet href=../../wp-content/cache/minify/9/6d280.css media=all>
    <script id=dot-irecommendthis-js-extra>
        var dot_irecommendthis = {
            "ajaxurl": "https:\/\/themes.pixelwars.org\/efor\/demo-06\/wp-admin\/admin-ajax.php"
        };
    </script>
    <script src=../../wp-content/cache/minify/9/0c049.js> </script> <script
        id=tptn_tracker-js-extra>
        var ajax_tptn_tracker = {
            "ajax_url": "https:\/\/themes.pixelwars.org\/efor\/demo-06\/",
            "top_ten_id": "1048",
            "top_ten_blog_id": "9",
            "activate_counter": "11",
            "top_ten_debug": "0",
            "tptn_rnd": "875285341"
        };
    </script>
    <script src=../../wp-content/cache/minify/9/cca73.js> </script> <script
        id=editor-js-after>
        window.wp.oldEditor = window.wp.editor;
    </script>
    <script id=quicktags-js-extra>
        var quicktagsL10n = {
            "closeAllOpenTags": "Close all open tags",
            "closeTags": "close tags",
            "enterURL": "Enter the URL",
            "enterImageURL": "Enter the URL of the image",
            "enterImageDescription": "Enter a description of the image",
            "textdirection": "text direction",
            "toggleTextdirection": "Toggle Editor Text Direction",
            "dfw": "Distraction-free writing mode",
            "strong": "Bold",
            "strongClose": "Close bold tag",
            "em": "Italic",
            "emClose": "Close italic tag",
            "link": "Insert link",
            "blockquote": "Blockquote",
            "blockquoteClose": "Close blockquote tag",
            "del": "Deleted text (strikethrough)",
            "delClose": "Close deleted text tag",
            "ins": "Inserted text",
            "insClose": "Close inserted text tag",
            "image": "Insert image",
            "ul": "Bulleted list",
            "ulClose": "Close bulleted list tag",
            "ol": "Numbered list",
            "olClose": "Close numbered list tag",
            "li": "List item",
            "liClose": "Close list item tag",
            "code": "Code",
            "codeClose": "Close code tag",
            "more": "Insert Read More tag"
        };
    </script>
    <script src=../../wp-content/cache/minify/9/306ee.js> </script> <script
        id=wp-i18n-js-after>
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
    </script>
    <script id=wp-a11y-js-translations>
        (function(domain, translations) {
            var localeData = translations.locale_data[domain] || translations.locale_data.messages;
            localeData[""].domain = domain;
            wp.i18n.setLocaleData(localeData, domain);
        })("default", {
            "locale_data": {
                "messages": {
                    "": {}
                }
            }
        });
    </script>
    <script src=../../wp-content/cache/minify/9/2ec25.js> </script> <script
        id=wplink-js-extra>
        var wpLinkL10n = {
            "title": "Insert\/edit link",
            "update": "Update",
            "save": "Add Link",
            "noTitle": "(no title)",
            "noMatchesFound": "No results found.",
            "linkSelected": "Link selected.",
            "linkInserted": "Link inserted.",
            "minInputLength": "3"
        };
    </script>
    <script src=../../wp-content/cache/minify/9/b05b9.js> </script> <script
        id=jquery-ui-autocomplete-js-extra>
        var uiAutocompleteL10n = {
            "noResults": "No results found.",
            "oneResult": "1 result found. Use up and down arrow keys to navigate.",
            "manyResults": "%d results found. Use up and down arrow keys to navigate.",
            "itemSelected": "Item selected."
        };
    </script>
    <script src=../../wp-content/cache/minify/9/a4b73.js> </script> <script
        id=thickbox-js-extra>
        /*<![CDATA[*/
        var thickboxL10n = {
            "next": "Next >",
            "prev": "< Prev",
            "image": "Image",
            "of": "of",
            "close": "Close",
            "noiframes": "This feature requires inline frames. You have iframes disabled or your browser does not support them.",
            "loadingAnimation": "https:\/\/mltgfb8sgh5y.i.optimole.com\/3Vuqt6I.vAfL~2a7bd\/w:auto\/h:auto\/q:90\/https:\/\/themes.pixelwars.org\/efor\/demo-06\/wp-includes\/js\/thickbox\/loadingAnimation.gif"
        }; /*]]>*/
    </script>
    <script src=../../wp-content/cache/minify/9/3d28e.js> </script> <script
        id=tutor-frontend-js-extra>
        var _tutorobject = {
            "ajaxurl": "https:\/\/themes.pixelwars.org\/efor\/demo-06\/wp-admin\/admin-ajax.php",
            "home_url": "https:\/\/themes.pixelwars.org\/efor\/demo-06",
            "base_path": "\/efor\/demo-06\/",
            "tutor_url": "https:\/\/themes.pixelwars.org\/efor\/demo-06\/wp-content\/plugins\/tutor\/",
            "tutor_pro_url": "https:\/\/themes.pixelwars.org\/efor\/demo-06\/wp-content\/plugins\/tutor-pro\/",
            "nonce_key": "_tutor_nonce",
            "_tutor_nonce": "0f62fae010",
            "loading_icon_url": "https:\/\/mltgfb8sgh5y.i.optimole.com\/3Vuqt6I.vAfL~2a7bd\/w:auto\/h:auto\/q:90\/https:\/\/themes.pixelwars.org\/efor\/demo-06\/wp-admin\/images\/wpspin_light.gif",
            "placeholder_img_src": "https:\/\/mltgfb8sgh5y.i.optimole.com\/3Vuqt6I.vAfL~2a7bd\/w:auto\/h:auto\/q:90\/https:\/\/themes.pixelwars.org\/efor\/demo-06\/wp-content\/plugins\/tutor\/assets\/images\/placeholder.jpg",
            "enable_lesson_classic_editor": "",
            "tutor_frontend_dashboard_url": "https:\/\/themes.pixelwars.org\/efor\/demo-06\/dashboard\/",
            "wp_date_format": "MM dd, yy",
            "is_admin": "",
            "is_admin_bar_showing": ""
        };
    </script>
    <script id=tutor-frontend-js-translations>
        (function(domain, translations) {
            var localeData = translations.locale_data[domain] || translations.locale_data.messages;
            localeData[""].domain = domain;
            wp.i18n.setLocaleData(localeData, domain);
        })("tutor", {
            "locale_data": {
                "messages": {
                    "": {}
                }
            }
        });
    </script>
    <script src=../../wp-content/cache/minify/9/1d69c.js> </script> <script
        id=jquery-ui-datepicker-js-after>
        jQuery(document).ready(function(jQuery) {
            jQuery.datepicker.setDefaults({
                "closeText": "Close",
                "currentText": "Today",
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August",
                    "September", "October", "November", "December"
                ],
                "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep",
                    "Oct", "Nov", "Dec"
                ],
                "nextText": "Next",
                "prevText": "Previous",
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday",
                    "Saturday"
                ],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "dateFormat": "MM d, yy",
                "firstDay": 1,
                "isRTL": false
            });
        });
    </script>
    <script src=../../wp-content/cache/minify/9/a6fa3.js> </script> <script
        id=wc-add-to-cart-js-extra>
        var wc_add_to_cart_params = {
            "ajax_url": "\/efor\/demo-06\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/efor\/demo-06\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/themes.pixelwars.org\/efor\/demo-06\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "yes"
        };
    </script>
    <script src=../../wp-content/cache/minify/9/71c70.js> </script> <script
        id=woocommerce-js-extra>
        var woocommerce_params = {
            "ajax_url": "\/efor\/demo-06\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/efor\/demo-06\/?wc-ajax=%%endpoint%%"
        };
    </script>
    <script src=../../wp-content/cache/minify/9/7847a.js> </script> <script
        id=wc-cart-fragments-js-extra>
        var wc_cart_fragments_params = {
            "ajax_url": "\/efor\/demo-06\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/efor\/demo-06\/?wc-ajax=%%endpoint%%",
            "cart_hash_key": "wc_cart_hash_7b61569cb8e34527063d9ace01a423a9",
            "fragment_name": "wc_fragments_7b61569cb8e34527063d9ace01a423a9",
            "request_timeout": "5000"
        };
    </script>
    <script src=../../wp-content/cache/minify/9/ce2ca.js> </script> <script
        id=jqueryvalidation-js-after>
        (function($) {
            "use strict";
            $.extend($.validator.messages, {
                required: "This field is required.",
                remote: "Please fix this field.",
                email: "Please enter a valid email address.",
                url: "Please enter a valid URL.",
                date: "Please enter a valid date.",
                dateISO: "Please enter a valid date ( ISO ).",
                number: "Please enter a valid number.",
                digits: "Please enter only digits.",
                equalTo: "Please enter the same value again.",
                maxlength: $.validator.format("Please enter no more than {0} characters."),
                minlength: $.validator.format("Please enter at least {0} characters."),
                rangelength: $.validator.format(
                    "Please enter a value between {0} and {1} characters long."),
                range: $.validator.format("Please enter a value between {0} and {1}."),
                max: $.validator.format("Please enter a value less than or equal to {0}."),
                min: $.validator.format("Please enter a value greater than or equal to {0}."),
                step: $.validator.format("Please enter a multiple of {0}.")
            });
        })(jQuery);
    </script>
    <script src=../../wp-content/cache/minify/9/8dfd9.js> </script> <script
        id=insta-gallery-js-extra>
        var qligg = {
            "ajax_url": "https:\/\/themes.pixelwars.org\/efor\/demo-06\/wp-admin\/admin-ajax.php"
        };
    </script>
    <script src=../../wp-content/cache/minify/9/404bb.js> </script> <script>
        window.wp = window.wp || {};
        window.wp.editor = window.wp.editor || {};
        window.wp.editor.getDefaultSettings = function() {
            return {
                tinymce: {},
                quicktags: {
                    buttons: 'strong,em,link,ul,ol,li,code'
                }
            };
        };
    </script>
    <div id=wp-link-backdrop style="display: none"></div>
    <div id=wp-link-wrap class=wp-core-ui style="display: none" role=dialog aria-labelledby=link-modal-title>
        <form id=wp-link tabindex=-1> <input type=hidden id=_ajax_linking_nonce name=_ajax_linking_nonce
                value=5aa36853ad>
            <h1 id="link-modal-title">Insert/edit link</h1> <button type=button id=wp-link-close><span
                    class=screen-reader-text>Close</span></button>
            <div id=link-selector>
                <div id=link-options>
                    <p class=howto id=wplink-enter-url>Enter the destination URL</p>
                    <div> <label><span>URL</span> <input id=wp-link-url type=text
                                aria-describedby=wplink-enter-url></label></div>
                    <div class=wp-link-text-field> <label><span>Link Text</span> <input id=wp-link-text
                                type=text></label></div>
                    <div class=link-target> <label><span></span> <input type=checkbox id=wp-link-target> Open link in a
                            new tab</label></div>
                </div>
                <p class=howto id=wplink-link-existing-content>Or link to existing content</p>
                <div id=search-panel>
                    <div class=link-search-wrapper> <label> <span class=search-label>Search</span> <input type=search
                                id=wp-link-search class=link-search-field autocomplete=off
                                aria-describedby=wplink-link-existing-content> <span class=spinner></span> </label>
                    </div>
                    <div id=search-results class=query-results tabindex=0>
                        <ul></ul>
                        <div class=river-waiting> <span class=spinner></span></div>
                    </div>
                    <div id=most-recent-results class=query-results tabindex=0>
                        <div class=query-notice id=query-notice-message> <em class=query-notice-default>No search term
                                specified. Showing recent items.</em> <em
                                class="query-notice-hint screen-reader-text">Search or use up and down arrow keys to
                                select an item.</em></div>
                        <ul></ul>
                        <div class=river-waiting> <span class=spinner></span></div>
                    </div>
                </div>
            </div>
            <div class=submitbox>
                <div id=wp-link-cancel> <button type=button class=button>Cancel</button></div>
                <div id=wp-link-update> <input type=submit value="Add Link" class="button button-primary"
                        id=wp-link-submit name=wp-link-submit></div>
            </div>
        </form>
    </div>
</body>



</html>
<?php
endif;

?>