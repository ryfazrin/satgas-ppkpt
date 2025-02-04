<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('partials.header')

            @if(Request::is('dashboard'))  
                @include('partials.sidebar')
            @else
                <div class="main-navbar">
                    @include('partials.navbar')
                </div>
            @endif

<div class="main-wrapper main-wrapper-1">
  @yield('content')
</div>

@include('partials.footer')
