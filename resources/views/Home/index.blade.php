@extends('Home.layout')
<div class="container">
    @if (session('succes'))
        {{-- @isset($succes) --}}
        <div class="alert alert-success ">
            {{ session('succes') }}
        </div>

    @endif


</div>

@section('content')



    <section id="newsSection">


        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="latest_newsarea"> <span>Latest News</span>
                    <ul id="ticker01" class="news_sticker">
                        @foreach ($news as $new)
                            <li><a href="#"><img src="{{ asset($new->image) }}" alt="">{{ $new->title }}</a></li>
                        @endforeach
                    </ul>
                    <div class="social_area">
                        <ul class="social_nav">
                            <li class="facebook"><a href="#"></a></li>
                            <li class="twitter"><a href="#"></a></li>
                            <li class="flickr"><a href="#"></a></li>
                            <li class="pinterest"><a href="#"></a></li>
                            <li class="googleplus"><a href="#"></a></li>
                            <li class="vimeo"><a href="#"></a></li>
                            <li class="youtube"><a href="#"></a></li>
                            <li class="mail"><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sliderSection">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="slick_slider">

                    @foreach ($posts as $post)
                        <div class="single_iteam">
                            <a href="pages/single_page.html">
                                <img src="{{ asset($post->image) }}" alt="">
                            </a>
                            <div class="slider_article">
                                <h2><a class="slider_tittle" href="pages/single_page.html">{{ $post->title }}</a></h2>
                                <p>{{ $post->content }}</p>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="latest_post">
                    <h2><span>Latest post</span></h2>
                    <div class="latest_post_container">
                        <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
                        <ul class="latest_postnav">

                            @foreach ($all_post as $post)
                                <li>
                                    <div class="media"> <a href="#" class="media-left"> <img alt=""
                                                src="{{ asset($post->image_icon) }}"> </a>
                                        <div class="media-body">
                                            <a href="pages/single_page.html" class="catg_title">
                                                {{ $post->title }}
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            @endforeach



                        </ul>
                        <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contentSection">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="left_content">
                    <div class="single_post_content">
                        <h2><span>Business</span></h2>
                        <div class="single_post_content_left">
                            <ul class="business_catgnav  wow fadeInDown">
                                <li>
                                    <figure class="bsbig_fig"> <a href="pages/single_page.html" class="featured_img"> <img
                                                alt="" src="images/featured_img1.jpg"> <span class="overlay"></span> </a>
                                        <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare
                                                mauris</a> </figcaption>
                                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas
                                            imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                        <div class="single_post_content_right">
                            <ul class="spost_nav">

                                @foreach ($post_business as $post_busines)
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left">
                                                <img alt="" src="{{ $post_busines->image }}"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                    {{ $post_busines->title }}</a> </div>
                                        </div>
                                    </li>
                                @endforeach


                            </ul>
                        </div>
                    </div>
                    <div class="fashion_technology_area">
                        <div class="fashion">
                            <div class="single_post_content">
                                <h2><span>Fashion</span></h2>
                                <ul class="business_catgnav wow fadeInDown">
                                    <li>
                                        <figure class="bsbig_fig"> <a href="pages/single_page.html" class="featured_img">
                                                <img alt="" src="images/featured_img2.jpg"> <span class="overlay"></span>
                                            </a>
                                            <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu
                                                    ornare mauris</a> </figcaption>
                                            <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas
                                                imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                                        </figure>
                                    </li>
                                </ul>
                                <ul class="spost_nav">
                                    @foreach ($post_fashion as $fashion)
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left">
                                                    <img alt="" src="{{ $fashion->image }}"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title">
                                                        {{ $fashion->title }}</a> </div>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <div class="technology">
                            <div class="single_post_content">
                                <h2><span>Technology</span></h2>
                                <ul class="business_catgnav">
                                    <li>
                                        <figure class="bsbig_fig wow fadeInDown"> <a href="pages/single_page.html"
                                                class="featured_img"> <img alt="" src="images/featured_img3.jpg"> <span
                                                    class="overlay"></span> </a>
                                            <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu
                                                    ornare mauris</a> </figcaption>
                                            <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas
                                                imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                                        </figure>
                                    </li>
                                </ul>
                                <ul class="spost_nav">
                                    @foreach ($post_technology as $technology)
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left">
                                                    <img alt="" src="{{ $technology->image }}"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title">
                                                        {{ $technology->title }}</a> </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_post_content">
                        <h2><span>Photography</span></h2>
                        <ul class="photograph_nav  wow fadeInDown">
                            <li>
                                <div class="photo_grid">
                                    <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button"
                                            href="images/photograph_img2.jpg" title="Photography Ttile 1"> <img
                                                src="images/photograph_img2.jpg" alt="" /></a> </figure>
                                </div>
                            </li>
                            <li>
                                <div class="photo_grid">
                                    <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button"
                                            href="images/photograph_img3.jpg" title="Photography Ttile 2"> <img
                                                src="images/photograph_img3.jpg" alt="" /> </a> </figure>
                                </div>
                            </li>
                            <li>
                                <div class="photo_grid">
                                    <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button"
                                            href="images/photograph_img4.jpg" title="Photography Ttile 3"> <img
                                                src="images/photograph_img4.jpg" alt="" /> </a> </figure>
                                </div>
                            </li>
                            <li>
                                <div class="photo_grid">
                                    <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button"
                                            href="images/photograph_img4.jpg" title="Photography Ttile 4"> <img
                                                src="images/photograph_img4.jpg" alt="" /> </a> </figure>
                                </div>
                            </li>
                            <li>
                                <div class="photo_grid">
                                    <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button"
                                            href="images/photograph_img2.jpg" title="Photography Ttile 5"> <img
                                                src="images/photograph_img2.jpg" alt="" /> </a> </figure>
                                </div>
                            </li>
                            <li>
                                <div class="photo_grid">
                                    <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button"
                                            href="images/photograph_img3.jpg" title="Photography Ttile 6"> <img
                                                src="images/photograph_img3.jpg" alt="" /> </a> </figure>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="single_post_content">
                        <h2><span>Games</span></h2>
                        <div class="single_post_content_left">
                            <ul class="business_catgnav">
                                <li>
                                    <figure class="bsbig_fig  wow fadeInDown"> <a class="featured_img"
                                            href="pages/single_page.html"> <img src="images/featured_img1.jpg" alt=""> <span
                                                class="overlay"></span> </a>
                                        <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare
                                                mauris</a> </figcaption>
                                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas
                                            imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                        <div class="single_post_content_right">
                            <ul class="spost_nav">
                                @foreach ($post_game as $game)
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left">
                                                <img alt="" src="{{$game->image}}"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                    {{$game->title}}</a> </div>
                                        </div>
                                    </li>

                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4">
                <aside class="right_content">
                    <div class="single_sidebar">
                        <h2><span>Popular Post</span></h2>
                        <ul class="spost_nav">

                            @foreach ($popular_posts as $popular_post)
                                <li>
                                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left">
                                            <img alt="" src="{{ asset($popular_post->image_icon) }}"> </a>
                                        <div class="media-body">
                                            <a href="pages/single_page.html" class="catg_title">
                                                {{ $popular_post->title }}
                                            </a>
                                        </div>
                                    </div>
                                </li>

                            @endforeach


                        </ul>
                    </div>
                    <div class="single_sidebar">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab"
                                    data-toggle="tab">Category</a></li>
                            <li role="presentation"><a href="#video" aria-controls="profile" role="tab"
                                    data-toggle="tab">Video</a></li>
                            <li role="presentation"><a href="#comments" aria-controls="messages" role="tab"
                                    data-toggle="tab">Comments</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="category">
                                <ul>

                                    @foreach ($categoreies as $categorey)
                                        <li class="cat-item"><a href="#">{{ $categorey->name }}</a></li>

                                    @endforeach

                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="video">
                                <div class="vide_area">
                                    <iframe width="100%" height="250"
                                        src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage"
                                        frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="comments">
                                <ul class="spost_nav">
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                    Aliquam malesuada diam eget turpis varius 1</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                    Aliquam malesuada diam eget turpis varius 2</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                    Aliquam malesuada diam eget turpis varius 3</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                    Aliquam malesuada diam eget turpis varius 4</a> </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_sidebar wow fadeInDown">
                        <h2><span>Sponsor</span></h2>
                        <a class="sideAdd" href="#"><img src="images/add_img.jpg" alt=""></a>
                    </div>
                    <div class="single_sidebar wow fadeInDown">
                        <h2><span>Category Archive</span></h2>
                        <select class="catgArchive">
                            <option>Select Category</option>
                            <option>Life styles</option>
                            <option>Sports</option>
                            <option>Technology</option>
                            <option>Treads</option>
                        </select>
                    </div>
                    <div class="single_sidebar wow fadeInDown">
                        <h2><span>Links</span></h2>
                        <ul>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Rss Feed</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Life &amp; Style</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection
