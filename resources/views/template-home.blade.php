{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <h1 class="fs-3 mb-5 ">Bootstrap Enabled</h1>
  @endwhile
@endsection
