<x-layout>
    <div class="container-fluid p-5 allArticle text-center">
        <div class="row justify-content-center">
            <div class="h1 display-1">
                Titolo: {{ $article->title }}
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 m-3">
                <div class="d-flex justify-content-center">
                    <img src="{{ Storage::url($article->image) }}" alt="" style="border-radius: 1rem;" class="img-fluid mt-3">
                </div>
            </div>
        </div>
        <div class="text-center">
            <h2>{{ $article->subtitle }}</h2>
            <div class="my-3 text-muted fst-italic">
                <p>created by {{ $article->user->name }} on {{ $article->created_at->format('d/m/Y') }}</p>
            </div>
        </div>
    </div>
    <hr>
    <p class="text-break">{{$article->body}}</p>
    <div class="text-center">
        <a href="{{route('article.index')}}" class="btn btn-info text-white my-5">back</a>
    </div>

</x-layout>