<!-- START ARTICLE -->
<article class="article">

  <div class="card article">
    <div class="card-content">
      <div class="media">
        <div class="media-center">
          {{-- <img src="http://www.radfaces.com/images/avatars/daria-morgendorffer.jpg" class="author-image" alt="Placeholder image"> --}}
        </div>
        <div class="media-content has-text-left">
          <p class="title article-title">{{ $post->title }}</p>
          <p class="subtitle">{{ $post->subtitle }}</p>
          <p class="subtitle article-subtitle">
            <strong>Published :</strong><a href="#">{{ date('M j, Y', strtotime($post->created_at)) }}</a>
          </p>
        </div>
      </div>
      <div class="content article-body">
        <p>{{ $post->body }}</p>
      </div>
      <br>
      <span class="tag is-light">Article : {{ $post->id }}</span>
    </div>
  </div>
</article>
<br>
<!-- END ARTICLE -->
