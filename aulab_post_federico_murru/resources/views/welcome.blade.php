<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">The Aulab Post</h1>
        </div>
    </div>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="col-12 col-sm-5 m-2">
                <div class="card h-100">
                    <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="Image: {{ $article->title }}" style="height: 200px; object-fit:fill; width: 100%;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-subtitle mb-2">{{ $article->subtitle }}</p>
                        <p class="small text-muted">
                            Category: <a href="{{ route('article.byCategory', $article->category) }}" class="text-capitalize text-muted">{{ $article->category->name }}</a>
                        </p>
                        <p class="small text-muted">
                            Author: <a href="{{ route('article.byUser', $article->user) }}" class="text-capitalize text-muted">{{ $article->user->name }}</a>
                        </p>
                        <div class="mt-auto">
                            <a href="{{ route('article.show', $article) }}" class="btn btn-outline-secondary">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>

    </div>
</x-layout>
