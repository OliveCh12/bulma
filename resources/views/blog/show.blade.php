{{-- Home --}}
@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
  @parent
  {{-- @include('layouts.partials.sidebar') --}}
@endsection

@section('content')
  <section class="section">

    <h3 class="title">Blog</h3>
    <p class="subtitle">Find Everything here :</p>

    <nav class="breadcrumb" aria-label="breadcrumbs">
      <ul>
        <li><a href="{{'/blog'}}">Blog</a></li>
        <li class="is-active" aria-current="page"> Article : {{ $post->id }}</li>
      </ul>
    </nav>

    <div class="columns">
      {{-- Article Content --}}
      <div class="column is-8">
        @include('layouts.partials.blog.article_show')
      </div>
      {{-- Sidebar Content --}}
      <div class="column is-4">
        @include('layouts.partials.aside')
      </div>
    </div>


  </section>
@endsection
