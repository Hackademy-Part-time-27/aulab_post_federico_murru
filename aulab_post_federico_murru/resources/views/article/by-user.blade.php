<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
      <div class="row justify-content-center">
        <div class="col-12">
          <h1 class="display-1">Articles by user</h1>
        </div>
      </div>
    </div>
    <div class="container my-5">
      <div class="row justify-content-evenly">
        @foreach ($articles as $article)
        <div class="col-12 col-sm-5 m-3">
            <div class="card h-100" style="height: 100%;">
                <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="Immagine dell'articolo: {{ $article->title }}" style="height: 200px; object-fit: cover; width: 100%;">
                <div class="card-body">
                <h5 class="card-title">{{ $article->title }}</h5>
                <p class="card-subtitle">{{ $article->subtitle }}</p>
              </div>
              <div class="card-footer d-flex justify-content-between align-items-center">
                <p>Written on {{$article->created_at->format('d/m/Y')}} <br> by {{$article->user->name}}</p>
                <a href="{{route('article.show', $article)}}" class="btn btn-outline-secondary">Read more</a>
              </div>
            </div>
          </div>
        @endforeach
        <div class="text-center">
            <a href="{{route('article.index')}}" class="btn btn-info text-white my-3">back</a>
        </div>
      </div>
    </div>
  </x-layout>