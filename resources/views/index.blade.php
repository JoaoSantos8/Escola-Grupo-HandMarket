@extends('layout.master')

@section('title','Home')

@section('styles')

<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<style>


    box-sizing: none !important;

</style>
<div class="rotate-slider">
    <ul class="slides">
      <li>
        <div class="inner">
          <h2>Actual Rotating Slider</h2>
          <p>Built with math and dedication</p>
        </div>
      </li>
      <li>
        <div class="inner"></div>
      </li>
      <li>
        <div class="inner">
          <h2>Hates IE</h2>
          <p>Uses clip-path to shape slides</p>
        </div>
      </li>
      <li>
        <div class="inner">
        </div>
      </li>
      <li>
        <div class="inner">
          <h2>Easy to use</h2>
          <p>Just add list elements in the HTML and set a height and width in the JavaScript Settings</p>
          <p><small>Slider controls and proper jQuery plugin coming soon.</small></p>
        </div>
      </li>
      <li>
        <div class="inner">
          <h2>I'm not a thief!</h2>
          <p>Stock photos from www.pexels.com</p>
        </div>
      </li>
    </ul>
  </div>
  <svg>
    <defs>
      <clipPath id="slideClip">
        <path />
      </clipPath>
    </defs>
  </svg>

@endsection

@section('scripts')

<script src="{{ asset('js/index.js') }}"></script>

@endsection
