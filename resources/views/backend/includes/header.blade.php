<?php

use App\Models\Categories;
$categories = Categories::all(); // Fetch all categories from the database
?>

<head>
    <title>Big-Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{ asset('frontend/layout/styles/layout.css') }}" rel="stylesheet" type="text/css" media="all">
</head>

<div class="bgded overlay light" style="background-image:url('frontend/images/demo/backgrounds/01.png');"> 
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="/index">Big-Blog</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index">Home</a></li>
          <li><a class="drop" href="#">My Blogs</a></li>
          <li><a class="drop" href="#">Categories</a>
            <ul>
              @foreach($categories as $category)
                <li><a href="#">{{ $category->Tag }}</a></li>
              @endforeach
            </ul>
          </li>
          <li><a href="#">About</a></li>
          <li><a href="#">Login</a></li>
        </ul>
      </nav>
    </header>
  </div>
</div>
