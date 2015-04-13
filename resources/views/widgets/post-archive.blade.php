<div class="sidebar-module">
  <h4>Archives</h4>
  <ol class="list-unstyled">
    @foreach ($posts as $post)
    <li><a href="{{ $post->archive_url }}">{{ $post->published_at->format('M Y') }}</a></li>
    @endforeach
  </ol>
</div>