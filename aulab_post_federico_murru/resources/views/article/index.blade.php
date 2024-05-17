<x-layout>

    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">Article list</h1>
        </div>

    </div>
<div class="container my-5">
    <div class="row justify-content-center">
        @foreach ($articles as $article)
        <div class="col-12 col-md-3">
          <div class="card" style="width: 18rem;">
            <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="Immagine dell'articolo: {{ $article->title }}">
            <div class="card-body">
              <h5 class="card-title">{{ $article->title }}</h5>
              <p class="card-subtitle">{{ $article->subtitle }}</p>
              <p class="small text-muted">Category:
                <a href="{{route('article.byCategory', $article->category)}}" class="text-capitalize text-muted">{{ $article->category->name }}</a>
              </p>
            </div>            
            <div class="card-footer d-flex justify-content-between align-items-center">
              <a href="{{route('article.show', $article)}}" class="btn btn-outline-secondary">Leggi</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
</div>
</x-layout>