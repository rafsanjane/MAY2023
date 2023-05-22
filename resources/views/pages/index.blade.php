<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title>FUSE navigation Template </title>
  <link rel="stylesheet" href="{{asset('css/fullpage.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/swiper-3.3.1.css')}}">
  <link rel="stylesheet" href="{{asset('css/cleander.css')}}">
  <link rel="stylesheet" href="{{asset('css/landingv3.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
  <link rel='stylesheet' href='https://anandchowdhary.github.io/ionicons-3-cdn/icons.css'>
  <link rel="stylesheet" href="{{asset('css/font-awesome-4.7.0/css/font-awesome.min.css')}}">

</head>

@extends('header')


<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
  <!-- PRE LOADER -->
  <div class="loader_wrapper">
    <div class="loader">
      <img src="{{asset('img/mockup/loader.gif')}}" alt="loader">
    </div>
  </div>
  <div id="fullpage">
    <section class="vertical-scrolling section1 active">
      @extends('section-1')

    </section>
    <section class="vertical-scrolling section2">
      @extends('section-2')
    </section>
    <section class="vertical-scrolling section3">

      @extends('section-3')
    </section>
    <section class="vertical-scrolling section4">

      @extends('section-4')

    </section>
    <section class="vertical-scrolling section5">

      @extends('section-5')
    </section>
    <section class="vertical-scrolling section6">

      @extends('section-6')
    </section>
  </div>
  <script src="{{asset('js/jquery-1.11.3.js')}}"></script>
  <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/fullpage.js')}}"></script>
  <script src="{{asset('js/index.js')}}"></script>
  <script src="{{asset('js/swiper-3.3.1.js')}}"></script>
  <script src="{{asset('js/cleander.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
</body>

</html>