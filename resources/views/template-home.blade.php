{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-template-home')
    @include('partials.content-page')
    
  @endwhile
@endsection

