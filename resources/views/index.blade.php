@extends('master.app')

@section('content')
    <div id="wrapper" class="wrap overflow-hidden-x">

        <!-- Hero Section -->
        <div class="block-slider block-slider-miniposts panel swiper-parent uc-dark">
            <div class="swiper-main swiper"
                data-uc-swiper="connect: .swiper-thumbs; items: 1; autoplay: 5000; active: 1; gap: 0; dots: .swiper-pagination; disable-class: opacity-30; effect: fade; fade: true;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <article class="post type-post">
                            <figure hidden class="post-featured-image panel m-0">
                                <canvas class="h-300px sm:h-400px lg:h-500px"></canvas>
                                <img class="media-cover image" src="../assets/images/main/posts/img-09.jpg"
                                    alt="Hidden Gems: Underrated Travel Destinations Around the World"
                                    data-uc-scrollspy="cls: uc-animation-kenburns; repeat: true">
                                <a href="blog-details.html" class="position-cover"></a>
                            </figure>
                            <div class="featured-image bg-gray-25 dark:bg-gray-800">
                                <canvas class="min-h-300px lg:min-h-500px"></canvas>
                                <img class="media-cover image" src="../assets/images/common/img-fallback.png"
                                    data-src="../assets/images/main/posts/img-09.jpg"
                                    alt="Hidden Gems: Underrated Travel Destinations Around the World"
                                    data-uc-img="loading: lazy">
                            </div>
                            <div class="d-block position-cover bg-gradient-to-r from-black to-transparent z-1 opacity-60">
                            </div>
                            <div class="panel max-w-xl mx-auto px-2 z-3">
                                <div
                                    class="post-header panel position-absolute bottom-0 vstack justify-between gap-2 xl:gap-4 max-w-600px mb-4 xl:mb-8">
                                    <div class="post-top hstack gap-narrow">
                                        <div
                                            class="post-category hstack gap-narrow fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                            <a class="text-none" href="blog-category.html">AI Powered</a>
                                        </div>
                                    </div>
                                    <h3 class="post-title h4 lg:h3 xl:h2 m-0 text-truncate-2" data-swiper-parallax="-48">
                                        <a class="text-none" href="blog-details.html">Hidden Gems: Underrated Travel
                                            Destinations Around the World</a>
                                    </h3>
                                    <div>
                                        <div
                                            class="post-meta panel hstack justify-between fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                            <div class="meta">
                                                <div class="hstack gap-2">
                                                    <div>
                                                        <div class="post-author hstack gap-1">
                                                            <span>By</span>
                                                            <a href="page-author.html"
                                                                class="text-black dark:text-white text-none fw-bold">David
                                                                Peterson</a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="post-date hstack gap-narrow">
                                                            <span>Feb 14, 2024</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#post_comment"
                                                            class="post-comments text-none hstack gap-narrow">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <div class="hstack gap-1"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="post type-post">
                            <figure hidden class="post-featured-image panel m-0">
                                <canvas class="h-300px sm:h-400px lg:h-500px"></canvas>
                                <img class="media-cover image" src="../assets/images/main/posts/img-10.jpg"
                                    alt="Eco-Tourism: Traveling Responsibly and Sustainably"
                                    data-uc-scrollspy="cls: uc-animation-kenburns; repeat: true">
                                <a href="blog-details.html" class="position-cover"></a>
                            </figure>
                            <div class="featured-image bg-gray-25 dark:bg-gray-800">
                                <canvas class="min-h-300px lg:min-h-500px"></canvas>
                                <img class="media-cover image" src="../assets/images/common/img-fallback.png"
                                    data-src="../assets/images/main/posts/img-10.jpg"
                                    alt="Eco-Tourism: Traveling Responsibly and Sustainably" data-uc-img="loading: lazy">
                            </div>
                            <div class="d-block position-cover bg-gradient-to-r from-black to-transparent z-1 opacity-60">
                            </div>
                            <div class="panel max-w-xl mx-auto px-2 z-3">
                                <div
                                    class="post-header panel position-absolute bottom-0 vstack justify-between gap-2 xl:gap-4 max-w-600px mb-4 xl:mb-8">
                                    <div class="post-top hstack gap-narrow">
                                        <div
                                            class="post-category hstack gap-narrow fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                            <a class="text-none" href="blog-category.html">Trips</a>
                                        </div>
                                    </div>
                                    <h3 class="post-title h4 lg:h3 xl:h2 m-0 text-truncate-2" data-swiper-parallax="-48">
                                        <a class="text-none" href="blog-details.html">Eco-Tourism: Traveling Responsibly and
                                            Sustainably</a>
                                    </h3>
                                    <div>
                                        <div
                                            class="post-meta panel hstack justify-between fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                            <div class="meta">
                                                <div class="hstack gap-2">
                                                    <div>
                                                        <div class="post-author hstack gap-1">
                                                            <span>By</span>
                                                            <a href="page-author.html"
                                                                class="text-black dark:text-white text-none fw-bold">David
                                                                Peterson</a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="post-date hstack gap-narrow">
                                                            <span>Feb 8, 2024</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#post_comment"
                                                            class="post-comments text-none hstack gap-narrow">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <div class="hstack gap-1"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="post type-post">
                            <figure hidden class="post-featured-image panel m-0">
                                <canvas class="h-300px sm:h-400px lg:h-500px"></canvas>
                                <img class="media-cover image" src="../assets/images/main/posts/img-11.jpg"
                                    alt="Solo Travel: Some Tips and Destinations for the Adventurous Explorer"
                                    data-uc-scrollspy="cls: uc-animation-kenburns; repeat: true">
                                <a href="blog-details.html" class="position-cover"></a>
                            </figure>
                            <div class="featured-image bg-gray-25 dark:bg-gray-800">
                                <canvas class="min-h-300px lg:min-h-500px"></canvas>
                                <img class="media-cover image" src="../assets/images/common/img-fallback.png"
                                    data-src="../assets/images/main/posts/img-11.jpg"
                                    alt="Solo Travel: Some Tips and Destinations for the Adventurous Explorer"
                                    data-uc-img="loading: lazy">
                            </div>
                            <div class="d-block position-cover bg-gradient-to-r from-black to-transparent z-1 opacity-60">
                            </div>
                            <div class="panel max-w-xl mx-auto px-2 z-3">
                                <div
                                    class="post-header panel position-absolute bottom-0 vstack justify-between gap-2 xl:gap-4 max-w-600px mb-4 xl:mb-8">
                                    <div class="post-top hstack gap-narrow">
                                        <div
                                            class="post-category hstack gap-narrow fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                            <a class="text-none" href="blog-category.html">Travel</a>
                                        </div>
                                    </div>
                                    <h3 class="post-title h4 lg:h3 xl:h2 m-0 text-truncate-2" data-swiper-parallax="-48">
                                        <a class="text-none" href="blog-details.html">Solo Travel: Some Tips and
                                            Destinations for the Adventurous Explorer</a>
                                    </h3>
                                    <div>
                                        <div
                                            class="post-meta panel hstack justify-between fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                            <div class="meta">
                                                <div class="hstack gap-2">
                                                    <div>
                                                        <div class="post-author hstack gap-1">
                                                            <span>By</span>
                                                            <a href="page-author.html"
                                                                class="text-black dark:text-white text-none fw-bold">Peter
                                                                Sawyer</a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="post-date hstack gap-narrow">
                                                            <span>Jan 8, 2024</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#post_comment"
                                                            class="post-comments text-none hstack gap-narrow">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <div class="hstack gap-1"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <!-- Add Arrows -->
                <div class="swiper-navigation position-cover panel max-w-xl mx-auto px-2 mt-2 xl:mt-8">
                    <div class="hstack justify-end md:justify-start gap-1">
                        <div
                            class="swiper-nav swiper-prev btn w-40px lg:w-48px h-40px lg:h-48px p-0 border-0 bg-white bg-opacity-30 hover:bg-primary hover:bg-opacity-100 text-white rounded-circle shadow-xs z-1">
                            <i class="fa-solid fa-chevron-left"></i>
                        </div>
                        <div
                            class="swiper-nav swiper-next btn w-40px lg:w-48px h-40px lg:h-48px p-0 border-0 bg-white bg-opacity-30 hover:bg-primary hover:bg-opacity-100 text-white rounded-circle shadow-xs z-1">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="position-absolute top-0 end-0 bottom-0 w-1/2 bg-gradient-to-l from-black to-transparent opacity-70 z-1 d-none lg:d-block">
            </div>
            <div class="slider-thumbs-wrap d-none lg:d-block">
                <div class="container container-2xl">
                    <div class="panel">
                        <div class="swiper swiper-thumbs position-absolute end-0 bottom-0 max-h-300px max-w-300px mb-4 xl:mb-8 z-2"
                            data-uc-swiper="items: 3; gap: 16; direction: vertical; mousewheel: true; freeMode: true;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <article class="post type-post">
                                        <div class="post-header panel vstack justify-between gap-1 lg:gap-2">
                                            <div>
                                                <div
                                                    class="post-meta panel hstack justify-between fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                    <div class="meta">
                                                        <div class="hstack gap-2">
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <span>Mar 8, 2024</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="hstack gap-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="h6 m-0 text-truncate-2">The Rise of AI-Powered Personal Assistants:
                                                How They Manage</h3>
                                        </div>
                                    </article>
                                </div>
                                <div class="swiper-slide">
                                    <article class="post type-post">
                                        <div class="post-header panel vstack justify-between gap-1 lg:gap-2">
                                            <div>
                                                <div
                                                    class="post-meta panel hstack justify-between fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                    <div class="meta">
                                                        <div class="hstack gap-2">
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <span>Mar 8, 2024</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="hstack gap-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="h6 m-0 text-truncate-2">Tech Innovations Reshaping the Retail
                                                Landscape: AI Payments</h3>
                                        </div>
                                    </article>
                                </div>
                                <div class="swiper-slide">
                                    <article class="post type-post">
                                        <div class="post-header panel vstack justify-between gap-1 lg:gap-2">
                                            <div>
                                                <div
                                                    class="post-meta panel hstack justify-between fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                    <div class="meta">
                                                        <div class="hstack gap-2">
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <span>Mar 8, 2024</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="hstack gap-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="h6 m-0 text-truncate-2">Balancing Work and Wellness: Tech Solutions
                                                for Healthy</h3>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Section end -->

        <!-- Iklan Section 1 start -->
        <div class="section panel overflow-hidden">
            <div class="section-outer panel pt-5 lg:pt-8">
                <div class="container max-w-xl">
                    <div class="section-inner">
                        <a class="text-none" href="https://themeforest.net/user/reacthemes/portfolio" target="_blank"
                            rel="nofollow">
                            <img class="d-none md:d-block" src="../assets/images/common/ad-slot.jpg" alt="Ad slot">
                            <img class="d-block md:d-none" src="../assets/images/common/ad-slot-mobile.jpg"
                                alt="Ad slot">
                        </a>
                    </div>
                </div>
            </div>
        </div>
         <!-- Iklan Sectio 1 end -->

         <!-- Latest News start -->
        <div id="latest-news" class="latest-news section panel overflow-hidden">
            <div class="section-outer panel py-5 lg:py-8">
                <div class="container max-w-xl">
                    <div class="section-inner panel vstack gap-4">
                        <div class="section-header panel vstack items-center justify-center text-center gap-1">
                            <h2 class="h4 xl:h3 -ls-1 xl:-ls-2 m-0 text-inherit hstack gap-1">
                                <span class="panel d-inline-block bg-primary w-8px h-8px translate-y-px"></span>
                                <span>Latest news</span>-
                            </h2>
                        </div>
                        <div class="section-content">
                            <div
                                class="row child-cols-12 sm:child-cols-6 md:child-cols-4 lg:child-cols-3 g-2 gy-4 md:g-3 md:gy-5 xl:g-4 xl:gy-6">
                                <div>
                                    <article class="post type-post panel vstack gap-1 lg:gap-2">
                                        <div class="post-media panel uc-transition-toggle overflow-hidden">
                                            <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                    src="../assets/images/common/img-fallback.png"
                                                    data-src="../assets/images/main/posts/img-01.jpg"
                                                    alt="The Rise of AI-Powered Personal Assistants: How They Manage"
                                                    data-uc-img="loading: lazy">
                                            </div>
                                            <a href="blog-details.html" class="position-cover"></a>
                                        </div>
                                        <div class="post-header panel vstack gap-1">
                                            <div
                                                class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                <div>
                                                    <div class="post-category hstack gap-narrow fw-medium">
                                                        <a class="text-none text-primary dark:text-white"
                                                            href="blog-category.html">Gadgets</a>
                                                    </div>
                                                </div>
                                                <div class="sep d-none md:d-block">❘</div>
                                                <div class="d-none md:d-block">
                                                    <div class="post-date hstack gap-narrow">
                                                        <span>1min ago</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="cstack w-16px h-16px ms-narrow d-none md:d-inline-flex position-absolute top-0 end-0">
                                                    <a href="#" class="uc-bookmark-toggle w-16px h-16px text-none"
                                                        data-uc-tooltip="Add to bookmark"><i
                                                            class="icon-narrow unicon-bookmark-add"></i></a>
                                                </div>
                                            </div>
                                            <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                                <a class="text-none hover:text-primary duration-150"
                                                    href="blog-details.html">The Rise of AI-Powered Personal Assistants:
                                                    How They Manage</a>
                                            </h3>
                                        </div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post type-post panel vstack gap-1 lg:gap-2">
                                        <div class="post-media panel uc-transition-toggle overflow-hidden">
                                            <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                    src="../assets/images/common/img-fallback.png"
                                                    data-src="../assets/images/main/posts/img-02.jpg"
                                                    alt="Tech Innovations Reshaping the Retail Landscape: AI Payments"
                                                    data-uc-img="loading: lazy">
                                            </div>
                                            <a href="blog-details.html" class="position-cover"></a>
                                        </div>
                                        <div class="post-header panel vstack gap-1">
                                            <div
                                                class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                <div>
                                                    <div class="post-category hstack gap-narrow fw-medium">
                                                        <a class="text-none text-primary dark:text-white"
                                                            href="blog-category.html">Startups</a>
                                                    </div>
                                                </div>
                                                <div class="sep d-none md:d-block">❘</div>
                                                <div class="d-none md:d-block">
                                                    <div class="post-date hstack gap-narrow">
                                                        <span>55min ago</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="cstack w-16px h-16px ms-narrow d-none md:d-inline-flex position-absolute top-0 end-0">
                                                    <a href="#" class="uc-bookmark-toggle w-16px h-16px text-none"
                                                        data-uc-tooltip="Add to bookmark"><i
                                                            class="icon-narrow unicon-bookmark-add"></i></a>
                                                </div>
                                            </div>
                                            <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                                <a class="text-none hover:text-primary duration-150"
                                                    href="blog-details.html">Tech Innovations Reshaping the Retail
                                                    Landscape: AI Payments</a>
                                            </h3>
                                        </div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post type-post panel vstack gap-1 lg:gap-2">
                                        <div class="post-media panel uc-transition-toggle overflow-hidden">
                                            <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                    src="../assets/images/common/img-fallback.png"
                                                    data-src="../assets/images/main/posts/img-03.jpg"
                                                    alt="Balancing Work and Wellness: Tech Solutions for Healthy"
                                                    data-uc-img="loading: lazy">
                                            </div>
                                            <a href="blog-details.html" class="position-cover"></a>
                                        </div>
                                        <div class="post-header panel vstack gap-1">
                                            <div
                                                class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                <div>
                                                    <div class="post-category hstack gap-narrow fw-medium">
                                                        <a class="text-none text-primary dark:text-white"
                                                            href="blog-category.html">Gadgets</a>
                                                    </div>
                                                </div>
                                                <div class="sep d-none md:d-block">❘</div>
                                                <div class="d-none md:d-block">
                                                    <div class="post-date hstack gap-narrow">
                                                        <span>1h ago</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="cstack w-16px h-16px ms-narrow d-none md:d-inline-flex position-absolute top-0 end-0">
                                                    <a href="#" class="uc-bookmark-toggle w-16px h-16px text-none"
                                                        data-uc-tooltip="Add to bookmark"><i
                                                            class="icon-narrow unicon-bookmark-add"></i></a>
                                                </div>
                                            </div>
                                            <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                                <a class="text-none hover:text-primary duration-150"
                                                    href="blog-details.html">Balancing Work and Wellness: Tech Solutions
                                                    for Healthy</a>
                                            </h3>
                                        </div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post type-post panel vstack gap-1 lg:gap-2">
                                        <div class="post-media panel uc-transition-toggle overflow-hidden">
                                            <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                    src="../assets/images/common/img-fallback.png"
                                                    data-src="../assets/images/main/posts/img-04.jpg"
                                                    alt="The Importance of Sleep: Tips for Better Rest and Recovery"
                                                    data-uc-img="loading: lazy">
                                            </div>
                                            <a href="blog-details.html" class="position-cover"></a>
                                        </div>
                                        <div class="post-header panel vstack gap-1">
                                            <div
                                                class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                <div>
                                                    <div class="post-category hstack gap-narrow fw-medium">
                                                        <a class="text-none text-primary dark:text-white"
                                                            href="blog-category.html">AI Powered</a>
                                                    </div>
                                                </div>
                                                <div class="sep d-none md:d-block">❘</div>
                                                <div class="d-none md:d-block">
                                                    <div class="post-date hstack gap-narrow">
                                                        <span>2h ago</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="cstack w-16px h-16px ms-narrow d-none md:d-inline-flex position-absolute top-0 end-0">
                                                    <a href="#" class="uc-bookmark-toggle w-16px h-16px text-none"
                                                        data-uc-tooltip="Add to bookmark"><i
                                                            class="icon-narrow unicon-bookmark-add"></i></a>
                                                </div>
                                            </div>
                                            <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                                <a class="text-none hover:text-primary duration-150"
                                                    href="blog-details.html">The Importance of Sleep: Tips for Better Rest
                                                    and Recovery</a>
                                            </h3>
                                        </div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post type-post panel vstack gap-1 lg:gap-2">
                                        <div class="post-media panel uc-transition-toggle overflow-hidden">
                                            <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                    src="../assets/images/common/img-fallback.png"
                                                    data-src="../assets/images/main/posts/img-05.jpg"
                                                    alt="The Future of Sustainable Living: Driving Eco-Friendly Lifestyles"
                                                    data-uc-img="loading: lazy">
                                            </div>
                                            <a href="blog-details.html" class="position-cover"></a>
                                        </div>
                                        <div class="post-header panel vstack gap-1">
                                            <div
                                                class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                <div>
                                                    <div class="post-category hstack gap-narrow fw-medium">
                                                        <a class="text-none text-primary dark:text-white"
                                                            href="blog-category.html">AI Powered</a>
                                                    </div>
                                                </div>
                                                <div class="sep d-none md:d-block">❘</div>
                                                <div class="d-none md:d-block">
                                                    <div class="post-date hstack gap-narrow">
                                                        <span>12h ago</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="cstack w-16px h-16px ms-narrow d-none md:d-inline-flex position-absolute top-0 end-0">
                                                    <a href="#" class="uc-bookmark-toggle w-16px h-16px text-none"
                                                        data-uc-tooltip="Add to bookmark"><i
                                                            class="icon-narrow unicon-bookmark-add"></i></a>
                                                </div>
                                            </div>
                                            <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                                <a class="text-none hover:text-primary duration-150"
                                                    href="blog-details.html">The Future of Sustainable Living: Driving
                                                    Eco-Friendly Lifestyles</a>
                                            </h3>
                                        </div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post type-post panel vstack gap-1 lg:gap-2">
                                        <div class="post-media panel uc-transition-toggle overflow-hidden">
                                            <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                    src="../assets/images/common/img-fallback.png"
                                                    data-src="../assets/images/main/posts/img-06.jpg"
                                                    alt="Business Agility the Digital Age: Leveraging AI and Automation"
                                                    data-uc-img="loading: lazy">
                                            </div>
                                            <a href="blog-details.html" class="position-cover"></a>
                                        </div>
                                        <div class="post-header panel vstack gap-1">
                                            <div
                                                class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                <div>
                                                    <div class="post-category hstack gap-narrow fw-medium">
                                                        <a class="text-none text-primary dark:text-white"
                                                            href="blog-category.html">Tech</a>
                                                    </div>
                                                </div>
                                                <div class="sep d-none md:d-block">❘</div>
                                                <div class="d-none md:d-block">
                                                    <div class="post-date hstack gap-narrow">
                                                        <span>7d ago</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="cstack w-16px h-16px ms-narrow d-none md:d-inline-flex position-absolute top-0 end-0">
                                                    <a href="#" class="uc-bookmark-toggle w-16px h-16px text-none"
                                                        data-uc-tooltip="Add to bookmark"><i
                                                            class="icon-narrow unicon-bookmark-add"></i></a>
                                                </div>
                                            </div>
                                            <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                                <a class="text-none hover:text-primary duration-150"
                                                    href="blog-details.html">Business Agility the Digital Age: Leveraging
                                                    AI and Automation</a>
                                            </h3>
                                        </div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post type-post panel vstack gap-1 lg:gap-2">
                                        <div class="post-media panel uc-transition-toggle overflow-hidden">
                                            <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                    src="../assets/images/common/img-fallback.png"
                                                    data-src="../assets/images/main/posts/img-07.jpg"
                                                    alt="The Art of Baking: From Classic Bread to Artisan Pastries"
                                                    data-uc-img="loading: lazy">
                                            </div>
                                            <a href="blog-details.html" class="position-cover"></a>
                                        </div>
                                        <div class="post-header panel vstack gap-1">
                                            <div
                                                class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                <div>
                                                    <div class="post-category hstack gap-narrow fw-medium">
                                                        <a class="text-none text-primary dark:text-white"
                                                            href="blog-category.html">Network</a>
                                                    </div>
                                                </div>
                                                <div class="sep d-none md:d-block">❘</div>
                                                <div class="d-none md:d-block">
                                                    <div class="post-date hstack gap-narrow">
                                                        <span>9d ago</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="cstack w-16px h-16px ms-narrow d-none md:d-inline-flex position-absolute top-0 end-0">
                                                    <a href="#" class="uc-bookmark-toggle w-16px h-16px text-none"
                                                        data-uc-tooltip="Add to bookmark"><i
                                                            class="icon-narrow unicon-bookmark-add"></i></a>
                                                </div>
                                            </div>
                                            <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                                <a class="text-none hover:text-primary duration-150"
                                                    href="blog-details.html">The Art of Baking: From Classic Bread to
                                                    Artisan Pastries</a>
                                            </h3>
                                        </div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post type-post panel vstack gap-1 lg:gap-2">
                                        <div class="post-media panel uc-transition-toggle overflow-hidden">
                                            <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                    src="../assets/images/common/img-fallback.png"
                                                    data-src="../assets/images/main/posts/img-08.jpg"
                                                    alt="AI and Marketing: Unlocking Customer Insights"
                                                    data-uc-img="loading: lazy">
                                            </div>
                                            <a href="blog-details.html" class="position-cover"></a>
                                        </div>
                                        <div class="post-header panel vstack gap-1">
                                            <div
                                                class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                <div>
                                                    <div class="post-category hstack gap-narrow fw-medium">
                                                        <a class="text-none text-primary dark:text-white"
                                                            href="blog-category.html">Virtual Reality</a>
                                                    </div>
                                                </div>
                                                <div class="sep d-none md:d-block">❘</div>
                                                <div class="d-none md:d-block">
                                                    <div class="post-date hstack gap-narrow">
                                                        <span>15d ago</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="cstack w-16px h-16px ms-narrow d-none md:d-inline-flex position-absolute top-0 end-0">
                                                    <a href="#" class="uc-bookmark-toggle w-16px h-16px text-none"
                                                        data-uc-tooltip="Add to bookmark"><i
                                                            class="icon-narrow unicon-bookmark-add"></i></a>
                                                </div>
                                            </div>
                                            <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                                <a class="text-none hover:text-primary duration-150"
                                                    href="blog-details.html">AI and Marketing: Unlocking Customer
                                                    Insights</a>
                                            </h3>
                                        </div>
                                    </article>
                                </div>

                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="section-footer cstack lg:mt-4">
                            <a href="blog.html"
                                class="animate-btn gap-0 btn btn-sm btn-alt-primary bg-transparent dark:text-white border w-100 md:w-auto">
                                <span>See all latest news</span>
                                <i class="icon icon-1 fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Latest News End -->

        <!-- Category 1 start -->
        <div class="section panel overflow-hidden">
            <div class="section-outer panel py-5 lg:py-8">
                <div class="container max-w-xl">
                    <div class="section-inner">
                        <div class="block-layout grid-layout vstack gap-3 lg:gap-4 panel overflow-hidden">
                            <div class="block-header panel border-top pt-1">
                                <h2 class="h4 xl:h3 -ls-1 xl:-ls-2 m-0 text-inherit hstack gap-1">
                                    <span class="panel d-inline-block bg-primary w-8px h-8px translate-y-px"></span>
                                    <a class="text-none hover:text-primary duration-150"
                                        href="blog-category.html">Nasional</a>
                                </h2>
                            </div>
                            <div class="block-content">
                                <div class="panel row child-cols-12 md:child-cols gy-4 md:gx-3 xl:gx-4">
                                    <div class="col-12 md:col-6 lg:col-7">
                                        <div>
                                            <article class="post type-post panel vstack gap-1 lg:gap-2">
                                                <div class="post-media panel uc-transition-toggle overflow-hidden">
                                                    <div
                                                        class="featured-image bg-gray-25 dark:bg-gray-800 overflow-hidden ratio ratio-16x9">
                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                            src="../assets/images/common/img-fallback.png"
                                                            data-src="../assets/images/main/posts/img-01.jpg"
                                                            alt="The Rise of AI-Powered Personal Assistants: How They Manage"
                                                            data-uc-img="loading: lazy">
                                                    </div>
                                                    <a href="blog-details.html" class="position-cover"></a>
                                                </div>
                                                <div class="post-header panel vstack gap-1">
                                                    <div
                                                        class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                        <div>
                                                            <div class="post-category hstack gap-narrow fw-medium">
                                                                <a class="text-none text-primary dark:text-white"
                                                                    href="blog-category.html">Ekonomi Bisnis</a>
                                                            </div>
                                                        </div>
                                                        <div class="sep d-none md:d-block">❘</div>
                                                        <div class="d-none md:d-block">
                                                            <div class="post-date hstack gap-narrow">
                                                                <span>1min ago</span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="cstack w-16px h-16px ms-narrow d-none md:d-inline-flex position-absolute top-0 end-0">
                                                            <a href="#"
                                                                class="uc-bookmark-toggle w-16px h-16px text-none"
                                                                data-uc-tooltip="Add to bookmark"><i
                                                                    class="icon-narrow unicon-bookmark-add"></i></a>
                                                        </div>
                                                    </div>
                                                    <h3 class="post-title h5 lg:h4 m-0 text-truncate-2">
                                                        <a class="text-none hover:text-primary duration-150"
                                                            href="blog-details.html">The Rise of AI-Powered Personal
                                                            Assistants: How They Manage</a>
                                                    </h3>
                                                    <p class="fs-6 opacity-60 text-truncate-2 my-1">Law enforcement
                                                        officers have been accused of sexually abusing children over the
                                                        past two decades, a Post investigation found. Nisi dignissim tortor
                                                        sed quam sed ipsum ut. Dolor sit amet, consectetur adipiscing elit.
                                                    </p>
                                                    <div
                                                        class="post-meta panel hstack justify-between fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                        <div class="meta">
                                                            <div class="hstack gap-2">
                                                                <div>
                                                                    <div class="post-author hstack gap-1">
                                                                        <a href="page-author.html"
                                                                            data-uc-tooltip="David Peterson"><img
                                                                                src="../assets/images/avatars/01.png"
                                                                                alt="David Peterson"
                                                                                class="w-24px h-24px rounded-circle"></a>
                                                                        <a href="page-author.html"
                                                                            class="text-black dark:text-white text-none fw-bold">David
                                                                            Peterson</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="hstack gap-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="row child-cols-12 g-4 sep-x">
                                            <div>
                                                <article class="post type-post panel">
                                                    <div class="row child-cols g-2" data-uc-grid>
                                                        <div class="col-auto">
                                                            <div
                                                                class="post-media panel uc-transition-toggle overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                        src="../assets/images/common/img-fallback.png"
                                                                        data-src="../assets/images/main/posts/img-02.jpg"
                                                                        alt="Tech Innovations Reshaping the Retail Landscape: AI Payments"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="post-header panel vstack justify-between gap-1">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-medium">
                                                                            <a class="text-none text-primary dark:text-white"
                                                                                href="blog-category.html">Politics</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">❘</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>55min ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">Tech Innovations Reshaping
                                                                        the Retail Landscape: AI Payments</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div>
                                                <article class="post type-post panel">
                                                    <div class="row child-cols g-2" data-uc-grid>
                                                        <div class="col-auto">
                                                            <div
                                                                class="post-media panel uc-transition-toggle overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                        src="../assets/images/common/img-fallback.png"
                                                                        data-src="../assets/images/main/posts/img-03.jpg"
                                                                        alt="Balancing Work and Wellness: Tech Solutions for Healthy"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="post-header panel vstack justify-between gap-1">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-medium">
                                                                            <a class="text-none text-primary dark:text-white"
                                                                                href="blog-category.html">Metropolitan</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">❘</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>1h ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">Balancing Work and
                                                                        Wellness: Tech Solutions for Healthy</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div>
                                                <article class="post type-post panel">
                                                    <div class="row child-cols g-2" data-uc-grid>
                                                        <div class="col-auto">
                                                            <div
                                                                class="post-media panel uc-transition-toggle overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                        src="../assets/images/common/img-fallback.png"
                                                                        data-src="../assets/images/main/posts/img-04.jpg"
                                                                        alt="The Importance of Sleep: Tips for Better Rest and Recovery"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="post-header panel vstack justify-between gap-1">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-medium">
                                                                            <a class="text-none text-primary dark:text-white"
                                                                                href="blog-category.html">Sosial Budaya</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">❘</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>2h ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">The Importance of Sleep:
                                                                        Tips for Better Rest and Recovery</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div>
                                                <article class="post type-post panel">
                                                    <div class="row child-cols g-2" data-uc-grid>
                                                        <div class="col-auto">
                                                            <div
                                                                class="post-media panel uc-transition-toggle overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                        src="../assets/images/common/img-fallback.png"
                                                                        data-src="../assets/images/main/posts/img-05.jpg"
                                                                        alt="The Future of Sustainable Living: Driving Eco-Friendly Lifestyles"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="post-header panel vstack justify-between gap-1">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-medium">
                                                                            <a class="text-none text-primary dark:text-white"
                                                                                href="blog-category.html">Metropolitan</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">❘</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>12h ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">The Future of Sustainable
                                                                        Living: Driving Eco-Friendly Lifestyles</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div>
                                                <article class="post type-post panel">
                                                    <div class="row child-cols g-2" data-uc-grid>
                                                        <div class="col-auto">
                                                            <div
                                                                class="post-media panel uc-transition-toggle overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                        src="../assets/images/common/img-fallback.png"
                                                                        data-src="../assets/images/main/posts/img-06.jpg"
                                                                        alt="Business Agility the Digital Age: Leveraging AI and Automation"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="post-header panel vstack justify-between gap-1">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-medium">
                                                                            <a class="text-none text-primary dark:text-white"
                                                                                href="blog-category.html">Ekonomi Bisnis</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">❘</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>7d ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">Business Agility the
                                                                        Digital Age: Leveraging AI and Automation</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                        <a href="#"
                                            class="animate-btn gap-0 btn btn-sm btn-alt-primary bg-transparent dark:text-white border w-100 mt-4">
                                            <span>See all Nasional</span>
                                            <i class="icon icon-1 fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category 1 End -->

        <!-- Trend Video start -->
        <div class="section panel overflow-hidden swiper-parent uc-dark mb-5">
            <div class="section-outer panel py-5 lg:py-8 bg-gray-25 dark:bg-gray-800 dark:text-white">
                <div class="container max-w-xl">
                    <div class="section-inner panel vstack gap-4">
                        <div class="section-header panel">
                            <h2 class="h4 xl:h3 -ls-1 xl:-ls-2 m-0 text-inherit hstack gap-1">
                                <span class="panel d-inline-block bg-primary w-8px h-8px translate-y-px"></span>
                                <a class="text-none hover:text-primary duration-150" href="blog-category.html">Trend Video</a>
                            </h2>
                        </div>
                        <div class="section-content">
                            <div class="swiper"
                                data-uc-swiper="items: 2; gap: 16; autoplay: 2500; dots: .dot-nav; next: .nav-next; prev: .nav-prev; disable-class: opacity-40;"
                                data-uc-swiper-s="items: 3;" data-uc-swiper-m="gap: 24;"
                                data-uc-swiper-l="items: 3; gap: 32;">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div>
                                            <article class="post type-post panel vstack gap-1 lg:gap-2">
                                                <div class="post-media panel overflow-hidden">
                                                    <div class="featured-video bg-gray-700 ratio ratio-16x9">
                                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/akru5DSt2JA?si=w9OkRUsjk4u4gUBM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                    </div>
                                                    <div
                                                        class="has-video-overlay position-absolute top-0 end-0 w-150px h-150px bg-gradient-45 from-transparent via-transparent to-black opacity-50">
                                                    </div>
                                                    <span
                                                        class="cstack has-video-icon position-absolute top-0 end-0 fs-6 w-40px h-40px text-white">
                                                        <i class="icon-narrow unicon-play-filled-alt"></i>
                                                    </span>
                                                    <a href="https://www.youtube.com/watch?v=akru5DSt2JA" target="_blank" class="position-cover"></a>
                                                </div>
                                                <div class="post-header panel vstack gap-1">
                                                    <div
                                                        class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                        <div>
                                                            <div class="post-category hstack gap-narrow fw-medium">
                                                                <a class="text-none text-primary dark:text-white"
                                                                    href="blog-category.html">Gadgets</a>
                                                            </div>
                                                        </div>
                                                        <div class="sep d-none md:d-block">❘</div>
                                                        <div class="d-none md:d-block">
                                                            <div class="post-date hstack gap-narrow">
                                                                <span>1h ago</span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="cstack w-16px h-16px ms-narrow d-none md:d-inline-flex position-absolute top-0 end-0">
                                                            <a href="#"
                                                                class="uc-bookmark-toggle w-16px h-16px text-none"
                                                                data-uc-tooltip="Add to bookmark"><i
                                                                    class="icon-narrow unicon-bookmark-add"></i></a>
                                                        </div>
                                                    </div>
                                                    <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                                        <a class="text-none hover:text-primary duration-150"
                                                            href="https://www.youtube.com/watch?v=akru5DSt2JA" target="_blank">Balancing Work and Wellness: Tech
                                                            Solutions for Healthy</a>
                                                    </h3>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div>
                                            <article class="post type-post panel vstack gap-1 lg:gap-2">
                                                <div class="post-media panel overflow-hidden">
                                                    <div class="featured-video bg-gray-700 ratio ratio-16x9">
                                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/udSqSPM91YM?si=B7gxYd-XCxJgX4cr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                    </div>
                                                    <div
                                                        class="has-video-overlay position-absolute top-0 end-0 w-150px h-150px bg-gradient-45 from-transparent via-transparent to-black opacity-50">
                                                    </div>
                                                    <span
                                                        class="cstack has-video-icon position-absolute top-0 end-0 fs-6 w-40px h-40px text-white">
                                                        <i class="icon-narrow unicon-play-filled-alt"></i>
                                                    </span>
                                                    <a href="https://www.youtube.com/watch?v=udSqSPM91YM" target="_blank" class="position-cover"></a>
                                                </div>
                                                <div class="post-header panel vstack gap-1">
                                                    <div
                                                        class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                        <div>
                                                            <div class="post-category hstack gap-narrow fw-medium">
                                                                <a class="text-none text-primary dark:text-white"
                                                                    href="blog-category.html">Tech</a>
                                                            </div>
                                                        </div>
                                                        <div class="sep d-none md:d-block">❘</div>
                                                        <div class="d-none md:d-block">
                                                            <div class="post-date hstack gap-narrow">
                                                                <span>7d ago</span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="cstack w-16px h-16px ms-narrow d-none md:d-inline-flex position-absolute top-0 end-0">
                                                            <a href="#"
                                                                class="uc-bookmark-toggle w-16px h-16px text-none"
                                                                data-uc-tooltip="Add to bookmark"><i
                                                                    class="icon-narrow unicon-bookmark-add"></i></a>
                                                        </div>
                                                    </div>
                                                    <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                                        <a class="text-none hover:text-primary duration-150"
                                                            href="https://www.youtube.com/watch?v=udSqSPM91YM" target="_blank">Business Agility the Digital Age:
                                                            Leveraging AI and Automation</a>
                                                    </h3>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div>
                                            <article class="post type-post panel vstack gap-1 lg:gap-2">
                                                <div class="post-media panel overflow-hidden">
                                                    <div class="featured-video bg-gray-700 ratio ratio-16x9">
                                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/7Kq_emoC_uk?si=xf-3JMIpO3dKwBhw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                    </div>
                                                    <div
                                                        class="has-video-overlay position-absolute top-0 end-0 w-150px h-150px bg-gradient-45 from-transparent via-transparent to-black opacity-50">
                                                    </div>
                                                    <span
                                                        class="cstack has-video-icon position-absolute top-0 end-0 fs-6 w-40px h-40px text-white">
                                                        <i class="icon-narrow unicon-play-filled-alt"></i>
                                                    </span>
                                                    <a href="https://www.youtube.com/watch?v=7Kq_emoC_uk" target="_blank" class="position-cover"></a>
                                                </div>
                                                <div class="post-header panel vstack gap-1">
                                                    <div
                                                        class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                        <div>
                                                            <div class="post-category hstack gap-narrow fw-medium">
                                                                <a class="text-none text-primary dark:text-white"
                                                                    href="blog-category.html">Network</a>
                                                            </div>
                                                        </div>
                                                        <div class="sep d-none md:d-block">❘</div>
                                                        <div class="d-none md:d-block">
                                                            <div class="post-date hstack gap-narrow">
                                                                <span>9d ago</span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="cstack w-16px h-16px ms-narrow d-none md:d-inline-flex position-absolute top-0 end-0">
                                                            <a href="#"
                                                                class="uc-bookmark-toggle w-16px h-16px text-none"
                                                                data-uc-tooltip="Add to bookmark"><i
                                                                    class="icon-narrow unicon-bookmark-add"></i></a>
                                                        </div>
                                                    </div>
                                                    <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                                        <a class="text-none hover:text-primary duration-150"
                                                            href="https://www.youtube.com/watch?v=7Kq_emoC_uk" target="_blank">The Art of Baking: From Classic Bread
                                                            to Artisan Pastries</a>
                                                    </h3>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div>
                                            <article class="post type-post panel vstack gap-1 lg:gap-2">
                                                <div class="post-media panel overflow-hidden">
                                                    <div class="featured-video bg-gray-700 ratio ratio-16x9">
                                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/hR5AdZ52oYY?si=uh2cU37IBvANL6Ai" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                    </div>
                                                    <div
                                                        class="has-video-overlay position-absolute top-0 end-0 w-150px h-150px bg-gradient-45 from-transparent via-transparent to-black opacity-50">
                                                    </div>
                                                    <span
                                                        class="cstack has-video-icon position-absolute top-0 end-0 fs-6 w-40px h-40px text-white">
                                                        <i class="icon-narrow unicon-play-filled-alt"></i>
                                                    </span>
                                                    <a href="https://www.youtube.com/watch?v=hR5AdZ52oYY" target="_blank" class="position-cover"></a>
                                                </div>
                                                <div class="post-header panel vstack gap-1">
                                                    <div
                                                        class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                        <div>
                                                            <div class="post-category hstack gap-narrow fw-medium">
                                                                <a class="text-none text-primary dark:text-white"
                                                                    href="blog-category.html">Tech</a>
                                                            </div>
                                                        </div>
                                                        <div class="sep d-none md:d-block">❘</div>
                                                        <div class="d-none md:d-block">
                                                            <div class="post-date hstack gap-narrow">
                                                                <span>2mo ago</span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="cstack w-16px h-16px ms-narrow d-none md:d-inline-flex position-absolute top-0 end-0">
                                                            <a href="#"
                                                                class="uc-bookmark-toggle w-16px h-16px text-none"
                                                                data-uc-tooltip="Add to bookmark"><i
                                                                    class="icon-narrow unicon-bookmark-add"></i></a>
                                                        </div>
                                                    </div>
                                                    <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                                        <a class="text-none hover:text-primary duration-150"
                                                            href="https://www.youtube.com/watch?v=hR5AdZ52oYY" target="_blank">AI-Powered Financial Planning: How
                                                            Algorithms Revolutionizing</a>
                                                    </h3>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <div class="hstack gap-1 mt-4">
                                    <div
                                        class="swiper-nav nav-prev btn btn-alt-primary bg-transparent dark:text-white rounded-0 p-0 border w-32px lg:w-40px h-32px lg:h-40px shadow-sm">
                                        <i class="icon-1 fa-solid fa-chevron-left"></i>
                                    </div>
                                    <div
                                        class="swiper-nav nav-next btn btn-alt-primary bg-transparent dark:text-white rounded-0 p-0 border w-32px lg:w-40px h-32px lg:h-40px shadow-sm">
                                        <i class="icon-1 fa-solid fa-chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trend Video End -->

        <!-- Category 2 start -->
        <div class="section panel overflow-hidden">
            <div class="section-outer panel">
                <div class="container max-w-xl">
                    <div class="section-inner">
                        <div class="block-layout grid-layout vstack gap-3 lg:gap-4 panel overflow-hidden">
                            <div class="block-header panel border-top pt-1">
                                <h2 class="h4 xl:h3 -ls-1 xl:-ls-2 m-0 text-inherit hstack gap-1">
                                    <span class="panel d-inline-block bg-primary w-8px h-8px translate-y-px"></span>
                                    <a class="text-none hover:text-primary duration-150"
                                        href="blog-category.html">Lifestyle</a>
                                </h2>
                            </div>
                            <div class="block-content">
                                <div class="panel row child-cols-12 md:child-cols gy-4 md:gx-3 xl:gx-4">
                                    <div class="col-12 md:col-6 lg:col-7">
                                        <div>
                                            <article class="post type-post panel vstack gap-1 lg:gap-2">
                                                <div class="post-media panel uc-transition-toggle overflow-hidden">
                                                    <div
                                                        class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                            src="../assets/images/common/img-fallback.png"
                                                            data-src="../assets/images/main/posts/img-07.jpg"
                                                            alt="The Art of Baking: From Classic Bread to Artisan Pastries"
                                                            data-uc-img="loading: lazy">
                                                    </div>
                                                    <a href="blog-details.html" class="position-cover"></a>
                                                </div>
                                                <div class="post-header panel vstack gap-1">
                                                    <div
                                                        class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                        <div>
                                                            <div class="post-category hstack gap-narrow fw-medium">
                                                                <a class="text-none text-primary dark:text-white"
                                                                    href="blog-category.html">Beauty</a>
                                                            </div>
                                                        </div>
                                                        <div class="sep d-none md:d-block">❘</div>
                                                        <div class="d-none md:d-block">
                                                            <div class="post-date hstack gap-narrow">
                                                                <span>9d ago</span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="cstack w-16px h-16px ms-narrow d-none md:d-inline-flex position-absolute top-0 end-0">
                                                            <a href="#"
                                                                class="uc-bookmark-toggle w-16px h-16px text-none"
                                                                data-uc-tooltip="Add to bookmark"><i
                                                                    class="icon-narrow unicon-bookmark-add"></i></a>
                                                        </div>
                                                    </div>
                                                    <h3 class="post-title h5 lg:h4 m-0 text-truncate-2">
                                                        <a class="text-none hover:text-primary duration-150"
                                                            href="blog-details.html">The Art of Baking: From Classic Bread
                                                            to Artisan Pastries</a>
                                                    </h3>
                                                    <p class="fs-6 opacity-60 text-truncate-2 my-1">To spread the word, the
                                                        company embarked on a mass marketing drive. TV campaigns launched in
                                                        the platform’s key markets. Nisi dignissim tortor sed quam sed ipsum
                                                        ut. Dolor sit amet, consectetur adipiscing elit.</p>
                                                    <div
                                                        class="post-meta panel hstack justify-between fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                        <div class="meta">
                                                            <div class="hstack gap-2">
                                                                <div>
                                                                    <div class="post-author hstack gap-1">
                                                                        <a href="page-author.html"
                                                                            data-uc-tooltip="Nisi Nyung"><img
                                                                                src="../assets/images/avatars/08.png"
                                                                                alt="Nisi Nyung"
                                                                                class="w-24px h-24px rounded-circle"></a>
                                                                        <a href="page-author.html"
                                                                            class="text-black dark:text-white text-none fw-bold">Nisi
                                                                            Nyung</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="hstack gap-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="row child-cols-12 g-4 sep-x">
                                            <div>
                                                <article class="post type-post panel">
                                                    <div class="row child-cols g-2" data-uc-grid>
                                                        <div class="col-auto">
                                                            <div
                                                                class="post-media panel uc-transition-toggle overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                        src="../assets/images/common/img-fallback.png"
                                                                        data-src="../assets/images/main/posts/img-08.jpg"
                                                                        alt="AI and Marketing: Unlocking Customer Insights"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="post-header panel vstack justify-between gap-1">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-medium">
                                                                            <a class="text-none text-primary dark:text-white"
                                                                                href="blog-category.html">Kesehatan</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">❘</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>15d ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">AI and Marketing:
                                                                        Unlocking Customer Insights</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div>
                                                <article class="post type-post panel">
                                                    <div class="row child-cols g-2" data-uc-grid>
                                                        <div class="col-auto">
                                                            <div
                                                                class="post-media panel uc-transition-toggle overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                        src="../assets/images/common/img-fallback.png"
                                                                        data-src="../assets/images/main/posts/img-09.jpg"
                                                                        alt="Hidden Gems: Underrated Travel Destinations Around the World"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="post-header panel vstack justify-between gap-1">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-medium">
                                                                            <a class="text-none text-primary dark:text-white"
                                                                                href="blog-category.html">Kuliner</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">❘</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>23d ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">Hidden Gems: Underrated
                                                                        Travel Destinations Around the World</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div>
                                                <article class="post type-post panel">
                                                    <div class="row child-cols g-2" data-uc-grid>
                                                        <div class="col-auto">
                                                            <div
                                                                class="post-media panel uc-transition-toggle overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                        src="../assets/images/common/img-fallback.png"
                                                                        data-src="../assets/images/main/posts/img-10.jpg"
                                                                        alt="Eco-Tourism: Traveling Responsibly and Sustainably"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="post-header panel vstack justify-between gap-1">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-medium">
                                                                            <a class="text-none text-primary dark:text-white"
                                                                                href="blog-category.html">Traveling</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">❘</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>29d ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">Eco-Tourism: Traveling
                                                                        Responsibly and Sustainably</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div>
                                                <article class="post type-post panel">
                                                    <div class="row child-cols g-2" data-uc-grid>
                                                        <div class="col-auto">
                                                            <div
                                                                class="post-media panel uc-transition-toggle overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                        src="../assets/images/common/img-fallback.png"
                                                                        data-src="../assets/images/main/posts/img-11.jpg"
                                                                        alt="Solo Travel: Some Tips and Destinations for the Adventurous Explorer"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="post-header panel vstack justify-between gap-1">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-medium">
                                                                            <a class="text-none text-primary dark:text-white"
                                                                                href="blog-category.html">Beauty</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">❘</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>2mo ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">Solo Travel: Some Tips and
                                                                        Destinations for the Adventurous Explorer</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div>
                                                <article class="post type-post panel">
                                                    <div class="row child-cols g-2" data-uc-grid>
                                                        <div class="col-auto">
                                                            <div
                                                                class="post-media panel uc-transition-toggle overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                        src="../assets/images/common/img-fallback.png"
                                                                        data-src="../assets/images/main/posts/img-12.jpg"
                                                                        alt="AI-Powered Financial Planning: How Algorithms Revolutionizing"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="post-header panel vstack justify-between gap-1">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-medium">
                                                                            <a class="text-none text-primary dark:text-white"
                                                                                href="blog-category.html">Kesehatan</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">❘</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>2mo ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">AI-Powered Financial
                                                                        Planning: How Algorithms Revolutionizing</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                        <a href="#"
                                            class="animate-btn gap-0 btn btn-sm btn-alt-primary bg-transparent dark:text-white border w-100 mt-4">
                                            <span>See all Lifestyle</span>
                                            <i class="icon icon-1 fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category 2 end -->

        <!-- Iklan Section 2 start -->
        <div class="section panel overflow-hidden mt-6">
            <div class="section-outer panel">
                <div class="container max-w-xl">
                    <div class="section-inner">
                        <a class="text-none" href="https://themeforest.net/user/reacthemes/portfolio" target="_blank"
                            rel="nofollow">
                            <img class="d-none md:d-block" src="../assets/images/common/ad-slot.jpg" alt="Ad slot">
                            <img class="d-block md:d-none" src="../assets/images/common/ad-slot-mobile.jpg"
                                alt="Ad slot">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Iklan Section 2 end -->

        <!-- Section start -->
        <div class="section panel overflow-hidden">
            <div class="section-outer panel py-5 lg:py-8">
                <div class="container max-w-xl">
                    <div class="section-inner">
                        <div class="row child-cols-12 lg:child-cols-6 g-4 gx-8" data-uc-grid>
                            <div>
                                <div class="block-layout grid-layout vstack gap-3 lg:gap-4 panel overflow-hidden">
                                    <div class="block-header panel border-top pt-1">
                                        <h2 class="h4 xl:h3 -ls-1 xl:-ls-2 m-0 text-inherit hstack gap-1">
                                            <span
                                                class="panel d-inline-block bg-primary w-8px h-8px translate-y-px"></span>
                                            <a class="text-none hover:text-primary duration-150"
                                                href="blog-category.html">Teknologi</a>
                                        </h2>
                                    </div>
                                    <div class="block-content">
                                        <div class="row child-cols-12 g-2 gy-3 md:gx-3 md:gy-4">
                                            <div>
                                                <article class="post type-post panel">
                                                    <div class="row child-cols g-2" data-uc-grid>
                                                        <div class="col-auto">
                                                            <div
                                                                class="post-media panel uc-transition-toggle overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                        src="../assets/images/common/img-fallback.png"
                                                                        data-src="../assets/images/main/posts/img-05.jpg"
                                                                        alt="The Future of Sustainable Living: Driving Eco-Friendly Lifestyles"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="post-header panel vstack justify-between gap-1">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-medium">
                                                                            <a class="text-none text-primary dark:text-white"
                                                                                href="blog-category.html">Teknologi</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">❘</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>12h ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">The Future of Sustainable
                                                                        Living: Driving Eco-Friendly Lifestyles</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div>
                                                <article class="post type-post panel">
                                                    <div class="row child-cols g-2" data-uc-grid>
                                                        <div class="col-auto">
                                                            <div
                                                                class="post-media panel uc-transition-toggle overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                        src="../assets/images/common/img-fallback.png"
                                                                        data-src="../assets/images/main/posts/img-06.jpg"
                                                                        alt="Business Agility the Digital Age: Leveraging AI and Automation"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="post-header panel vstack justify-between gap-1">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-medium">
                                                                            <a class="text-none text-primary dark:text-white"
                                                                                href="blog-category.html">Teknologi</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">❘</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>7d ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">Business Agility the
                                                                        Digital Age: Leveraging AI and Automation</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div>
                                                <article class="post type-post panel">
                                                    <div class="row child-cols g-2" data-uc-grid>
                                                        <div class="col-auto">
                                                            <div
                                                                class="post-media panel uc-transition-toggle overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                        src="../assets/images/common/img-fallback.png"
                                                                        data-src="../assets/images/main/posts/img-07.jpg"
                                                                        alt="The Art of Baking: From Classic Bread to Artisan Pastries"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="post-header panel vstack justify-between gap-1">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-medium">
                                                                            <a class="text-none text-primary dark:text-white"
                                                                                href="blog-category.html">Teknologi</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">❘</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>9d ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">The Art of Baking: From
                                                                        Classic Bread to Artisan Pastries</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div>
                                                <article class="post type-post panel">
                                                    <div class="row child-cols g-2" data-uc-grid>
                                                        <div class="col-auto">
                                                            <div
                                                                class="post-media panel uc-transition-toggle overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                        src="../assets/images/common/img-fallback.png"
                                                                        data-src="../assets/images/main/posts/img-08.jpg"
                                                                        alt="AI and Marketing: Unlocking Customer Insights"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="post-header panel vstack justify-between gap-1">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-medium">
                                                                            <a class="text-none text-primary dark:text-white"
                                                                                href="blog-category.html">Teknologi</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">❘</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>15d ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">AI and Marketing:
                                                                        Unlocking Customer Insights</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-footer cstack lg:mt-2">
                                        <a href="#"
                                            class="animate-btn gap-0 btn btn-sm btn-alt-primary bg-transparent dark:text-white border w-100 md:w-auto">
                                            <span>See all Teknologi</span>
                                            <i class="icon icon-1 fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="block-layout grid-layout vstack gap-3 lg:gap-4 panel overflow-hidden">
                                    <div class="block-header panel border-top pt-1">
                                        <h2 class="h4 xl:h3 -ls-1 xl:-ls-2 m-0 text-inherit hstack gap-1">
                                            <span
                                                class="panel d-inline-block bg-primary w-8px h-8px translate-y-px"></span>
                                            <a class="text-none hover:text-primary duration-150"
                                                href="blog-category.html">Daerah</a>
                                        </h2>
                                    </div>
                                    <div class="block-content">
                                        <div class="row child-cols-12 g-2 gy-3 md:gx-3 md:gy-4">
                                            <div>
                                                <article class="post type-post panel">
                                                    <div class="row child-cols g-2" data-uc-grid>
                                                        <div class="col-auto">
                                                            <div
                                                                class="post-media panel uc-transition-toggle overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                        src="../assets/images/common/img-fallback.png"
                                                                        data-src="../assets/images/main/posts/img-11.jpg"
                                                                        alt="Solo Travel: Some Tips and Destinations for the Adventurous Explorer"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="post-header panel vstack justify-between gap-1">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-medium">
                                                                            <a class="text-none text-primary dark:text-white"
                                                                                href="blog-category.html">Banten</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">❘</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>2mo ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">Solo Travel: Some Tips and
                                                                        Destinations for the Adventurous Explorer</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div>
                                                <article class="post type-post panel">
                                                    <div class="row child-cols g-2" data-uc-grid>
                                                        <div class="col-auto">
                                                            <div
                                                                class="post-media panel uc-transition-toggle overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                        src="../assets/images/common/img-fallback.png"
                                                                        data-src="../assets/images/main/posts/img-12.jpg"
                                                                        alt="AI-Powered Financial Planning: How Algorithms Revolutionizing"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="post-header panel vstack justify-between gap-1">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-medium">
                                                                            <a class="text-none text-primary dark:text-white"
                                                                                href="blog-category.html">Bengkulu</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">❘</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>2mo ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">AI-Powered Financial
                                                                        Planning: How Algorithms Revolutionizing</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div>
                                                <article class="post type-post panel">
                                                    <div class="row child-cols g-2" data-uc-grid>
                                                        <div class="col-auto">
                                                            <div
                                                                class="post-media panel uc-transition-toggle overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                        src="../assets/images/common/img-fallback.png"
                                                                        data-src="../assets/images/main/posts/img-13.jpg"
                                                                        alt="Tech Tools for your Time Management: Enhancing Productivity"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="post-header panel vstack justify-between gap-1">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-medium">
                                                                            <a class="text-none text-primary dark:text-white"
                                                                                href="blog-category.html">Jawa Barat</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">❘</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>3mo ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">Tech Tools for your Time
                                                                        Management: Enhancing Productivity</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div>
                                                <article class="post type-post panel">
                                                    <div class="row child-cols g-2" data-uc-grid>
                                                        <div class="col-auto">
                                                            <div
                                                                class="post-media panel uc-transition-toggle overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                        src="../assets/images/common/img-fallback.png"
                                                                        data-src="../assets/images/main/posts/img-14.jpg"
                                                                        alt="A Guide to The Rise of Gourmet Street Food: Trends and Top Picks"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="post-header panel vstack justify-between gap-1">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-medium">
                                                                            <a class="text-none text-primary dark:text-white"
                                                                                href="blog-category.html">Riau</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">❘</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>6mo ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">A Guide to The Rise of
                                                                        Gourmet Street Food: Trends and Top Picks</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-footer cstack lg:mt-2">
                                        <a href="#"
                                            class="animate-btn gap-0 btn btn-sm btn-alt-primary bg-transparent dark:text-white border w-100 md:w-auto">
                                            <span>See all Daerah</span>
                                            <i class="icon icon-1 fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section end -->
    </div>
@endsection
