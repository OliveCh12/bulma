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

    <div class="columns">
      {{-- Article Content --}}
      <div class="column is-8">
        @foreach ($posts as $post)
          @include('layouts.partials.blog.article_index')
        @endforeach
      </div>
      {{-- Sidebar Content --}}
      <div class="column is-4">
        @include('layouts.partials.aside')
      </div>
    </div>


  </section>
@endsection
