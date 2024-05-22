<div class="box"></div>
<div class="card card2" style="height: 670px;">
  <img src="{{ Storage::url($article->image) }}" class="card-img-top imgalt" alt="immagine card">
  <div class="card-body">
    <h6 class="card-title"><strong>{{ $article->title }}</strong></h6>
    <p class="card-text"><i>{{ $article->subtitle }}</i></p>
    
    @if ($article->category)
      <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}" class="small text-muted d-flex justify-content-center align-items-center my-2">{{ $article->category->name }}</a>
      <span class="text-muted small fst-italic">- Read time {{ $article->readDuration() }} min -</span>
    @else
      <p class="small text-muted fst-italic text-capitalize">Uncategorised</p>
    @endif

    @if ($article->tags)
      <p class="small fst-italic text-capitalize">
        @foreach ($article->tags as $tag)
          #{{ $tag->name }}
        @endforeach
      </p>
    @endif

    <div class="card-footer text-muted d-flex justify-content-center align-items-center flex-column">
      <div class="my-2">
        Created on: {{ $article->created_at->format('d/m/Y') }} by
        <a href="{{ route('article.byUser', ['user' => $article->user->id]) }}">{{ $article->user->name }}</a>
      </div>
      <a href="{{ route('article.show', ['article' => $article]) }}" class="btn btn-info text-white">Read</a>
    </div>
  </div>
</div>
