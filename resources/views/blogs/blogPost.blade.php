@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('styles/blogs/blogPost.css') }}">
    <title></title>
</head>

<body>
    @section('content')
    <div class="blog-img-cont col-md-12 col-sm-12 col-xs-12">
        <img src="{{ asset('admins_storage/'.$i_u ?? '') }}" alt="" srcset="" class="cards">
    </div>
    <section class="blog-content col-12 ">
        <div class="row mb-5">
            <article class="blog-info col-md-8 col-xs-12">
                <h1>{{ $b_n ?? '' }}</h1>
                <div class="row author-info text-muted">
                    <div class="dtnname col-md-6 col-sm-8 col-xs-12">
                        <label class="text-muted">By <span class="profile-author"><img src="{{ asset('images/gear5.jpg') }}" alt="" srcset="" class="cards"></span><strong class="author-name text-dark">{{ $a_n ?? '' }}</strong> at <small class="upload-date text-primary">{{ $dt ?? '' }}</small><label>
                    </div>
                    <div class="social-share col-md-6 col-sm-4 col-xs-12">
                        <div class="share-icon"><i class="fa fa-twitter"></i></div>
                        <div class="share-icon"><i class="fa fa-facebook"></i></div>
                        <div class="share-icon"><i class="fa fa-youtube"></i></div>
                    </div>
                </div>
                <div class="main-article row">
                    <p class="col-12 mt-5">
                        {!! $b_d ?? '' !!}
                    </p>
                </div>
            </article>
            <aside class="sidebar ml-md-5 col-md-3 col-sm-3 col-xs-12">
                <div class="row">
                    <section class="categories-title">
                        <span>More Posts</span>
                    </section>
                    <div class="post-cont col-12">
                        @if(!is_null($sugg))
                        @foreach($sugg as $s)

                        @if($s->blog_id != $sugg_except)

                        <div class="post row">
                            <div class="img-post col-md-4 col-sm-4 col-xs-4">
                                <img src="{{ asset('admins_storage/'.$s->blog_thumb_url) }}" alt="" srcset="" class="cards">
                            </div>
                            <div class="info-post col-md-8 col-sm-8 col-xs-10">
                                <small><b>{{ $s->blog_short_des ?? ''}} </b></small>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        @else
                        <div class="post row">

                            <div class="info-post col-md-12 col-sm-12 col-xs-12">
                                <h4><b class="text-muted">{{$s->blog_id}} </b></h4>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </aside>
        </div>
    </section>
    @stop
</body>

</html>