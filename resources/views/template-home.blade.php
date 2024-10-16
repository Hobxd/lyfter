{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.home-page.content-hero')  
    @include('partials.home-page.content-cards')    
    @include('partials.home-page.content-blue-text-media')
    @include('partials.home-page.content-pink-text-media')
    @include('partials.content-page')
    
  @endwhile
@endsection

