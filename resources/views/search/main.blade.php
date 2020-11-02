@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@section('title') UGA • BLOGS @stop</title>
  <link rel="stylesheet" href="{{ asset('styles/blogs/main.css') }}">
  <link rel="stylesheet" href="{{ asset('styles/blogs/cards.main.blogs.css') }}">
  </style>
</head>

<body>
  @section('content')
  <div class="col-md-3 col-sm-3 col-xs-12 sidebar">
    <section class="categories-title">
      <span>Browse categories</span>
    </section>
    <ul>
      <li>
        <a href="search?is_cat=true&bsq=HOME">
          <i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;<span>HOME</span>
        </a>
      </li>

      <li>
        <a href="search?is_cat=true&bsq=GAMING">
          <i class="fa fa-info-circle"></i>&nbsp;&nbsp;&nbsp;<span>Gaming</span>
        </a>
      </li>

      <li>
        <i class="fa fa-rocket"></i>&nbsp;&nbsp;&nbsp;<span>technology</span>
      </li>

    </ul>
  </div>


  <div class="col-md-8 col-sm-8 col-xs-12 px-md-5 ml-md-5 content-wrapper">
      <h3>Your Search Results<h3>

    <section id="blog_area" class="pt-5">
    @if($err == false)
      <div id="masonry" style="--column-count-lg: @if($dt_count%3 === 0)
 {{ 3 }}
 @elseif($dt_count%4 === 0)
{{ 4 }}
@else
{{ 2 }}
@endif">
        @foreach($sdt as $dt)
        <div class="card">
          <div class="card__img">
            <a href="#">
              <img class="img-fluid" src="{{ asset('admins_storage/'.$dt->blog_thumb_url) }}" alt="Image 1">
            </a>
            <div class="card__date">
              <span>{{ $dt->created_at->format('j F, Y') ?? '' }}</span>
            </div>
          </div>
          <div class="card__content">
            <h4 class="card__title">
              {{ $dt->blog_name ?? '' }}
            </h4>
            <p class="card__content-jcenter">
              {{ $dt->blog_short_des ?? '' }}
            </p>
            <span>
              <a href="blogs/{{ base64_encode($dt->blog_id) ?? '' }}">Read more..</a>
            </span>
          </div>
        </div>
        @endforeach
@else
<div>{{ $err_msg ?? '' }}</div>
@endif
      </div>

  </div>
  </section>
  </div>
  @stop
</body>

</html>